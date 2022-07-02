@php
use App\Models\Vot\Vot;
$vot = Vot::get()->last();
if ($vot && $vot->total_vot > 0) {
    $yes = sprintf('%.2f', (100 * $vot->yes) / $vot->total_vot);
    $no = sprintf('%.2f', (100 * $vot->no) / $vot->total_vot);
    $no_comment = sprintf('%.2f', (100 * $vot->no_comment) / $vot->total_vot);
}
@endphp
@php
use App\Models\Division;
$divissions = Division::all();
@endphp

<div class="col-sm-12 col-md-4 col-xl-3 col-lg-3">
    <div class="rightSideBar">
        <div class="survey-area my-1">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <span>সরাসরি</span>
                    <span class="text-danger fw-bold">&bull; ভিডিও</span>
                </div>
                {{-- <div class="card-body"> --}}
                <iframe width="100%" height="auto" src="https://www.youtube.com/embed/MSVPhMPtAk4"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>

            </div>
        </div>
        <div class="col-sm-12 main-content custom-block ">
            <!-- Sidebar button area start -->
            <div class="sidebar-button-area">
                <button><i class="fa-solid fa-chart-line"></i> শেয়ার বাজার</button>
                <button><i class="fa-solid fa-mosque"></i> ধর্ম ও জন্ম </button>
                <button><i class="fa-solid fa-book-open"></i> টিউটরিয়াল </button>
                <button><i class="fa-solid fa-images"></i> চিত্র বিচিত্র</button>

            </div>
        </div>
        <div class="col-sm-12 main-content custom-block">
            <div class="news-feed-area mt-4">
                <div class="news-feed-nav">
                    <button id="latest_news_button" class="active">সর্বশেষ</button>
                    <button id="most_read_news_button">সর্বাধিক পঠিত</button>
                </div>
                <div id="latest_news" class="news-feed-latest mt-4">
                    @foreach ($latestnews as $latest)
                        <div class="row">
                            <div class="col-12">
                                <a href="{{ route('singlenews', $latest->id) }}">{{ $latest->title }}</a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div id="most_read_news" style="display: none;" class="news-feed-latest mt-4">
                    @foreach ($latestnews as $latest)
                        <div class="row">
                            <div class="col-12">
                                <a href="">{{ $latest->title }}</a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="news_feed_all_news_button">
                    <button>সব খবর</button>
                </div>
            </div>
        </div>

        <div class="col-sm-12 main-content custom-block">

            <div class="district-news my-3">
                <div class="card">
                    <div class="card-header">
                        <h4>জেলার খবর</h4>
                    </div>
                    <div class="card-body">


                        @include('frontend.layout.svgbangladesh')

                        <form action="{{ route('location.news', $news->upazila_id) }}" method="GET">
                            <div class="row">
                                <div class="col-xl-6 col-12 bottom-space">
                                    <select class="form-select @error('division_id') is-invalid @enderror"
                                        name="division_id">
                                        <option selected value="">বিভাগ
                                        </option>
                                        @foreach ($divissions as $divission)
                                            <option value="{{ $divission->id }}">
                                                {{ $divission->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-xl-6 col-12 bottom-space">
                                    <select class="form-select @error('district_id') is-invalid @enderror"
                                        name="district_id">
                                        <option selected value="">জেলা</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6 col-12">
                                    <select class="form-select @error('upazila_id') is-invalid @enderror"
                                        name="upazila_id">
                                        <option selected value="">উপজেলা</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-xl-12 col-12">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-danger mt-2">অনুসন্ধান করুন</button>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sidebar button area end -->
        <div class="survey-area my-5" id="onlinevot">
        </div>

        <!-- sidebar epaper area start -->
        <div class="e-paper">

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="">ই-পেপার</a>
                        </div>
                        <div class="card-body">
                            <a href="">
                                <div class="col-md-12">
                                    <img src="{{ asset('frontend/asset/img/epaper img 1.png') }}" style="width:100%"
                                        alt="">
                                </div>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- sidebar epaper area end -->
    </div>
</div>
@push('script')
    <script>
        var division = $('select[name="division_id"]');
        var district = $('select[name="district_id"]');
        var upazila = $('select[name="upazila_id"]');

        $(document).on('change', 'select[name="division_id"]', function() {
            let divisionid = $(this).val()
            console.log(divisionid);

            $.ajax({
                url: `/district-side-division/${divisionid}`,
                type: 'GET',
                success: function(data) {
                    district.empty()
                    district.append(data)
                },
            });

        }); // change event end
    </script>
@endpush
@push('script')
    <script>
        var division = $('select[name="division_id"]');
        var district = $('select[name="district_id"]');
        var upazila = $('select[name="upazila_id"]');

        $(document).on('change', 'select[name="district_id"]', function() {
            let districtid = $(this).val()
            console.log(districtid);

            $.ajax({
                url: `/upazila-side-district/${districtid}`,
                type: 'GET',
                success: function(data) {
                    upazila.empty()
                    upazila.append(data)
                },
            });

        }); // change event end
    </script>
@endpush

