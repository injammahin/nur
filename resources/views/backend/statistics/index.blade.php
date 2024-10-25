@extends('backend.app')

@section('content')
    <div id="app" class="content-wrapper p-5">
        <h1 class="my-4">Manage Statistics</h1>

        <!-- Success Message -->
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <!-- Add New Statistic Button -->
        <a href="{{ route('backend.statistics.create') }}" class="btn btn-primary mb-3">Add New Statistic</a>

        <!-- Statistics Table -->
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Value</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($statistics as $statistic)
                            <tr>
                                <td>{{ $statistic->title }}</td>
                                <td>{{ $statistic->value }}</td>
                                <td>
                                    <!-- Edit Button -->
                                    <a href="{{ route('backend.statistics.edit', $statistic->id) }}"
                                        class="btn btn-info btn-sm">Edit</a>

                                    <!-- Delete Form -->
                                    <form action="{{ route('backend.statistics.destroy', $statistic->id) }}" method="POST"
                                        style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Are you sure you want to delete this statistic?');">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
