@extends('backend.layout.app')
@section('title')
    create News
@endsection
@section('content')
    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box page-title-box-alt">
                        <h4 class="page-title">News</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Dailyrunnernews</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                <li class="breadcrumb-item active">News list</li>
                            </ol>
                        </div>
                    </div>
                </div>

            </div>

            <!-- end page title -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">News Table</h4>
                            <p class="sub-header">
                            <div class="portlet-title">
                                <div class="caption">
                                    <div class="wrapper-action">
                                        <a href="{{route('news.create')}}" class="btn btn-success mb-2"><i
                                            class="mdi mdi-format-list-bulleted me-1"></i> Create News</a>
                                    </div>
                                </div>
                            </div>
                            </p>

                            <table class="table table-bordered"  style="width:100%">
                                <thead>
                                    <tr>
                                        <th  class="text-dark fw-bolder text-center"style="width: 5%">Sl</th>
                                        <th  class="text-dark fw-bolder text-center"style="width: 5%">ID</th>
                                        <th class="text-dark fw-bolder text-center" style="width: 40%">title</th>
                                        <th  class="text-dark fw-bolder text-center"style="width: 10% ">Category name</th>
                                        <th  class="text-dark fw-bolder text-center"style="width: 5% ">status</th>
                                        <th  class="text-dark fw-bolder text-center"style="width: 22%">Action</th>
                                    </tr>
                                </thead>


                                <tbody>

                                    @foreach  ($news as  $item)

                                        <tr role="row" class="odd">
                                            <th class="fw-bolder fs-5 text-dark text-center"> {{ $news->firstItem() + $loop->index }}</th>
                                            <td class="text-dark text-center">{{ $item->id}}</td>

                                            <td>
                                                <h5 class="m-0 d-inline-block align-middle"     ><a href="#"
                                                        class="text-dark text-center">{{ $item->title }}</a></h5>
                                            </td>
                                            <td>
                                                <h5 class="m-0 d-inline-block align-middle text-center"><a href="#"
                                                        class="text-dark">{{ $item->category->name }}</a></h5>
                                            </td>

                                            <td>
                                                <?php if($item->status == 1) {?>
                                                <a href="{{route('news.status.update',$item->id)}}" class="btn btn-success">Active</a>

                                                <?php }else{?>

                                                    <a href="{{route('news.status.update',$item->id)}}" class="btn btn-danger">Inactive</a>
                                                    <?php }  ?>
                                             </td>

                                            <td class="text-center">
                                                {{-- <a href="#" class="btn btn-primary btn-sm">QR Code</a> --}}
                                                <form action="{{route('qrcode')}}" method="get" style="display: inline" target="_blank">
                                                    @csrf
                                                    <input type="hidden" name="link" value="{{route('singlenews', $item->id)}}">
                                                    <input type="hidden" name="id" value="{{$item->id}}">
                                                    <button type="submit" class="btn btn-primary btn-sm">QR Code</button>
                                                </form>
                                                <a href="{{ route('news.edit', $item->id) }}"
                                                    class="btn btn-sm btn-info icon-pencil7">Edit</a>
                                                <form action="{{ route('news.destroy', $item->id) }}" method="POST"
                                                    style="display: inline-flex">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        onclick=" return confirm('Are you  shure to delete?')"
                                                        class="btn btn-danger btn-sm icon-trash"> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{-- {{ $news->appends($_GET)->links() }} --}}
                            {{ $news->links() }}
                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div>
            <!-- end row-->

        </div> <!-- container -->

    </div>
@endsection
@push('style')
    {{-- <link media="all" type="text/css" rel="stylesheet"
        href="https://stories.botble.com/vendor/core/plugins/language/css/language.css?v=5.24"> --}}
    {{-- <link media="all" type="text/css" rel="stylesheet"
        href="https://stories.botble.com/vendor/core/core/table/css/table.css?v=5.24"> --}}
    {{-- <link media="all" type="text/css" rel="stylesheet"
        href="https://stories.botble.com/vendor/core/core/base/css/themes/default.css?v=5.24"> --}}
@endpush
