@extends('frontend.app')
@section('title', 'Blog')

@section('content')
    <div class="banner-section">
        <div class="banner-wrapper">
            {{-- Show Article Banner from Settings --}}
            <img src="{{ $settings && $settings->article_banner ? asset($settings->article_banner) : asset('/img/placeholder/Placeholder image-banner.webp') }}"
                alt="Article Banner" class="img-fluid">
            <div class="banner-overlay">
                <div class="banner-text">
                    <h1>Welcome to Ambala IT</h1>
                    <p>Innovative Solutions for a Digital World</p>
                </div>
            </div>
        </div>
    </div>


    <div class=" container pt-5 pb-5">

        <div class="row">
            <!-- Blog Left -->
            <div class="col-lg-8 mb-2-9 mb-lg-0">
                <!-- Search Bar -->
                <form method='get' action="{{ route('frontend.blog') }}" class="mb-4">
                    <div class="input-group">
                        <input type="search" name="search" class="form-control" placeholder="Search by title..."
                            value="{{ request('search') }}">
                        <button type="submit" class="btn btn-danger"><i class="fa fa-search"
                                aria-hidden="true"></i></button>
                    </div>
                </form>

                @foreach ($blogs as $blog)
                    <div class="blog-list-simple wow fadeInUp" data-wow-delay=".2s">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="blog-list-simple-img">
                                    <img src="{{ asset('media/blogs/' . $blog->image) }}" alt="img">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="blog-list-simple-text">
                                    <span>{{ $blog->category->name }}</span>
                                    <h3>
                                        <a href="{{ route('frontend.blogs.show', $blog->slug) }}"
                                            class="ambala_heading">{{ $blog->title }}</a>
                                    </h3>
                                    <ul class="meta ps-0">
                                        <li>
                                            <a href="#!">
                                                <i aria-hidden="true" class="fa fa-user"></i> Admin
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!">
                                                <i aria-hidden="true" class="fas fa-calendar-alt"></i>
                                                {{ $blog->created_at->format('d M Y') }}
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('frontend.blog', ['category' => $blog->category->id]) }}">
                                                <i aria-hidden="true" class="fa fa-tags"></i>
                                                {{ $blog->category->name }}
                                            </a>
                                        </li>
                                        {{-- <li>
                                            <a href="#!">
                                                <i aria-hidden="true" class="fa fa-comments"></i>
                                                {{ $blog->comments->count() }} Comments
                                            </a>
                                        </li> --}}
                                    </ul>
                                    <p>{{ Str::limit(strip_tags($blog->content), 150, '...') }}</p>
                                    <div class="text-start mt-3">
                                        <a href="{{ route('frontend.blogs.show', $blog->slug) }}"
                                            class="butn read_more small"><span>Read More</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                <!-- Pagination -->
                <div class="row mt-6 wow fadeInUp" data-wow-delay=".6s">
                    <div class="col-12">
                        <div class="pagination text-small text-uppercase text-extra-dark-gray">
                            {{ $blogs->appends(request()->input())->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Blog Left -->

            <!-- Blog Right -->
            <div class="col-lg-4">
                <div class="side-bar ps-xl-1-9">
                    <!-- Categories Widget -->
                    <div class="widget">
                        <div class="widget-title">
                            <h6>Categories</h6>
                        </div>
                        <ul class="list-style1">
                            @foreach ($categories as $category)
                                <li>
                                    <a href="{{ route('frontend.blog', ['category' => $category->id]) }}">
                                        {{ $category->name }}<span
                                            class="float-end">({{ $category->blogs->count() }})</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <!-- Popular Tags Widget -->
                    <div class="widget">
                        <div class="widget-title">
                            <h6>Popular Tags</h6>
                        </div>
                        <ul class="blog-tags ps-0">
                            @foreach ($tags as $tag)
                                <li><a href="{{ route('frontend.blog', ['tag' => $tag->id]) }}">{{ $tag->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <!-- Recent Posts Widget -->
                    <div class="widget">
                        <div class="widget-title">
                            <h6>Recent Posts</h6>
                        </div>
                        @foreach ($recentBlogs as $recentBlog)
                            <div class="d-flex mb-1-6">
                                <div class="flex-shrink-0 me-3">
                                    <img src="{{ asset('media/blogs/' . $recentBlog->image) }}" alt="..."
                                        class="rounded" style="width: 60px; height: 60px;">
                                </div>
                                <div class="flex-grow-1">
                                    <h4 class="h6 mb-1 "><a style="color:  #51708B !important;"
                                            href="{{ route('frontend.blogs.show', $recentBlog->slug) }}">{{ $recentBlog->title }}</a>
                                    </h4>
                                    <span class="display-30">{{ $recentBlog->created_at->format('M d, Y') }}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Follow Us Widget -->
                    <div class="widget">
                        <div class="widget-title">
                            <h6>Follow Us</h6>
                        </div>
                        <ul class="list-unstyled flex d-flex social-icon01 p-0 m-0">
                            @if (isset($main_settings['facebook_url']))
                                <a href="{{ $main_settings['facebook_url'] }}" class="mx-2" target="_blank">
                                    <img src="{{ asset('img/icon/facebook.svg') }}" alt="Facebook" style="width: 30px;"
                                        class="social-icon">
                                </a>
                            @endif
                            @if (isset($main_settings['youtube_url']))
                                <a href="{{ $main_settings['youtube_url'] }}" class="mx-2" target="_blank">
                                    <img src="{{ asset('img/icon/YouTube_play_button.webp') }}" alt="YouTube"
                                        style="width: 30px;" class="social-icon">
                                </a>
                            @endif
                            @if (isset($main_settings['instagram_url']))
                                <a href="{{ $main_settings['instagram_url'] }}" class="mx-2" target="_blank">
                                    <img src="{{ asset('img/icon/instagram_logo_button.webp') }}" alt="Instagram"
                                        style="width: 30px;" class="social-icon">
                                </a>
                            @endif
                            @if (isset($main_settings['linkedin_url']))
                                <a href="{{ $main_settings['linkedin_url'] }}" class="mx-2" target="_blank">
                                    <img src="{{ asset('img/icon/LinkedIn_icon.svg.png') }}" alt="LinkedIn"
                                        style="width: 30px;" class="social-icon">
                                </a>
                            @endif
                            @if (isset($main_settings['twitter_url']))
                                <a href="{{ $main_settings['twitter_url'] }}" class="mx-2" target="_blank">
                                    <img src="{{ asset('img/icon/twitter.svg') }}" alt="Twitter" style="width: 30px;"
                                        class="social-icon">
                                </a>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Blog Right -->
        </div>

    </div>
@endsection
