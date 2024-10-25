<?php

namespace App\Http\Controllers;

use App\Models\NewProduct;
use App\Models\NewProductModule;
use App\Models\Module;
use Illuminate\Http\Request;

class NewProductModuleController extends Controller
{
    public function index(NewProduct $new_product)
    {
        // Fetch modules with their associated module data
        $modules = NewProductModule::where('new_product_id', $new_product->id)
            ->with('module') // Include the module relationship
            ->get();

        return view('backend.new_product_modules.index', compact('new_product', 'modules'));
    }

    public function create(NewProduct $new_product)
    {
        $associatedModuleIds = $new_product->modules->pluck('module_id')->toArray();
        $modules = Module::whereNotIn('id', $associatedModuleIds)->get();

        return view('backend.new_product_modules.create', compact('new_product', 'modules'));
    }

    public function store(Request $request, NewProduct $new_product)
    {
        $request->validate([
            'module_id' => 'required|exists:modules,id',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Create a new product module association
        $newModule = new NewProductModule();
        $newModule->new_product_id = $new_product->id;
        $newModule->module_id = $request->module_id; // Store the selected module ID
        $newModule->description = $request->description;

        // Handle image upload
        if ($request->hasFile('image')) {
            $newModule->image = $this->uploadFile($request->file('image'), 'new_product/modules');
        }

        $newModule->save();

        return redirect()->route('backend.new_products.modules.index', $new_product->id)->with('success', 'Module description added successfully.');
    }

    public function edit($new_product_id, $module_id)
    {
        $new_product = NewProduct::findOrFail($new_product_id);
        $module = NewProductModule::findOrFail($module_id);

        return view('backend.new_product_modules.edit', compact('new_product', 'module'));
    }

    public function update(Request $request, $new_product_id, $module_id)
    {
        $new_product = NewProduct::findOrFail($new_product_id);
        $module = NewProductModule::findOrFail($module_id);

        $request->validate([
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $module->description = $request->description;

        // Handle image upload
        if ($request->hasFile('image')) {
            if ($module->image && file_exists(public_path('media/new_product/modules/' . $module->image))) {
                unlink(public_path('media/new_product/modules/' . $module->image));
            }
            $module->image = $this->uploadFile($request->file('image'), 'new_product/modules');
        }

        $module->save();

        return redirect()->route('backend.new_products.modules.index', $new_product->id)->with('success', 'Module updated successfully.');
    }

    private function uploadFile($file, $folder)
    {
        $fileName = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('media/' . $folder), $fileName);
        return $fileName;
    }

    public function destroy(NewProductModule $module)
    {
        if ($module->image && file_exists(public_path('media/new_product/modules/' . $module->image))) {
            unlink(public_path('media/new_product/modules/' . $module->image));
        }
        $module->delete();
        return redirect()->back()->with('success', 'Module deleted successfully.');
    }
}
