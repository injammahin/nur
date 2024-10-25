@extends('backend.app')

@section('title', 'Create Category')

@section('content')
    <div class="content-wrapper">
        <div class="pt-5 px-5">
            <div class="card">
                <div class="card-header bg-contact text-gray d-flex justify-content-between align-items-center">
                    <h3 class="card-title">Create Category</h3>
                    <!-- Back Button -->
                    <a href="{{ route('backend.categories.index') }}" class="btn btn-secondary ml-auto">
                        <i class="fas fa-arrow-left"></i> Back
                    </a>
                </div>
                <div class="card-body">
                    <form action="{{ route('backend.categories.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Category Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <button type="submit" class="btn btn-primary mt-2">Add Category</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
