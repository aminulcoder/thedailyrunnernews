<main>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="row">

                    <div class="col-sm-12" style="padding-top: 20px;">
                        <div class="first_lead_news margin-top-15">
                            <a class="news_top_link" href="{{route('singlenews', $lastnews->id)}}"
                                title="{{$lastnews->title}}"></a>
                            <div class="ld_news_image imageresize">
                                <img src="{{ asset('storage/images/' . $lastnews->thumbnail) }}"  class="img-responsive  " alt="{{ $lastnews->thumbnail }}" >
                            </div>
                            <div class="ld_news_content">
                                <h5 class="home_subtitle"></h5>
                                <h1 class="main_lead_title">{{ $lastnews->title }}</h1>

                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-sm-12 col-md-6">
                <div class="row">
                    @foreach ($latestnews as $latest)
                        <div class="col-sm-6" style="padding-top: 20px;" >
                            <div class="first_lead_news margin-top-15">
                                <a class="news_top_link" href="{{route('singlenews', $latest->id)}}"
                                    title="{{ $latest->title }}"></a>
                                <div class="ld_news_image imagesize ">
                                    <img src="{{ asset('storage/images/' . $latest->thumbnail) }}"  class="img-responsive " alt="{{ $latest->thumbnail }}" >
                                </div>
                                <div class="ld_news_content">
                                    <h1>{{ $latest->title }}</h1>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</main>
<style>
    .image-resize{
        height: 300px;
        object-fit: fill;
    }
</style>
