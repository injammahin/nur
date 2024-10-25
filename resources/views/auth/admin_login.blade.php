@extends('master') {{-- Extend your main layout file --}}

@section('title', 'Admin Login')

@section('content')
    <div class="container">
        <div class="row justify-content-center align-items-center vh-100">
            <div class="col-md-4">
                <div class="card shadow-lg border-0 rounded-lg">
                    <div class="card-header text-center bg-gradient-primary text-white py-4">
                        <h4 class="mb-0">Admin Login</h4>
                    </div>
                    <div class="card-body p-4">
                        @if (session('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif
                        <form method="POST" action="{{ route('frontend.admin.login') }}">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control shadow-sm" id="email" name="email" required
                                    autofocus>
                            </div>
                            <div class="form-group mb-4">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control shadow-sm" id="password" name="password"
                                    required>
                            </div>
                            <button type="submit" class="btn btn-gradient-primary btn-danger w-100 py-2">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('styles')

@endsection
