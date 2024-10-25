<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Setting;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        
        $perPage = $request->get('per_page', 10);  // Default is 10
        $search = $request->get('search');

        $contacts = Contact::query()
            ->when($search, function ($query) use ($search) {
                return $query->where('name', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%")
                    ->orWhere('subject', 'like', "%{$search}%")
                    ->orWhere('message', 'like', "%{$search}%");
            })
            ->orderBy('created_at', 'desc')
            ->paginate($perPage);

        return view('backend.contacts', compact('contacts'));
    }
    
    public function create()
    {
        $settings = Setting::first(); 
       
        return view('frontend.contract_us', compact('settings'));  
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'phone' => 'nullable|string|max:20',
            'message' => 'required|string',
        ]);

        Contact::create($request->all());

        return redirect()->route('frontend.contact.create')->with('success', 'Your message has been sent successfully!');
    }

    public function destroy($id)
    {
        Contact::findOrFail($id)->delete();

        return redirect()->route('backend.contacts')->with('success', 'Contact deleted successfully');
    }
}
