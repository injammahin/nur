@extends('backend.app')

@section('title', 'Manage Categories')

@section('content')
    <div class="content-wrapper">
        <div class="pt-5 px-5">
            <div class="card">
                <div class="card-header bg-contact text-gray d-flex justify-content-between align-items-center">
                    <h3 class="card-title">Manage Categories</h3>
                    <a type="button" href="{{ route('backend.categories.create') }}" class="btn btn-success ml-auto">
                        <i class="fas fa-plus"></i> Create Category
                    </a>
                </div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <ul class="list-group">
                        @foreach ($categories as $category)
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                {{ $category->name }}
                                <form action="{{ route('backend.categories.destroy', $category->id) }}" method="POST"
                                    class="d-inline"
                                    onsubmit="return confirm('Are you sure you want to delete this category?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="fas fa-trash-alt"></i> Delete
                                    </button>
                                </form>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
