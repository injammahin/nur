<!-- resources/views/backend/main_settings.blade.php -->
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
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <form action="{{ route('backend.main_settings.update') }}" method="POST">
                        @csrf

                        <!-- Site Information -->
                        <h4>Site Information</h4>
                        <div class="form-group mt-3">
                            <label for="site_name">Site Name</label>
                            <input type="text" class="form-control" name="site_name"
                                value="{{ $settings['site_name'] ?? '' }}">
                        </div>

                        <div class="form-group mt-3">
                            <label for="site_description">Site Description</label>
                            <textarea class="form-control" name="site_description">{{ $settings['site_description'] ?? '' }}</textarea>
                        </div>

                        <!-- Contact Information -->
                        <h4 class="mt-4">Contact Information</h4>
                        <div class="form-group mt-3">
                            <label for="contact_email">Contact Email</label>
                            <input type="email" class="form-control" name="contact_email"
                                value="{{ $settings['contact_email'] ?? '' }}">
                        </div>

                        <div class="form-group mt-3">
                            <label for="contact_phone">Contact Phone</label>
                            <input type="text" class="form-control" name="contact_phone"
                                value="{{ $settings['contact_phone'] ?? '' }}">
                        </div>

                        <!-- SEO Settings -->
                        <h4 class="mt-4">SEO Settings</h4>
                        <div class="form-group mt-3">
                            <label for="meta_keywords">Meta Keywords</label>
                            <textarea class="form-control" name="meta_keywords">{{ $settings['meta_keywords'] ?? '' }}</textarea>
                        </div>

                        <div class="form-group mt-3">
                            <label for="meta_description">Meta Description</label>
                            <textarea class="form-control" name="meta_description">{{ $settings['meta_description'] ?? '' }}</textarea>
                        </div>

                        <!-- Social Media Links -->
                        <h4 class="mt-4">Social Media Links</h4>
                        <div class="form-group mt-3">
                            <label for="facebook_url">Facebook URL</label>
                            <input type="url" class="form-control" name="facebook_url"
                                value="{{ $settings['facebook_url'] ?? '' }}">
                        </div>

                        <div class="form-group mt-3">
                            <label for="twitter_url">Twitter URL</label>
                            <input type="url" class="form-control" name="twitter_url"
                                value="{{ $settings['twitter_url'] ?? '' }}">
                        </div>

                        <div class="form-group mt-3">
                            <label for="instagram_url">Instagram URL</label>
                            <input type="url" class="form-control" name="instagram_url"
                                value="{{ $settings['instagram_url'] ?? '' }}">
                        </div>

                        <button type="submit" class="btn btn-primary mt-4">Update Settings</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
