@extends('backend.app')
@section('title', 'Main Settings')

@section('content')
    <div class="content-wrapper">
        <div class="pt-5 px-5">
            <div class="card">
                <div class="card-header bg-contact text-gray d-flex justify-content-between align-items-center">
                    <h3 class="card-title">Main Settings</h3>
                </div>
                <div class="card-body">
                    <!-- Success Message -->
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <!-- Error Messages -->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- Form to Update Settings -->
                    <form action="{{ route('backend.main_settings.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Site Information -->
                        <h4>Site Information</h4>
                        <div class="form-group mt-3">
                            <label for="site_name">Site Name</label>
                            <input type="text" class="form-control @error('site_name') is-invalid @enderror"
                                name="site_name" value="{{ old('site_name', $main_settings['site_name'] ?? '') }}" required>
                            @error('site_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Site Logo Upload -->
                        <div class="form-group mt-3">
                            <label for="site_logo">Site Logo</label>
                            <input type="file" class="form-control @error('site_logo') is-invalid @enderror"
                                name="site_logo" accept="image/*">
                            @error('site_logo')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror

                            @if (!empty($main_settings['site_logo']))
                                <img src="{{ asset($main_settings['site_logo']) }}" class="img-fluid mt-3"
                                    style="max-width: 200px;">
                            @endif
                        </div>

                        <!-- Social Media Links -->
                        <h4 class="mt-4">Social Media Links</h4>
                        <div class="form-group mt-3">
                            <label for="facebook_url">Facebook URL</label>
                            <input type="url" class="form-control @error('facebook_url') is-invalid @enderror"
                                name="facebook_url" value="{{ old('facebook_url', $main_settings['facebook_url'] ?? '') }}">
                            @error('facebook_url')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mt-3">
                            <label for="twitter_url">Twitter URL</label>
                            <input type="url" class="form-control @error('twitter_url') is-invalid @enderror"
                                name="twitter_url" value="{{ old('twitter_url', $main_settings['twitter_url'] ?? '') }}">
                            @error('twitter_url')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mt-3">
                            <label for="instagram_url">Instagram URL</label>
                            <input type="url" class="form-control @error('instagram_url') is-invalid @enderror"
                                name="instagram_url"
                                value="{{ old('instagram_url', $main_settings['instagram_url'] ?? '') }}">
                            @error('instagram_url')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mt-3">
                            <label for="linkedin_url">LinkedIn URL</label>
                            <input type="url" class="form-control @error('linkedin_url') is-invalid @enderror"
                                name="linkedin_url"
                                value="{{ old('linkedin_url', $main_settings['linkedin_url'] ?? '') }}">
                            @error('linkedin_url')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mt-3">
                            <label for="youtube_url">YouTube URL</label>
                            <input type="url" class="form-control @error('youtube_url') is-invalid @enderror"
                                name="youtube_url" value="{{ old('youtube_url', $main_settings['youtube_url'] ?? '') }}">
                            @error('youtube_url')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary mt-4">Update Settings</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
