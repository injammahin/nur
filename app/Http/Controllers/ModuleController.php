<?php
// app/Http/Controllers/ModuleController.php
namespace App\Http\Controllers;

use App\Models\Module;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ModuleController extends Controller
{
    public function index()
    {
        // Fetch all modules from the database
        $modules = Module::all();
dd($modules);
        // Pass the modules to the view
        return view('backend.modules', compact('modules'));
    }

    public function create()
    {
        return view('backend.modules.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $module = Module::create([
            'name' => $request->name,
            'logo' => $this->uploadImage($request, 'logo', 'modules/logos'),
        ]);

        return redirect()->route('backend.modules.index')->with('success', 'Module created successfully.');
    }

    public function edit(Module $module)
    {
        return view('backend.modules.edit', compact('module'));
    }

    public function update(Request $request, Module $module)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $module->update([
            'name' => $request->name,
            'logo' => $this->handleImageUpdate($request, $module, 'logo', 'modules/logos'),
        ]);

        return redirect()->route('backend.modules.index')->with('success', 'Module updated successfully.');
    }

    public function destroy(Module $module)
    {
        if ($module->logo && File::exists(public_path('media/modules/logos/' . $module->logo))) {
            File::delete(public_path('media/modules/logos/' . $module->logo));
        }

        $module->delete();

        return redirect()->route('backend.modules.index')->with('success', 'Module deleted successfully.');
    }

    private function uploadImage(Request $request, $fieldName, $folder)
    {
        if ($request->hasFile($fieldName)) {
            $file = $request->file($fieldName);
            $fileName = time() . '_' . $fieldName . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('media/' . $folder), $fileName);
            return $fileName;
        }
        return null;
    }

    private function handleImageUpdate(Request $request, Module $module, $fieldName, $folder)
    {
        if ($request->hasFile($fieldName)) {
            if ($module->$fieldName && File::exists(public_path('media/' . $folder . '/' . $module->$fieldName))) {
                File::delete(public_path('media/' . $folder . '/' . $module->$fieldName));
            }

            return $this->uploadImage($request, $fieldName, $folder);
        }

        return $module->$fieldName;
    }
}
