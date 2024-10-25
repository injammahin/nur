@extends('backend.app')

@section('content')
    <div id="app" class="content-wrapper p-5">
        <h1 class="my-4">Edit Statistic: {{ $statistic->title }}</h1>

        <div class="card">
            <div class="card-body">
                <!-- Back Button -->
                <a href="{{ route('backend.statistics.index') }}" class="btn btn-success mb-3">Back</a>

                <form action="{{ route('backend.statistics.update', $statistic->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <!-- Title (Read-only) -->
                    <div class="form-group mb-3">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title"
                            value="{{ $statistic->title }}" readonly>
                    </div>

                    <!-- Value Input -->
                    <div class="form-group mb-3">
                        <label for="value">Value</label>
                        <input type="number" class="form-control" id="value" name="value"
                            value="{{ $statistic->value ?? 0 }}" required>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary">Update Statistic</button>
                </form>
            </div>
        </div>
    </div>
@endsection
