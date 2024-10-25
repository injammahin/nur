@extends('backend.app')

@section('title', 'Edit Module')

@section('content')
    <div class="content-wrapper">
        <div class="pt-5 px-5">
            <div class="card">
                <div class="card-header bg-job text-gray d-flex justify-content-between align-items-center">
                    <h3 class="card-title">Edit Module</h3>
                    <a href="{{ route('backend.modules.index') }}" class="btn btn-success ml-auto">
                        <i class="fas fa-arrow-left"></i> Back to Modules
                    </a>
                </div>
                <div class="card-body">
                    <form action="{{ route('backend.modules.update', $module->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!-- Module Name -->
                        <div class="mb-3">
                            <label for="name" class="form-label">Module Name</label>
                            <input type="text" name="name" id="name" class="form-control"
                                value="{{ $module->name }}" required>
                        </div>

                        <!-- Module Logo -->
                        <div class="mb-3">
                            <label for="logo" class="form-label">Module Logo (50 × 50)</label>
                            <input type="file" name="logo" id="logo" class="form-control">
                            @if ($module->logo)
                                <img src="{{ asset('media/modules/logos/' . $module->logo) }}" width="100"
                                    class="mt-2 img-thumbnail">
                            @endif
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-success">Update Module</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
