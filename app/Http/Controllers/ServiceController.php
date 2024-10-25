<?php


namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Setting;

class ServiceController extends Controller
{
    public function index(Request $request)
    {
        // Get the search query and per-page limit
        $search = $request->input('search');
        $perPage = $request->input('per_page', 10);

        // Fetch services with optional search and pagination
        $services = Service::when($search, function ($query, $search) {
                return $query->where('name', 'like', '%' . $search . '%')
                             ->orWhere('description', 'like', '%' . $search . '%');
            })
            ->paginate($perPage);

        return view('backend.services.index', compact('services'));
    }
    public function index_frontend()
    {
        $services = Service::all();
        $settings = Setting::first(); 
        return view('frontend.services', compact('services', 'settings'));
    }
    public function show($slug)
    {
        $service = Service::where('slug', $slug)->firstOrFail();
        $allServices = Service::all();
        return view('frontend.service_details', compact('service', 'allServices'));
    }


    public function create()
    {
        return view('backend.services.create');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'short_description' => 'required|string',
            'long_description' => 'required|string',
            'service_image' => 'required|image|mimes:jpeg,png,jpg,webp,gif,svg|max:2048',
            'service_banner' => 'nullable|image|mimes:jpeg,png,jpg,webp,gif,svg|max:2048',
        ]);
    
        // Handle service image upload
        $serviceImageName = null;
        if ($request->hasFile('service_image')) {
            $serviceImage = $request->file('service_image');
            $serviceImageName = time() . '_service.' . $serviceImage->getClientOriginalExtension();
            $serviceImage->move(public_path('media/service/service_image'), $serviceImageName);
        }
    
        $serviceBannerName = null;
        if ($request->hasFile('service_banner')) {
            $serviceBanner = $request->file('service_banner');
            $serviceBannerName = time() . '_banner.' . $serviceBanner->getClientOriginalExtension();
            $serviceBanner->move(public_path('media/service/service_banner'), $serviceBannerName);
        }
    
        Service::create([
            'name' => $request->name,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'service_image' => $serviceImageName,
            'service_banner' => $serviceBannerName,
        ]);
    
        return redirect()->route('backend.service')->with('success', 'Service added successfully.');
    }
    
    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('backend.services.edit', compact('service'));
    }
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'short_description' => 'required|string',
            'long_description' => 'required|string',
            'service_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'service_banner' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);
    
        $service = Service::findOrFail($id);
    
        // Handle service image upload
        if ($request->hasFile('service_image')) {
            $serviceImage = $request->file('service_image');
            $serviceImageName = time() . '_service.' . $serviceImage->getClientOriginalExtension();
            $serviceImage->move(public_path('media/service/service_image'), $serviceImageName);
    
            // Delete previous service image
            if ($service->service_image) {
                File::delete(public_path('media/service/service_image/' . $service->service_image));
            }
    
            $service->service_image = $serviceImageName;
        }
    
        if ($request->hasFile('service_banner')) {
            $serviceBanner = $request->file('service_banner');
            $serviceBannerName = time() . '_banner.' . $serviceBanner->getClientOriginalExtension();
            $serviceBanner->move(public_path('media/service/service_banner'), $serviceBannerName);
    
            // Delete previous service banner
            if ($service->service_banner) {
                File::delete(public_path('media/service/service_banner/' . $service->service_banner));
            }
    
            $service->service_banner = $serviceBannerName;
        }
    
        $service->name = $request->name;
        $service->short_description = $request->short_description;
        $service->long_description = $request->long_description;
        $service->save();
    
        return redirect()->route('backend.service')->with('success', 'Service updated successfully.');
    }
    

    public function destroy($id)
    {
        $service = Service::findOrFail($id);

        // Delete service images (excluding the banner)
        if ($service->service_image) {
            File::delete(public_path('media/service/service_image/' . $service->service_image));
        }
        if ($service->service_banner) {
            File::delete(public_path('media/service/service_banner/' . $service->service_banner));
        }

        $service->delete();

        return redirect()->route('backend.service')->with('success', 'Service deleted successfully.');
    }
}
