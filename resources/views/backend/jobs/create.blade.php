@extends('backend.app')

@section('title', 'Create Job')

@section('content')
    <div class="sb-nav-fixed job">
        <div id="layoutSidenav">
            <div id="layoutSidenav_content">
                <div>
                    <main>
                        <div id="app" class="content-wrapper">
                            <div class="pt-5 px-5">
                                <div class="card shadow-sm border-0 rounded-lg">
                                    <div
                                        class="card-header bg-white text-gray-100 d-flex justify-content-between align-items-center">
                                        <h3 class="card-title mb-0"><i class="fas fa-briefcase"></i> Create a New Job</h3>
                                        <a href="{{ route('backend.jobs.index') }}" class="btn btn-success ml-auto "
                                            style= "color: #f8fbff !important;">
                                            <i class="fas
                                            fa-arrow-left"></i>
                                            Back to Jobs
                                        </a>
                                    </div>
                                    <div class="card-body p-4">
                                        <form action="{{ route('backend.jobs.store') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <!-- Job Title -->
                                            <div class="form-group mb-4">
                                                <label for="title" class="font-weight-bold">Job Title</label>
                                                <input type="text" class="form-control form-control-lg rounded-pill"
                                                    id="title" name="title" placeholder="Enter job title" required>
                                            </div>
                                            <!-- Location -->
                                            <div class="form-group mb-4">
                                                <label for="location" class="font-weight-bold">Location</label>
                                                <input type="text" class="form-control form-control-lg rounded-pill"
                                                    id="location" name="location" placeholder="Enter job location"
                                                    required>
                                            </div>
                                            <!-- Employment Type -->
                                            <div class="form-group mb-4">
                                                <label for="employment_type" class="font-weight-bold">Employment
                                                    Type</label>
                                                <select class="custom-select form-control-lg rounded-pill"
                                                    id="employment_type" name="employment_type" required>
                                                    <option selected disabled>Select employment type</option>
                                                    <option value="Full-time">Full-time</option>
                                                    <option value="Part-time">Part-time</option>
                                                    <option value="Contract">Contract</option>
                                                    <option value="Internship">Internship</option>
                                                </select>
                                            </div>
                                            <!-- Vacancy -->
                                            <div class="form-group mb-4">
                                                <label for="vacancy" class="font-weight-bold">Vacancy</label>
                                                <input type="number" class="form-control form-control-lg rounded-pill"
                                                    id="vacancy" name="vacancy" min="1"
                                                    placeholder="Enter number of vacancies" required>
                                            </div>
                                            <!-- Job Description -->
                                            <div class="form-group mb-4">
                                                <label for="job_description" class="font-weight-bold">Job
                                                    Description</label>
                                                <textarea class="form-control summernote rounded" id="job_description" name="job_description" rows="4"
                                                    placeholder="Describe the job responsibilities and tasks" required></textarea>
                                            </div>
                                            <!-- Responsibilities -->
                                            <div class="form-group mb-4">
                                                <label for="responsibilities"
                                                    class="font-weight-bold">Responsibilities</label>
                                                <textarea class="form-control summernote rounded" id="responsibilities" name="responsibilities" rows="4"
                                                    placeholder="List the key responsibilities" required></textarea>
                                            </div>
                                            <!-- Qualifications -->
                                            <div class="form-group mb-4">
                                                <label for="qualifications" class="font-weight-bold">Qualifications</label>
                                                <textarea class="form-control summernote rounded" id="qualifications" name="qualifications" rows="4"
                                                    placeholder="List the required qualifications" required></textarea>
                                            </div>
                                            <!-- Salary -->
                                            <div class="form-group mb-4">
                                                <label for="salary" class="font-weight-bold">Salary</label>
                                                <input type="text" class="form-control form-control-lg rounded-pill"
                                                    id="salary" name="salary" placeholder="Enter salary range or offer"
                                                    required>
                                            </div>
                                            <!-- Application Deadline -->
                                            <div class="form-group mb-4">
                                                <label for="application_deadline" class="font-weight-bold">Application
                                                    Deadline</label>
                                                <input type="date" class="form-control form-control-lg rounded-pill"
                                                    id="application_deadline" name="application_deadline" required>
                                            </div>
                                            <!-- Submit Button -->
                                            <div class="text-center">
                                                <button type="submit"
                                                    class="btn btn-primary btn-lg rounded-pill px-5 shadow-sm">
                                                    <i class="fas fa-save"></i> Create Job
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
        </div>
    </div>
@endsection
