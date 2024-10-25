<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\CareerContent;
use App\Models\Applicant;
use App\Models\Setting;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::all();
        $content = CareerContent::first();
        $settings = Setting::first(); // Retrieve settings to get the career_banner

        return view('frontend.career', compact('jobs', 'content', 'settings'));
    }

    public function index_backend(Request $request)
    {
        $perPage = $request->get('per_page', 10);  // Default is 10
        $search = $request->get('search');

        $jobs = Job::query()
            ->when($search, function ($query) use ($search) {
                return $query->where('title', 'like', "%{$search}%")
                    ->orWhere('location', 'like', "%{$search}%")
                    ->orWhere('employment_type', 'like', "%{$search}%")
                    ->orWhere('job_description', 'like', "%{$search}%");
            })
            ->orderBy('created_at', 'desc')
            ->paginate($perPage);

        return view('backend.job', compact('jobs'));
    }
    public function create()
    {
        return view('backend.jobs.create');  
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'employment_type' => 'required|string|max:50',
            'vacancy' => 'required|integer|min:1',
            'job_description' => 'required|string',
            'responsibilities' => 'required|string',
            'qualifications' => 'required|string',
            'salary' => 'required|string',
            'application_deadline' => 'required|date',
            'image' => 'image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $job = new Job($request->all());

        if ($request->hasFile('image')) {
            $job->image = $this->uploadImage($request->file('image'), 'media/jobs');
        }

        $job->save();
        return redirect()->route('backend.jobs.index')->with('success', 'Job created successfully.');
    }

    public function edit($id)
    {
        $job = Job::findOrFail($id);
        return view('backend.jobs.edit', compact('job'));
    }

    public function update(Request $request, $id)
    {
        $job = Job::findOrFail($id);
        $request->validate([
            'title' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'employment_type' => 'required|string|max:50',
            'vacancy' => 'required|integer|min:1',
            'job_description' => 'required|string',
            'responsibilities' => 'required|string',
            'qualifications' => 'required|string',
            'salary' => 'required|string',
            'application_deadline' => 'required|date',
            'image' => 'image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $job->update($request->all());
        if ($request->hasFile('image')) {
            $job->image = $this->uploadImage($request->file('image'), 'media/jobs');
            $job->save();
        }

        return redirect()->route('backend.jobs.index')->with('success', 'Job updated successfully.');
    }

    public function destroy($id)
    {
        $job = Job::findOrFail($id);
        $job->delete();
        return redirect()->route('backend.jobs.index')->with('success', 'Job deleted successfully.');
    }

    public function show($slug)
    {
        $settings = Setting::first(); 
        $job = Job::where('slug', $slug)->firstOrFail();
        return view('frontend.job', compact('job', 'settings'));
    }
    
    // private function uploadImage($image, $directory)
    // {
    //     $imageName = time() . '.' . $image->extension();
    //     $image->move(public_path($directory), $imageName);
    //     return $directory . '/' . $imageName;
    // }
    public function showApplicants($jobId)
    {
        $job = Job::findOrFail($jobId);
        $applicants = Applicant::where('job_id', $jobId)->get();  // Assuming you have an Applicant model
        return view('backend.applicants.show', compact('job', 'applicants'));
    }
    public function apply(Request $request, $jobId)
    {
        $request->validate([
            'fullName' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'resume' => 'required|file|mimes:pdf,doc,docx|max:2048',
            'coverLetter' => 'required|string',
        ]);

        $applicant = new Applicant();
        $applicant->job_id = $jobId;
        $applicant->full_name = $request->fullName;
        $applicant->email = $request->email;
        $applicant->phone = $request->phone;
        $applicant->cover_letter = $request->coverLetter;

        if ($request->hasFile('resume')) {
            $resumePath = $request->file('resume')->store('resumes', 'public');
            $applicant->resume = $resumePath;
        }

        $applicant->save();
        return redirect()->back()->with('success', 'Application submitted successfully.');
    }

    private function uploadImage($image, $directory)
    {
        $imageName = time() . '.' . $image->extension();
        $image->move(public_path($directory), $imageName);
        return $directory . '/' . $imageName;
    }

}
