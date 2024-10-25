@extends('backend.app')

@section('content')
    <div id="app" class="content-wrapper p-5">
        <h1 class="my-4">Add New Statistic</h1>

        <div class="card">
            <div class="card-body">
                <a href="{{ route('backend.statistics.index') }}" class="btn btn-success mb-3">Back</a>
                <form action="{{ route('backend.statistics.store') }}" method="POST">
                    @csrf

                    <!-- Title Input -->
                    <div class="form-group mb-3">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                    </div>

                    <!-- Value Input -->
                    <div class="form-group mb-3">
                        <label for="value">Value</label>
                        <input type="number" class="form-control" id="value" name="value" required>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary">Add Statistic</button>
                </form>
            </div>
        </div>
    </div>
@endsection
