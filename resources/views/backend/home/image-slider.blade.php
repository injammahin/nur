@extends('backend.app')

@section('title', 'Homepage Hero Section Management')

@section('content')
    <div class="content-wrapper">
        <div class="pt-5 px-5">
            <div class="card mt-5">
                <div class="card-header bg-job text-gray d-flex justify-content-between align-items-center">
                    <h3 class="card-title">Video Management</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('backend.sliders.storeVideo') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <!-- Video Thumbnail Input Field -->
                        <div class="mb-3">
                            <label for="video_thumbnail" class="form-label">Video Thumbnail (580 × 435)</label>
                            <input type="file" name="video_thumbnail" class="form-control" accept="image/*">
                            @if ($video && $video->video_thumbnail)
                                <small>Current Thumbnail:
                                    <img src="{{ asset('media/sliders/' . $video->video_thumbnail) }}" width="75"
                                        alt="Video Thumbnail">
                                </small>
                            @endif
                        </div>

                        <div class="mb-3">
                            <label for="video_url" class="form-label">Video URL</label>
                            <input type="text" name="video_url" class="form-control"
                                value="{{ $video->video_url ?? '' }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="video_text" class="form-label">Video Description</label>
                            <textarea name="video_text" class="form-control summernote">{{ $video->video_text ?? '' }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Save Video</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('.summernote').summernote({
                height: 200,
                placeholder: 'Write video description here...',
                toolbar: [
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview']]
                ]
            });

            setTimeout(function() {
                $(".alert-success").fadeOut("slow");
            }, 3000);
        });
    </script>
@endsection
