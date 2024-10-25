@extends('backend.app')

@section('title', 'Edit Job')

@section('content')
    <div class="sb-nav-fixed job">
        <div id="layoutSidenav">
            <div id="layoutSidenav_content">
                <div>
                    <main>
                        <div id="app" class="content-wrapper">
                            <div class="pt-5 px-5">
                                <div class="card shadow-lg border-0 rounded-lg">
                                    <div
                                        class="card-header bg-white d-flex justify-content-between align-items-center border-bottom">
                                        <h3 class="card-title mb-0 text-gray"><i class="fas fa-briefcase"></i> Edit Job -
                                            {{ $job->title }}</h3>
                                        <a href="{{ route('backend.jobs.index') }}" class="btn btn-success ml-auto "
                                            style= "color: #f8fbff !important;">
                                            <i class="fas
                                            fa-arrow-left"></i>
                                            Back to Jobs
                                        </a>
                                    </div>
                                    <div class="card-body p-5">
                                        <form action="{{ route('backend.jobs.update', $job->id) }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <!-- Job Title -->
                                            <div class="form-group mb-4">
                                                <label for="title" class="font-weight-bold">Job Title</label>
                                                <input type="text" class="form-control form-control-lg rounded-pill"
                                                    id="title" name="title" value="{{ old('title', $job->title) }}"
                                                    placeholder="Enter job title" required>
                                            </div>
                                            <!-- Location -->
                                            <div class="form-group mb-4">
                                                <label for="location" class="font-weight-bold">Location</label>
                                                <input type="text" class="form-control form-control-lg rounded-pill"
                                                    id="location" name="location"
                                                    value="{{ old('location', $job->location) }}"
                                                    placeholder="Enter job location" required>
                                            </div>
                                            <!-- Employment Type -->
                                            <div class="form-group mb-4">
                                                <label for="employment_type" class="font-weight-bold">Employment
                                                    Type</label>
                                                <select class="custom-select form-control-lg rounded-pill"
                                                    id="employment_type" name="employment_type" required>
                                                    <option disabled>Select employment type</option>
                                                    <option value="Full-time"
                                                        {{ old('employment_type', $job->employment_type) == 'Full-time' ? 'selected' : '' }}>
                                                        Full-time</option>
                                                    <option value="Part-time"
                                                        {{ old('employment_type', $job->employment_type) == 'Part-time' ? 'selected' : '' }}>
                                                        Part-time</option>
                                                    <option value="Contract"
                                                        {{ old('employment_type', $job->employment_type) == 'Contract' ? 'selected' : '' }}>
                                                        Contract</option>
                                                    <option value="Internship"
                                                        {{ old('employment_type', $job->employment_type) == 'Internship' ? 'selected' : '' }}>
                                                        Internship</option>
                                                </select>
                                            </div>
                                            <!-- Vacancy -->
                                            <div class="form-group mb-4">
                                                <label for="vacancy" class="font-weight-bold">Vacancy</label>
                                                <input type="number" class="form-control form-control-lg rounded-pill"
                                                    id="vacancy" name="vacancy" min="1"
                                                    value="{{ old('vacancy', $job->vacancy) }}"
                                                    placeholder="Enter number of vacancies" required>
                                            </div>
                                            <!-- Job Description -->
                                            <div class="form-group mb-4">
                                                <label for="job_description" class="font-weight-bold">Job
                                                    Description</label>
                                                <textarea class="form-control summernote rounded" id="job_description" name="job_description" rows="4"
                                                    placeholder="Describe the job responsibilities and tasks" required>{{ old('job_description', $job->job_description) }}</textarea>
                                            </div>
                                            <!-- Responsibilities -->
                                            <div class="form-group mb-4">
                                                <label for="responsibilities"
                                                    class="font-weight-bold">Responsibilities</label>
                                                <textarea class="form-control summernote rounded" id="responsibilities" name="responsibilities" rows="4"
                                                    placeholder="List the key responsibilities" required>{{ old('responsibilities', $job->responsibilities) }}</textarea>
                                            </div>
                                            <!-- Qualifications -->
                                            <div class="form-group mb-4">
                                                <label for="qualifications" class="font-weight-bold">Qualifications</label>
                                                <textarea class="form-control summernote rounded" id="qualifications" name="qualifications" rows="4"
                                                    placeholder="List the required qualifications" required>{{ old('qualifications', $job->qualifications) }}</textarea>
                                            </div>
                                            <!-- Salary -->
                                            <div class="form-group mb-4">
                                                <label for="salary" class="font-weight-bold">Salary</label>
                                                <input type="text" class="form-control form-control-lg rounded-pill"
                                                    id="salary" name="salary" value="{{ old('salary', $job->salary) }}"
                                                    placeholder="Enter salary range or offer" required>
                                            </div>
                                            <!-- Application Deadline -->
                                            <div class="form-group mb-4">
                                                <label for="application_deadline" class="font-weight-bold">Application
                                                    Deadline</label>
                                                <input type="date" class="form-control form-control-lg rounded-pill"
                                                    id="application_deadline" name="application_deadline"
                                                    value="{{ old('application_deadline', $job->application_deadline->format('Y-m-d')) }}"
                                                    required>
                                            </div>
                                            <!-- Submit Button -->
                                            <div class="text-center">
                                                <button type="submit"
                                                    class="btn btn-primary btn-lg rounded-pill px-5 shadow-sm">
                                                    <i class="fas fa-save"></i> Update Job
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
