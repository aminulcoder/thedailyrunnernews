@php

use EasyBanglaDate\Types\BnDateTime;

$bongabda = new BnDateTime($news->created_at, new DateTimeZone('Asia/Dhaka'));
// $postdate= $bongabda->getDateTime()->format('l jS F Y b h:i:s')
$postdate = $bongabda->getDateTime()->format('l jS F Y');

// echo $news->created_at;

@endphp

@extends('frontend.layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-push-3 col-md-push-0 my-4">
                <div class="box-white marginBottom20 visible-xs hidden-print">
                    <ol class="breadcrumb">
                        <li><a href="{{route('homepage')}}"> <i class="fa fa-home text-danger"></i></a></li>/
                        <li><a href="#"> {{ $news->category->name }} </a></li>
                    </ol>
                </div>
                <article class="box-white">
                    <div class="padding15 box-white">


                        <div class="row">
                            <div class="col-sm-12" style="margin-bottom:15px;color: red;">
                            </div>
                        </div>

                        <h1 class="no-margin" style="margin-bottom:15px !important">{{ $news->title }}</h1>
                        <!-- start -->
                        <div class="row mb-2">
                            <div class="col-sm-8">
                                <span class="small text-muted time-with-author">
                                    <i class="fa fa fa-clock-o text-danger"></i> {{ $postdate }} <br>



                                </span>
                            </div>
                        </div>

                        <!-- end -->
                    </div>

                    <div class="paddingTop10">
                        <div class="featured-image">
                            <img src="{{ asset('storage/images/' . $news->thumbnail) }}" class="img-fluid"
                                alt="{{ $news->thumbnail }}">
                        </div>
                        <div class="caption"> </div>

                    </div>
                    <div class="content-details">
                        {!! $news->content !!}
                    </div>

                    <!-- Advertisement B -->
                    <div class="row text-center marginTopBottom20 advertisement hidden-print">
                    </div>
                    <!-- End Advertisement -->


                    <hr>
                    <a href="#"><i class="fa-solid fa-eye"></i>views</a>
                    <div class="share-button">
                        <samp style="font-size: 25px"><i class="fa-solid fa-share-nodes"></i> Share!</samp>
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ route('singlenews', $news->slug) }}"
                            target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/intent/tweet?url={{ route('singlenews', $news->slug) }}"
                            target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ route('singlenews', $news->slug) }}"
                            target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        <a href="whatsapp://send?text={{ route('singlenews', $news->slug) }}" target="_blank"><i
                                class="fa-brands fa-whatsapp"></i></a>
                        <a href="//pinterest.com/pin/create/link/?url={{ route('singlenews', $news->slug) }}"
                            target="_blank"><i class="fa-brands fa-pinterest"></i></a>
                    </div>
                </article>
                <div id="disqus_thread"></div>


            </div>

            {{-- sidebar --}}
            <div class="col-md-4 main-content custom-block">
                <div class="news-feed-area mt-4">
                    <div class="news-feed-nav">
                        <button id="latest_news_button" class="active">সর্বশেষ</button>
                        <button id="most_read_news_button">সর্বাধিক পঠিত</button>
                    </div>
                    @foreach ($latestnews as $latest)
                        <div class="row">
                            <div class="col-9">
                                <a href="{{ route('singlenews', $latest->id) }}">{{ $latest->title }}</a>
                            </div>
                        </div>
                    @endforeach
                    <div id="most_read_news" style="display: none;" class="news-feed-latest mt-4">
                        <div class="row">

                            <div class="col-9">
                                <a href="">সেনাঘাঁটিতে হামলায় ১৮০ বিদেশি ভাড়াটে যোদ্ধা নিহত: রাশিয়া</a>

                            </div>
                        </div>
                        <div class="row">

                            <div class="col-9">
                                <a href="">সেনাঘাঁটিতে হামলায় ১৮০ বিদেশি ভাড়াটে যোদ্ধা নিহত: রাশিয়া</a>

                            </div>
                        </div>
                        <div class="row">

                            <div class="col-9">
                                <a href="">সেনাঘাঁটিতে হামলায় ১৮০ বিদেশি ভাড়াটে যোদ্ধা নিহত: রাশিয়া</a>

                            </div>
                        </div>
                        <div class="row">

                            <div class="col-9">
                                <a href="">সেনাঘাঁটিতে হামলায় ১৮০ বিদেশি ভাড়াটে যোদ্ধা নিহত: রাশিয়া</a>

                            </div>
                        </div>
                        <div class="row">

                            <div class="col-9">
                                <a href="">সেনাঘাঁটিতে হামলায় ১৮০ বিদেশি ভাড়াটে যোদ্ধা নিহত: রাশিয়া</a>

                            </div>
                        </div>
                        <div class="row">

                            <div class="col-9">
                                <a href="">সেনাঘাঁটিতে হামলায় ১৮০ বিদেশি ভাড়াটে যোদ্ধা নিহত: রাশিয়া</a>

                            </div>
                        </div>
                        <div class="row">

                            <div class="col-9">
                                <a href="">সেনাঘাঁটিতে হামলায় ১৮০ বিদেশি ভাড়াটে যোদ্ধা নিহত: রাশিয়া</a>

                            </div>
                        </div>
                        <div class="row">

                            <div class="col-9">
                                <a href="">সেনাঘাঁটিতে হামলায় ১৮০ বিদেশি ভাড়াটে যোদ্ধা নিহত: রাশিয়া</a>

                            </div>
                        </div>
                        <div class="row">

                            <div class="col-9">
                                <a href="">সেনাঘাঁটিতে হামলায় ১৮০ বিদেশি ভাড়াটে যোদ্ধা নিহত: রাশিয়া</a>

                            </div>
                        </div>
                        <div class="row">

                            <div class="col-9">
                                <a href="">সেনাঘাঁটিতে হামলায় ১৮০ বিদেশি ভাড়াটে যোদ্ধা নিহত: রাশিয়া</a>

                            </div>
                        </div>
                        <div class="row">

                            <div class="col-9">
                                <a href="">সেনাঘাঁটিতে হামলায় ১৮০ বিদেশি ভাড়াটে যোদ্ধা নিহত: রাশিয়া</a>

                            </div>
                        </div>
                        <div class="row">

                            <div class="col-9">
                                <a href="">সেনাঘাঁটিতে হামলায় ১৮০ বিদেশি ভাড়াটে যোদ্ধা নিহত: রাশিয়া</a>

                            </div>
                        </div>
                    </div>
                    <div class="news_feed_all_news_button">
                        <button>সব খবর</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



@push('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"></script>

    <script>
        (function() { // DON'T EDIT BELOW THIS LINE
            var d = document,
                s = d.createElement('script');
            s.src = 'https://laravel-blog-tutorial-series.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
        })();
    </script>
    <script id="dsq-count-scr" src="//laravel-blog-tutorial-series.disqus.com/count.js" async></script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by
            Disqus.</a></noscript>
    <script id="dsq-count-scr" src="//newspaper-9.disqus.com/count.js" async></script>
@endpush


@push('style')
    <style>
        .share-button a i {
            font-size: 20px;
            border: 1px solid;
            border-radius: 50%;
            padding: 10px;
            color: #2E6444;
            transition: 0.5s;
            width: 40px;
            height: 40px;
            text-align: center;
        }

        .share-button a i:hover {
            background-color: rgb(95, 95, 185);
            color: #fff;
        }

    </style>


<style>

</style>
@endpush
