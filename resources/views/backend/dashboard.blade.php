@extends('backend.app')

@section('title', 'Dashboard')

@section('content')
    <div class="content-wrapper">
        <div class="container-fluid pt-5 px-5">
            <!-- Top Widgets -->
            <div class="row mb-4">

                <!-- Total Products -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Products
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalProducts }}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-box fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Total Contacts -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total Contact Us
                                        Submissions</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalContacts }}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-envelope fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Total Blogs -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Blogs</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalBlogs }}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-blog fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Total Reviews -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Total Reviews
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalReviews }}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-star fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Total Images -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Images
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalImages }}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-image fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Total Videos -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total Videos
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalVideos }}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-video fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Total Languages -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Languages
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalLanguages }}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-language fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Total Job Posts -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Job Posts
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalJobPosts }}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-briefcase fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Total Visitors Today -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Visitors
                                        Today:
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalVisitorsToday }}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-users fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Top 10 Most Visited Frontend URLs -->

            {{-- <div class="row mb-4">
                <div class="col-md-12">
                    <h4>Top 10 Most Viewed Blogs</h4>
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Blog Title</th>
                                        <th>Views</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($topBlogs as $index => $blog)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>
                                                <a
                                                    href="{{ route('frontend.blog.show', $blog->slug) }}">{{ $blog->title }}</a>
                                            </td>
                                            <td>{{ $blog->page_views_count }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> --}}

            <!-- Display Three Graphs in One Row -->
            <div class="row">
                <!-- Weekly Visitors Chart -->
                <div class="col-xl-4 col-lg-4 mb-4">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Weekly Visitors Overview</h6>
                        </div>
                        <div class="card-body">
                            {!! $weeklyChart->container() !!}
                        </div>
                    </div>
                </div>

                <!-- Monthly Visitors Chart -->
                <div class="col-xl-4 col-lg-4 mb-4">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Monthly Visitors Overview</h6>
                        </div>
                        <div class="card-body">
                            {!! $monthlyChart->container() !!}
                        </div>
                    </div>
                </div>

                <!-- Yearly Visitors Chart -->
                <div class="col-xl-4 col-lg-4 mb-4">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Yearly Visitors Overview</h6>
                        </div>
                        <div class="card-body">
                            {!! $yearlyChart->container() !!}
                        </div>
                    </div>
                </div>
            </div>

            <!-- Scripts for Charts -->
            <script src="{{ $weeklyChart->cdn() }}"></script>
            {{ $weeklyChart->script() }}
            {{ $monthlyChart->script() }}
            {{ $yearlyChart->script() }}
            <div class="row mb-4">
                <div class="col-xl-8 col-lg-7">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Top 10 Most Visited Frontend URLs</h6>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>URL</th>
                                        <th>Views</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($topUrls as $index => $url)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $url->url }}</td>
                                            <td>{{ $url->views }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Top Countries Section -->
            {{-- <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Top 10 Countries by Visitors</h6>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Country</th>
                                        <th>Total Visits</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($countryData as $data)
                                        <tr>
                                            <td>{{ $data->country }}</td>
                                            <td>{{ $data->total }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> --}}


        </div>
    @endsection

    @section('scripts')

    @endsection
