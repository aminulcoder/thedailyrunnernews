@extends('frontend.layout.app')
@section('content')
    <section class="big_category_header hidden-xs" style="background-image: url()">
        <div class="container category_cat_head">
            <h1><a href="{{ route('category.news', $category->id) }}">{{ $category->name }}</a></h1>

        </div>
    </section>

    <!-- Menu-body section-start -->
    <div class="container">
        <div class="row">
            <div class="col-md-8 main-content">

                {{-- single page start --}}

         @if ($latestpost)

         <div class="row">
            <div class="col-sm-12">
                <div class="single-block single-block-thumbnail">
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="img-box post-thumbnail">
                                <a href="{{ route('singlenews', $latestpost->id) }}">
                                    <img src="{{ asset('storage/images/' . $latestpost->thumbnail) }}"
                                        class="img-responsive" alt="{{ $latestpost->thumbnail }}">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="paddingRight10 paddingTop20">
                                <a style="font-size: 1.4rem;line-height:1" href="{{ route('singlenews', $latestpost->id) }}">{{ $latestpost->title }}</a>
                                <p style="margin-top: 10px">{{ $latestpost->meta_title }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- single page ennd --}}

        {{-- category page start --}}


        <div class="row my-3" id="loadMoreContent">
            @foreach ($allnews as $news)
                <div class="col-sm-6 ">
                    <div class="single-block cat-block ">
                        <div class="row">
                            <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-6">
                                <div class="img-box single-post">
                                    <a href="{{ route('singlenews', $news->id) }}">
                                        <img src="{{ asset('storage/images/' . $news->thumbnail) }}"
                                            class="img-fluid" alt="{{ $news->thumbnail }}" style="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-6">
                                <div class="paddingTop10 paddingRight10">
                                    <h3 style="font-size:1.1em; margin-top:18px">
                                        <a href="{{ route('singlenews', $news->id) }}"
                                            title="{{ $news->title }}">{{ $news->title }}</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
         @endif
                <div class="d-felx justify-content-center">
                    {{ $allnews->links() }}
                </div>
            </div>

            <div class="col-md-4 ">
                <div class="news-feed-area my-4">

                    <div class="news-feed-nav">
                        <button id="latest_news_button" class="active">সর্বশেষ</button>
                        <button id="most_read_news_button">সর্বাধিক পঠিত</button>
                    </div>
                    <div id="latest_news" class="news-feed-latest mt-4">
                        @foreach ($latestnews as $latest)
                            <div class="row">
                                <div class="col-9">
                                    <a href="{{ route('singlenews', $latest->id) }}">{{ $latest->title }}</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="news_feed_all_news_button">
                        <button>সব খবর</button>
                    </div>
                </div>
            </div>

        </div>
    </div>

    </div>
    </div>
@endsection
