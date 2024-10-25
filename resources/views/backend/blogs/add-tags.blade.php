@extends('backend.app')

@section('title', 'Add Tags')

@section('content')
    <div class="content-wrapper">
        <div class="pt-5 px-5">
            <div class="card">
                <div class="card-header bg-contact text-gray d-flex justify-content-between align-items-center">
                    <h3 class="card-title">Add New Tag</h3>
                </div>
                <div class="card-body">
                    <!-- Display any success messages -->
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <!-- Display any errors -->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- Form to Add Tag -->
                    <form action="{{ route('backend.tags.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Tag Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <button type="submit" class="btn btn-primary mt-2">Add Tag</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
