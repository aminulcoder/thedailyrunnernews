<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!------font-awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- silk slider cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
        integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('frontend/asset/css/style.css') }}">
    <title>Thedailyrunnernews</title>
</head>

<body>
    <!-- top bar section start -->
    @include('frontend.topbar.topbar')
    <!-- top bar section end -->


    <!-- Menu-body section-start -->
   @include('frontend.menu.menu')
    <!-- Menu-body section-end -->

    <!-- maeque section start -->
    @include('frontend.maeque.maeque')
    <!-- maeque section end -->

    <!-- Menu-body section-start -->

    <main>
        <div class="container">

            <div class="row">

                <div class="col-sm-6">
                    <div class="row">

                        <div class="col-sm-12" style="padding-top: 20px;">
                            <div class="first_lead_news margin-top-15">
                                <a class="news_top_link" href="https://dailyrunnernews.com/?p=196"
                                    title="দুর্নীতিবিরোধী বার্তা দেবেন প্রধানমন্ত্রী"></a>
                                <div class="ld_news_image">
                                    <img src="https://dailyrunnernews.com/wp-content/uploads/2019/01/74abed92c7e7a96bde2aa9db7628f2e2-5c0a33801fcbf.jpg"
                                        alt="দুর্নীতিবিরোধী বার্তা দেবেন প্রধানমন্ত্রী" class="img-responsive">
                                </div>
                                <div class="ld_news_content">
                                    <h5 class="home_subtitle"></h5>
                                    <h1 class="main_lead_title">দুর্নীতিবিরোধী বার্তা দেবেন প্রধানমন্ত্রী</h1>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="row">

                        <div class="col-sm-6" style="padding-top: 20px;">
                            <div class="first_lead_news margin-top-15">
                                <a class="news_top_link" href="https://dailyrunnernews.com/?p=199"
                                    title="উৎসবস্থল ‘জয় বাংলা’ স্লোগানে মুখর"></a>
                                <div class="ld_news_image">
                                    <img src="https://dailyrunnernews.com/wp-content/uploads/2019/01/c534cce9ada47b3b86830f309bee43a1-5c42cc112b819.jpg"
                                        alt="উৎসবস্থল ‘জয় বাংলা’ স্লোগানে মুখর" class="img-responsive">
                                </div>
                                <div class="ld_news_content">
                                    <h1>উৎসবস্থল ‘জয় বাংলা’ স্লোগানে মুখর</h1>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6" style="padding-top: 20px;">
                            <div class="first_lead_news margin-top-15">
                                <a class="news_top_link" href="https://dailyrunnernews.com/?p=196"
                                    title="দুর্নীতিবিরোধী বার্তা দেবেন প্রধানমন্ত্রী"></a>
                                <div class="ld_news_image">
                                    <img src="https://dailyrunnernews.com/wp-content/uploads/2019/01/74abed92c7e7a96bde2aa9db7628f2e2-5c0a33801fcbf.jpg"
                                        alt="দুর্নীতিবিরোধী বার্তা দেবেন প্রধানমন্ত্রী" class="img-responsive">
                                </div>
                                <div class="ld_news_content">
                                    <h1>দুর্নীতিবিরোধী বার্তা দেবেন প্রধানমন্ত্রী</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-sm-6" style="padding-top: 20px;">
                            <div class="first_lead_news margin-top-15">
                                <a class="news_top_link" href="https://dailyrunnernews.com/?p=202"
                                    title="ভোটাধিকার ‘হাইজ্যাককারীদের’ ওয়ার্নিং দিলেন ড. কামাল হোসেন"></a>
                                <div class="ld_news_image">
                                    <img src="https://dailyrunnernews.com/wp-content/uploads/2019/01/cf217b85934d8425fd595374942dba21-5c41e7014db80.jpg"
                                        alt="ভোটাধিকার ‘হাইজ্যাককারীদের’ ওয়ার্নিং দিলেন ড. কামাল হোসেন"
                                        class="img-responsive">
                                </div>
                                <div class="ld_news_content">
                                    <h1>ভোটাধিকার ‘হাইজ্যাককারীদের’ ওয়ার্নিং দিলেন ড. কামাল হোসেন</h1>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6" style="padding-top: 20px;">
                            <div class="first_lead_news margin-top-15">
                                <a class="news_top_link" href="https://dailyrunnernews.com/?p=205"
                                    title="স্মার্টফোনের বাজার কোন পথে?"></a>
                                <div class="ld_news_image">
                                    <img src="https://dailyrunnernews.com/wp-content/uploads/2019/01/83e36271a463f6284ee8bda5b9c56a10-5c42a94ab5a63.jpg"
                                        alt="স্মার্টফোনের বাজার কোন পথে?" class="img-responsive">
                                </div>
                                <div class="ld_news_content">
                                    <h1>স্মার্টফোনের বাজার কোন পথে?</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <section class="leadBox box-white paddingTop10 my-1">
                    <!-- <div class="container"> -->
                    <div class="col-sm-12 main-content custom-block">
                        <div class="row">
                            <div class="col-sm-12">
                                <h2 class="catTitleBlock catTitleBackground">
                                    <span class="left">
                                        <span class="catName">
                                            <a href="https://dailyrunnernews.com/?cat=3">জাতীয়</a>
                                        </span>
                                    </span>
                                    <a href="https://dailyrunnernews.com/?cat=3" class="right">আরও <i
                                            class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                </h2>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="single-block">
                                    <div class="img-box">
                                        <a href="https://dailyrunnernews.com/?p=365">
                                            <img src="https://dailyrunnernews.com/wp-content/uploads/2019/09/CollageMaker_20190903_161654970-480x250.jpg"
                                                alt="" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="details">
                                        <h4><a href="https://dailyrunnernews.com/?p=365">বৈধ ড্রাইভিং লাইসেন্স ছাড়া
                                                কোনো
                                                ব্যক্তির কাছে মোটর সাইকেল বিক্রয় না করার বিষয়ে নির্দেশনা।</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="single-block">
                                    <div class="img-box">
                                        <a href="https://dailyrunnernews.com/?p=295">
                                            <img src="https://dailyrunnernews.com/wp-content/uploads/2019/08/68570682_718713595258003_7821980738529525760_n-480x250.jpg"
                                                alt="" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="details">
                                        <h4><a href="https://dailyrunnernews.com/?p=295">আগামী মাস থেকেই চাকরিতে
                                                আবেদনের
                                                বয়সসীমা ৩৫বছর করা হবে বললেন,ওবায়দুল কাদের।</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="single-block">
                                    <div class="img-box">
                                        <a href="https://dailyrunnernews.com/?p=295">
                                            <img src="https://dailyrunnernews.com/wp-content/uploads/2019/08/68570682_718713595258003_7821980738529525760_n-480x250.jpg"
                                                alt="" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="details">
                                        <h4><a href="https://dailyrunnernews.com/?p=295">আগামী মাস থেকেই চাকরিতে
                                                আবেদনের
                                                বয়সসীমা ৩৫বছর করা হবে বললেন,ওবায়দুল কাদের।</a></h4>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-sm-4" style="margin-top:0px">
                                <div class="single-block">
                                    <div class="img-box">
                                        <a href="https://dailyrunnernews.com/?p=202"><img
                                                src="https://dailyrunnernews.com/wp-content/uploads/2019/01/cf217b85934d8425fd595374942dba21-5c41e7014db80-480x250.jpg"
                                                alt="ভোটাধিকার ‘হাইজ্যাককারীদের’ ওয়ার্নিং দিলেন ড. কামাল হোসেন"
                                                class="img-responsive"></a>
                                    </div>
                                    <div class="details">
                                        <h4><a href="https://dailyrunnernews.com/?p=202">ভোটাধিকার ‘হাইজ্যাককারীদের’
                                                ওয়ার্নিং দিলেন ড. কামাল হোসেন</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4" style="margin-top:0px">
                                <div class="single-block">
                                    <div class="img-box">
                                        <a href="https://dailyrunnernews.com/?p=199"><img
                                                src="https://dailyrunnernews.com/wp-content/uploads/2019/01/c534cce9ada47b3b86830f309bee43a1-5c42cc112b819-480x250.jpg"
                                                alt="উৎসবস্থল ‘জয় বাংলা’ স্লোগানে মুখর" class="img-responsive"></a>
                                    </div>
                                    <div class="details">
                                        <h4><a href="https://dailyrunnernews.com/?p=199">উৎসবস্থল ‘জয় বাংলা’
                                                স্লোগানে
                                                মুখর</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4" style="margin-top:0px">
                                <div class="single-block">
                                    <div class="img-box">
                                        <a href="https://dailyrunnernews.com/?p=196"><img
                                                src="https://dailyrunnernews.com/wp-content/uploads/2019/01/74abed92c7e7a96bde2aa9db7628f2e2-5c0a33801fcbf-480x250.jpg"
                                                alt="দুর্নীতিবিরোধী বার্তা দেবেন প্রধানমন্ত্রী"
                                                class="img-responsive"></a>
                                    </div>
                                    <div class="details">
                                        <h4><a href="https://dailyrunnernews.com/?p=196">দুর্নীতিবিরোধী বার্তা দেবেন
                                                প্রধানমন্ত্রী</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- <div> -->

                </section>

                <section class="leadBox box-white paddingTop10 my-1">
                    <!-- <div class="container"> -->
                    <div class="col-sm-12 main-content custom-block">
                        <div class="row">
                            <div class="col-sm-12">
                                <h2 class="catTitleBlock catTitleBackground">
                                    <span class="left">
                                        <span class="catName">
                                            <a href="https://dailyrunnernews.com/?cat=3">জাতীয়</a>
                                        </span>
                                    </span>
                                    <a href="https://dailyrunnernews.com/?cat=3" class="right">আরও <i
                                            class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                </h2>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="single-block">
                                    <div class="img-box">
                                        <a href="https://dailyrunnernews.com/?p=365">
                                            <img src="https://dailyrunnernews.com/wp-content/uploads/2019/09/CollageMaker_20190903_161654970-480x250.jpg"
                                                alt="" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="details">
                                        <h4><a href="https://dailyrunnernews.com/?p=365">বৈধ ড্রাইভিং লাইসেন্স ছাড়া
                                                কোনো
                                                ব্যক্তির কাছে মোটর সাইকেল বিক্রয় না করার বিষয়ে নির্দেশনা।</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="single-block">
                                    <div class="img-box">
                                        <a href="https://dailyrunnernews.com/?p=295">
                                            <img src="https://dailyrunnernews.com/wp-content/uploads/2019/08/68570682_718713595258003_7821980738529525760_n-480x250.jpg"
                                                alt="" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="details">
                                        <h4><a href="https://dailyrunnernews.com/?p=295">আগামী মাস থেকেই চাকরিতে আবেদনের
                                                বয়সসীমা ৩৫বছর করা হবে বললেন,ওবায়দুল কাদের।</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="single-block">
                                    <div class="img-box">
                                        <a href="https://dailyrunnernews.com/?p=295">
                                            <img src="https://dailyrunnernews.com/wp-content/uploads/2019/08/68570682_718713595258003_7821980738529525760_n-480x250.jpg"
                                                alt="" class="img-responsive"></a>
                                    </div>
                                    <div class="details">
                                        <h4><a href="https://dailyrunnernews.com/?p=295">আগামী মাস থেকেই চাকরিতে আবেদনের
                                                বয়সসীমা ৩৫বছর করা হবে বললেন,ওবায়দুল কাদের।</a></h4>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-sm-4" style="margin-top:0px">
                                <div class="single-block">
                                    <div class="img-box">
                                        <a href="https://dailyrunnernews.com/?p=202"><img
                                                src="https://dailyrunnernews.com/wp-content/uploads/2019/01/cf217b85934d8425fd595374942dba21-5c41e7014db80-480x250.jpg"
                                                alt="ভোটাধিকার ‘হাইজ্যাককারীদের’ ওয়ার্নিং দিলেন ড. কামাল হোসেন"
                                                class="img-responsive"></a>
                                    </div>
                                    <div class="details">
                                        <h4><a href="https://dailyrunnernews.com/?p=202">ভোটাধিকার ‘হাইজ্যাককারীদের’
                                                ওয়ার্নিং দিলেন ড. কামাল হোসেন</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4" style="margin-top:0px">
                                <div class="single-block">
                                    <div class="img-box">
                                        <a href="https://dailyrunnernews.com/?p=199"><img
                                                src="https://dailyrunnernews.com/wp-content/uploads/2019/01/c534cce9ada47b3b86830f309bee43a1-5c42cc112b819-480x250.jpg"
                                                alt="উৎসবস্থল ‘জয় বাংলা’ স্লোগানে মুখর" class="img-responsive"></a>
                                    </div>
                                    <div class="details">
                                        <h4><a href="https://dailyrunnernews.com/?p=199">উৎসবস্থল ‘জয় বাংলা’
                                                স্লোগানে
                                                মুখর</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4" style="margin-top:0px">
                                <div class="single-block">
                                    <div class="img-box">
                                        <a href="https://dailyrunnernews.com/?p=196"><img
                                                src="https://dailyrunnernews.com/wp-content/uploads/2019/01/74abed92c7e7a96bde2aa9db7628f2e2-5c0a33801fcbf-480x250.jpg"
                                                alt="দুর্নীতিবিরোধী বার্তা দেবেন প্রধানমন্ত্রী"
                                                class="img-responsive"></a>
                                    </div>
                                    <div class="details">
                                        <h4><a href="https://dailyrunnernews.com/?p=196">দুর্নীতিবিরোধী বার্তা দেবেন
                                                প্রধানমন্ত্রী</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- <div> -->

                </section>

                <section class="leadBox box-white paddingTop10 my-1">
                    <!-- <div class="container"> -->
                    <div class="col-sm-12 main-content custom-block">
                        <div class="row">
                            <div class="col-sm-12">
                                <h2 class="catTitleBlock catTitleBackground">
                                    <span class="left">
                                        <span class="catName">
                                            <a href="https://dailyrunnernews.com/?cat=3">জাতীয়</a>
                                        </span>
                                    </span>
                                    <a href="https://dailyrunnernews.com/?cat=3" class="right">আরও <i
                                            class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                </h2>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="single-block">
                                    <div class="img-box">
                                        <a href="https://dailyrunnernews.com/?p=365">
                                            <img src="https://dailyrunnernews.com/wp-content/uploads/2019/09/CollageMaker_20190903_161654970-480x250.jpg"
                                                alt="" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="details">
                                        <h4><a href="https://dailyrunnernews.com/?p=365">বৈধ ড্রাইভিং লাইসেন্স ছাড়া
                                                কোনো
                                                ব্যক্তির কাছে মোটর সাইকেল বিক্রয় না করার বিষয়ে নির্দেশনা।</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="single-block">
                                    <div class="img-box">
                                        <a href="https://dailyrunnernews.com/?p=295">
                                            <img src="https://dailyrunnernews.com/wp-content/uploads/2019/08/68570682_718713595258003_7821980738529525760_n-480x250.jpg"
                                                alt="" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="details">
                                        <h4><a href="https://dailyrunnernews.com/?p=295">আগামী মাস থেকেই চাকরিতে
                                                আবেদনের
                                                বয়সসীমা ৩৫বছর করা হবে বললেন,ওবায়দুল কাদের।</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="single-block">
                                    <div class="img-box">
                                        <a href="https://dailyrunnernews.com/?p=295">
                                            <img src="https://dailyrunnernews.com/wp-content/uploads/2019/08/68570682_718713595258003_7821980738529525760_n-480x250.jpg"
                                                alt="" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="details">
                                        <h4><a href="https://dailyrunnernews.com/?p=295">আগামী মাস থেকেই চাকরিতে
                                                আবেদনের
                                                বয়সসীমা ৩৫বছর করা হবে বললেন,ওবায়দুল কাদের।</a></h4>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-sm-4" style="margin-top:0px">
                                <div class="single-block">
                                    <div class="img-box">
                                        <a href="https://dailyrunnernews.com/?p=202"><img
                                                src="https://dailyrunnernews.com/wp-content/uploads/2019/01/cf217b85934d8425fd595374942dba21-5c41e7014db80-480x250.jpg"
                                                alt="ভোটাধিকার ‘হাইজ্যাককারীদের’ ওয়ার্নিং দিলেন ড. কামাল হোসেন"
                                                class="img-responsive"></a>
                                    </div>
                                    <div class="details">
                                        <h4><a href="https://dailyrunnernews.com/?p=202">ভোটাধিকার ‘হাইজ্যাককারীদের’
                                                ওয়ার্নিং দিলেন ড. কামাল হোসেন</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4" style="margin-top:0px">
                                <div class="single-block">
                                    <div class="img-box">
                                        <a href="https://dailyrunnernews.com/?p=199"><img
                                                src="https://dailyrunnernews.com/wp-content/uploads/2019/01/c534cce9ada47b3b86830f309bee43a1-5c42cc112b819-480x250.jpg"
                                                alt="উৎসবস্থল ‘জয় বাংলা’ স্লোগানে মুখর" class="img-responsive"></a>
                                    </div>
                                    <div class="details">
                                        <h4><a href="https://dailyrunnernews.com/?p=199">উৎসবস্থল ‘জয় বাংলা’
                                                স্লোগানে
                                                মুখর</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4" style="margin-top:0px">
                                <div class="single-block">
                                    <div class="img-box">
                                        <a href="https://dailyrunnernews.com/?p=196"><img
                                                src="https://dailyrunnernews.com/wp-content/uploads/2019/01/74abed92c7e7a96bde2aa9db7628f2e2-5c0a33801fcbf-480x250.jpg"
                                                alt="দুর্নীতিবিরোধী বার্তা দেবেন প্রধানমন্ত্রী"
                                                class="img-responsive"></a>
                                    </div>
                                    <div class="details">
                                        <h4><a href="https://dailyrunnernews.com/?p=196">দুর্নীতিবিরোধী বার্তা দেবেন
                                                প্রধানমন্ত্রী</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- <div> -->

                </section>

                <section class="leadBox box-white paddingTop10 my-1">
                    <!-- <div class="container"> -->
                    <div class="col-sm-12 main-content custom-block">
                        <div class="row">
                            <div class="col-sm-12">
                                <h2 class="catTitleBlock catTitleBackground">
                                    <span class="left">
                                        <span class="catName">
                                            <a href="https://dailyrunnernews.com/?cat=3">জাতীয়</a>
                                        </span>
                                    </span>
                                    <a href="https://dailyrunnernews.com/?cat=3" class="right">আরও <i
                                            class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                </h2>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="single-block">
                                    <div class="img-box">
                                        <a href="https://dailyrunnernews.com/?p=365">
                                            <img src="https://dailyrunnernews.com/wp-content/uploads/2019/09/CollageMaker_20190903_161654970-480x250.jpg"
                                                alt="" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="details">
                                        <h4><a href="https://dailyrunnernews.com/?p=365">বৈধ ড্রাইভিং লাইসেন্স ছাড়া
                                                কোনো
                                                ব্যক্তির কাছে মোটর সাইকেল বিক্রয় না করার বিষয়ে নির্দেশনা।</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="single-block">
                                    <div class="img-box">
                                        <a href="https://dailyrunnernews.com/?p=295">
                                            <img src="https://dailyrunnernews.com/wp-content/uploads/2019/08/68570682_718713595258003_7821980738529525760_n-480x250.jpg"
                                                alt="" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="details">
                                        <h4><a href="https://dailyrunnernews.com/?p=295">আগামী মাস থেকেই চাকরিতে
                                                আবেদনের
                                                বয়সসীমা ৩৫বছর করা হবে বললেন,ওবায়দুল কাদের।</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="single-block">
                                    <div class="img-box">
                                        <a href="https://dailyrunnernews.com/?p=295">
                                            <img src="https://dailyrunnernews.com/wp-content/uploads/2019/08/68570682_718713595258003_7821980738529525760_n-480x250.jpg"
                                                alt="" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="details">
                                        <h4><a href="https://dailyrunnernews.com/?p=295">আগামী মাস থেকেই চাকরিতে
                                                আবেদনের
                                                বয়সসীমা ৩৫বছর করা হবে বললেন,ওবায়দুল কাদের।</a></h4>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-sm-4" style="margin-top:0px">
                                <div class="single-block">
                                    <div class="img-box">
                                        <a href="https://dailyrunnernews.com/?p=202"><img
                                                src="https://dailyrunnernews.com/wp-content/uploads/2019/01/cf217b85934d8425fd595374942dba21-5c41e7014db80-480x250.jpg"
                                                alt="ভোটাধিকার ‘হাইজ্যাককারীদের’ ওয়ার্নিং দিলেন ড. কামাল হোসেন"
                                                class="img-responsive"></a>
                                    </div>
                                    <div class="details">
                                        <h4><a href="https://dailyrunnernews.com/?p=202">ভোটাধিকার ‘হাইজ্যাককারীদের’
                                                ওয়ার্নিং দিলেন ড. কামাল হোসেন</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4" style="margin-top:0px">
                                <div class="single-block">
                                    <div class="img-box">
                                        <a href="https://dailyrunnernews.com/?p=199"><img
                                                src="https://dailyrunnernews.com/wp-content/uploads/2019/01/c534cce9ada47b3b86830f309bee43a1-5c42cc112b819-480x250.jpg"
                                                alt="উৎসবস্থল ‘জয় বাংলা’ স্লোগানে মুখর" class="img-responsive"></a>
                                    </div>
                                    <div class="details">
                                        <h4><a href="https://dailyrunnernews.com/?p=199">উৎসবস্থল ‘জয় বাংলা’
                                                স্লোগানে
                                                মুখর</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4" style="margin-top:0px">
                                <div class="single-block">
                                    <div class="img-box">
                                        <a href="https://dailyrunnernews.com/?p=196"><img
                                                src="https://dailyrunnernews.com/wp-content/uploads/2019/01/74abed92c7e7a96bde2aa9db7628f2e2-5c0a33801fcbf-480x250.jpg"
                                                alt="দুর্নীতিবিরোধী বার্তা দেবেন প্রধানমন্ত্রী"
                                                class="img-responsive"></a>
                                    </div>
                                    <div class="details">
                                        <h4><a href="https://dailyrunnernews.com/?p=196">দুর্নীতিবিরোধী বার্তা দেবেন
                                                প্রধানমন্ত্রী</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- <div> -->

                </section>

            </div>
          @include('frontend.sidebar.sidebar')
        </div>
    </div>
    <!-- Menu-body section-end -->


    <!-- footer area content start -->
   @include('frontend.footer.footer')
    <!-- footer area content end -->


    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- silk slider cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
        integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="{{ asset('frontend/asset/js/script.js') }}"></script>
</body>

</html>
