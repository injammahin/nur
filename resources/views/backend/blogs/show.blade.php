@extends('backend.app')

@section('title', 'View Blog')

@section('content')
    <div class="content-wrapper">
        <div class="pt-5 px-5">
            <div class="card">
                <div class="card-header bg-contact text-gray">
                    <h3 class="card-title">{{ $blog->title }}</h3>
                    <a href="{{ route('backend.blogs.index') }}" class="btn btn-success ml-auto "
                        style= "color: #f8fbff !important;">
                        <i class="fas
                                            fa-arrow-left"></i>
                        Back to blogs
                    </a>
                </div>
                <div class="card-body">
                    <p><strong>Category:</strong> {{ $blog->category->name }}</p>
                    <p><strong>Content:</strong></p>
                    <div>{!! $blog->content !!}</div>
                    @if ($blog->image)
                        <img src="{{ asset('media/blogs/' . $blog->image) }}" alt="{{ $blog->title }}"
                            class="img-fluid mt-2">
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
