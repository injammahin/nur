@extends('backend.app')

@section('title', 'Job Applicants for ' . $job->title)

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
                                        class="card-header bg-white text-gray-100 d-flex justify-content-between align-items-center">
                                        <h3 class="card-title mb-0"><i class="fas fa-users"></i> Applicants for
                                            {{ $job->title }}</h3>
                                        <a href="{{ route('backend.jobs.index') }}" class="btn btn-success ml-auto "
                                            style= "color: #f8fbff !important;">
                                            <i class="fas
                                        fa-arrow-left"></i>
                                            Back to Jobs
                                        </a>
                                    </div>

                                    <div class="card-body p-4">
                                        <!-- Success and Error Messages -->
                                        @if (session('success'))
                                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                {{ session('success') }}
                                                <button type="button" class="close" data-dismiss="alert"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        @endif

                                        @if (session('error'))
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                {{ session('error') }}
                                                <button type="button" class="close" data-dismiss="alert"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        @endif

                                        <!-- Applicants Table -->
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>Full Name</th>
                                                        <th>Email</th>
                                                        <th>Phone</th>
                                                        <th>Cover Letter</th>
                                                        <th>Resume</th>
                                                        <th>Applied On</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($applicants as $applicant)
                                                        <tr>
                                                            <td>{{ $applicant->name }}</td>
                                                            <td>{{ $applicant->email }}</td>
                                                            <td>{{ $applicant->phone }}</td>
                                                            <td>{{ Str::limit($applicant->cover_letter, 50) }}</td>
                                                            <td>
                                                                <a href="{{ asset('storage/' . $applicant->resume) }}"
                                                                    target="_blank"
                                                                    class="btn btn-outline-info btn-sm rounded-pill">
                                                                    <i class="fas fa-file-pdf"></i> View Resume
                                                                </a>

                                                            </td>
                                                            <td>{{ $applicant->created_at->format('jS F, Y') }}</td>
                                                            <td>
                                                                <!-- Delete Applicant Button -->
                                                                <form
                                                                    action="{{ route('backend.applicants.destroy', $applicant->id) }}"
                                                                    method="POST" class="d-inline-block">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit"
                                                                        class="btn btn-danger btn-sm rounded-pill"
                                                                        onclick="return confirm('Are you sure you want to delete this applicant?')">
                                                                        <i class="fas fa-trash-alt"></i> Delete
                                                                    </button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>

                                        {{-- <!-- Pagination -->
                                        <div class="d-flex justify-content-center mt-4">
                                            {{ $applicants->links() }}
                                        </div> --}}
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
