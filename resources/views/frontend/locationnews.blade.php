@extends('frontend.layout.app')
@section('content')
    @php
    use App\Models\Division;
    $divissions = Division::all();

    use App\Models\District;
    $divissions = District::all();




    @endphp
    <section class="big_category_header hidden-xs d-flex " style="background-image: url() ">

        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class=" category_cat_head">
                        <h1><a href="{{ route('location.news') }}">সারাদেশ</a> </h1>
                    </div>

                </div>
                @php
                    $divid = null;
                    $divinfo = null;
                   if( isset($_GET['division_id'])){
                        $divid = $_GET['division_id'];
                        $divinfo = Division::firstWhere('id', $divid);
                    }



                    $distid = null;
                    $distinfo = null;
                    if(isset($_GET['district_id'])){
                        $distid = $_GET['district_id'];
                        $distinfo = District::Firstwhere('id',$distid);
                    }




                @endphp
                <div class="col-sm-6">
                    <div class="page-title-right" style="float: right">
                        <ol class="breadcrumb p-4">
                            <li class="breadcrumb-item"> {{ $divinfo->name ?? '' }}</li>
                           @isset($distinfo->name)
                           <li class="breadcrumb-item"> {{ $distinfo->name  ?? ''}}</li>
                           @endisset
                            @isset( $upzilla->name)
                            <li class="breadcrumb-item "> {{ $upzilla->name ?? ''}}</li>
                            @endisset
                        </ol>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <!-- Menu-body section-start -->
    <div class="container">
        <div class="row">
            <div class="col-md-8 main-content" style="hight:90vh">
                {{-- category page start --}}
                <div class="row my-3" id="loadMoreContent">
                    @foreach ($allnews as $news)
                        <div class="col-sm-6 ">
                            <div class="single-block cat-block ">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="img-box single-post">
                                            <a href="{{ route('singlenews', $news->id) }}">
                                                <img src="{{ asset('storage/images/' . $news->thumbnail) }}"
                                                    class="img-fluid" alt="{{ $news->thumbnail }}" style="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-7">
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


                {{-- category page end --}}
                {{-- <div class="text-center paddingBottom20">
                    <ul class="pagination pagination-sm">
                        <li class="active"><span aria-current="page" class="page-numbers current">১</span></li>
                        <li><a class="page-numbers" href="https://dailyrunnernews.com/?cat=17&amp;paged=2">২</a></li>
                        <li><a class="next page-numbers" href="https://dailyrunnernews.com/?cat=17&amp;paged=2">পরবর্তী
                                →</a>
                        </li>
                    </ul>
                </div> --}}

                <div class="d-felx justify-content-center">
                    {{ $allnews->links() }}
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="news-feed-area mt-4">
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
                    {{-- <div id="most_read_news" style="display: none;" class="news-feed-latest mt-4">
                        @foreach ($latestnews as $latest)
                            <div class="row">
                                <div class="col-9">
                                    <a href="">{{ $latest->title }}</a>
                                </div>
                            </div>
                        @endforeach
                    </div> --}}
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
