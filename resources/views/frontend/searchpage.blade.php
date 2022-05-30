@extends('frontend.layout.app')

@section('title', 'Search Page')

@section('content')

    <section>
        <div class="container mt-2 pt-3">
            <form action="" method="get">
                <div class="row">
                    <input type="hidden" name="keyword"
                        value="@if (isset($_GET['keyword'])) {{ trim($_GET['keyword']) }} @endif">
                    <!-- Sidebar Start -->
                    {{-- <div class="col-lg-3 d-none d-lg-block bg-light mt-3">
                        <div class="card mb-4 ">
                            <div class="card-header ">
                                <h6 class="text-uppercase fw-bold text-center mt-2 text-secondary">ফিল্টার : </h6>
                            </div>
                            <div class="list-group mx-0">
                                @foreach ($categories as $category)
                                    <label class="list-group-item d-flex gap-2">
                                        <input name="category[]" value="{{ $category->id }}" onchange="this.form.submit()"
                                            class="form-check-input flex-shrink-0" type="checkbox"
                                            @if (isset($_GET['category']) && in_array($category->id, $_GET['category'])) checked @endif \>
                                        <span>
                                            {{ $category->title }}
                                        </span>
                                    </label>
                                @endforeach
                            </div>
                        </div>
                    </div> --}}
                    <!-- Sidebar End -->
                    <div class="col-lg-9 col-12">
                        <!-- Filter Start -->



                        @if (isset($_GET['keyword']))
                            <div class="bg-body mt-3">
                                <p><strong>Your are Searching: </strong> {{ $_GET['keyword'] }}</p>
                            </div>
                        @endif

                        <!-- Filter End -->


                        <div class="row">
                            @foreach ($posts as $post)
                                <div class="col-sm-12 col-md-8 mt-3">
                                    <div class="card mb-3">
                                        <div class="row">
                                            <div class="col-sm-4">

                                                <img src="{{ asset('storage/images/' . $post->thumbnail) }}"
                                                    class="card-img-top" alt="{{ $post->thumbnail }}">
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="card-body">
                                                    <a href="{{ route('singlenews', $post->id) }}"
                                                        class="card-text text-decoration-none fw-bold text-secondary">
                                                        {{ $post->title }}
                                                    </a>
                                                    <div
                                                        class="post-author d-flex justify-content-between align-items-center">
                                                        <div class="blog-author py-3">
                                                            <span><strong><i class="fa fa-user"></i>
                                                                  </strong></span> <br>
                                                            <span><strong><i class="fa-solid fa-blog"></i>
                                                                    Category</strong></span> <br>
                                                            <span><strong><i class="fa-solid fa-clock"></i> May 7,
                                                                    2022</strong></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                @endforeach
                            </div>

                        {{-- <div class="row my-3">
                            {{ $posts->links() }}
                        </div> --}}
                    </div>
                    {{-- @include('frontend.layout.sidebar') --}}
                </div>
            </form>
    </section>

@endsection
