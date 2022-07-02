
<div class="container">
    <div class="row">
        <div class="col-md-8 col-xl-9 col-lg-9 col-sm-12 col-12 mobile">
            @foreach ($categorynews as $category)
                @if (count($category->news) > 0)
                    <section class="leadBox box-white paddingTop10 my-1">
                        <!-- <div class="container"> -->
                        <div class="col-sm-12 main-content custom-block">
                            <div class="row">
                                <div class="col-sm-12 col-12">
                                    <div class="row">
                                        <div class="col-12">
                                            <h2 class="catTitleBlock catTitleBackground">
                                                <span class="left">
                                                    <span class="catName">
                                                        <a href="{{ route('category.news', $category->id) }}">{{ $category->name }}</a>
                                                    </span>
                                                </span>
                                                <a href="{{ route('category.news', $category->id) }}"
                                                class="right">আরও <i class="fa fa-angle-double-right"
                                                 aria-hidden="true"></i></a>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                @foreach (array_slice(json_decode($category->news), 0, 6) as $news)

                                    <div class="col-lg-4 col-md-6 col-6">
                                        <div class="single-block ">
                                            <div class="img-box">
                                                <a href="{{ route('singlenews', $news->id) }}">
                                                    <img src="{{ asset('storage/images/' . $news->thumbnail) }}"
                                                        class="img-responsive" alt="{{ $news->thumbnail }}">
                                                </a>
                                            </div>
                                            <div class="details">
                                                <h4 class="p-2">
                                                    <a href="{{ route('singlenews', $news->id) }}">{{ $news->title }}</a>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- <div> -->
                    </section>
                @endif
            @endforeach
        </div>
        @include('frontend.layout.sidebar')
    </div>
</div>
