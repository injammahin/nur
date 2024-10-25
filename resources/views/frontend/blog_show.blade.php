@extends('frontend.app')

@section('title', $blog->title)

@section('content')
    <section class="blog-post" style="padding: 72px !important">
        <div class="container pt-5">
            <div class="row">
                <div class="col-lg-8 mb-5">
                    <article>


                        <div class="blog-post-img">
                            <img src="{{ asset('media/blogs/' . $blog->image) }}" alt="{{ $blog->title }}" class="img-fluid">
                        </div>
                        <h3 class="ambala_heading mt-3">{{ $blog->title }}</h3>
                        <div class=" custom_paragraph blog-content ">
                            {!! $blog->content !!}
                        </div>
                    </article>



                    <!-- Recent Posts -->
                    <div class="recent-posts mt-5">
                        <h4>Recent Posts</h4>
                        <ul class="list-group">
                            @foreach ($recentBlogs as $recent)
                                <li class="list-group-item">
                                    <a href="{{ route('frontend.blogs.show', $recent->slug) }}">{{ $recent->title }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <!-- Sidebar -->
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
                                        <h4 class="h6 mb-1"><a
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
            </div>
        </div>
    </section>
@endsection
