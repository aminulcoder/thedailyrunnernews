@php
    $news   = App\Models\Blog\News::get();
@endphp
<section>
    <div class="container">
        <div class="col-md-12">
            <div class="row " id="title-news">
                <div style="margin: 10px 5px 0 5px">
                    <table border="0" width="100%" id="table1" cellspacing="0" cellpadding="0">
                        <tbody>
                            <tr>
                                <td
                                    style="width: 75px; background: #014224; border: 1px solid #014224;  color: #fff; font-size: 18px; padding: 2px 0 2px 10px">
                                    শিরোনাম:</td>
                                <td style="border: 1px solid #014224; padding: 0 5px 0 5px">
                                    <marquee direction="left" onmouseout="this.start()" onmouseover="this.stop()"
                                        scrolldelay="1" scrollamount="3">
                                        <!-- End Page-->
                                        @foreach ($news as $item )
                                        <span class="ticker"><a href="{{route('singlenews',  $item->id)}}">
                                            {{$item->title}}
                                        </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                        @endforeach

                                        <!-- End Page-->

                                    </marquee>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </div>

</section>
