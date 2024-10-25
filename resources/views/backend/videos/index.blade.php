@extends('backend.app')
@section('title', 'Manage Videos')

@section('content')
    <div class="content-wrapper">
        <div class="pt-5 px-5">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3 class="card-title">Manage Videos</h3>
                    <a href="{{ route('backend.videos.create') }}" class="btn btn-primary">Add Video</a>
                </div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Thumbnail</th>
                                <th>Video URL</th>
                                <th>Description</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($videos as $video)
                                <tr>
                                    <td>{{ $video->title }}</td>
                                    <td>
                                        @if ($video->thumbnail)
                                            <img src="{{ asset('media/thumbnails/' . $video->thumbnail) }}" alt="Thumbnail"
                                                style="width: 100px;">
                                        @endif
                                    </td>
                                    <td>{{ $video->video_url }}</td>
                                    <td>{{ $video->description }}</td>
                                    <td>
                                        <a href="{{ route('backend.videos.edit', $video->id) }}"
                                            class="btn btn-info btn-sm">Edit</a>
                                        <form action="{{ route('backend.videos.destroy', $video->id) }}" method="POST"
                                            class="d-inline-block"
                                            onsubmit="return confirm('Are you sure you want to delete this video?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
