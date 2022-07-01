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
                                <li class="breadcrumb-item active">Datatables</li>
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

                            <table id="basic-datatable" class="table dt-responsive nowrap w-100"  style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th>thumbnail</th>
                                        <th style="width: 50px;">title</th>
                                        <th>Category name</th>
                                        <th>status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    @php
                                        $serial = 1;
                                    @endphp

                                    @foreach ($news as $item)
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">{{ $serial++ }}</td>
                                            <td>
                                                <img src="{{ asset('storage/images/' . $item->thumbnail) }}" height="100x"
                                                    width="200px" alt="{{ $item->thumbnail }}">
                                            </td>
                                            <td>
                                                <h5 class="m-0 d-inline-block align-middle"><a href="#"
                                                        class="text-dark">{{ $item->title }}</a></h5>
                                            </td>
                                            <td>
                                                <h5 class="m-0 d-inline-block align-middle"><a href="#"
                                                        class="text-dark">{{ $item->category->name }}</a></h5>
                                            </td>
                                            <td>Published</td>

                                            <td>

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

                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div>
            <!-- end row-->

        </div> <!-- container -->

    </div>
@endsection
@push('style')
    <link media="all" type="text/css" rel="stylesheet"
        href="https://stories.botble.com/vendor/core/plugins/language/css/language.css?v=5.24">
    <link media="all" type="text/css" rel="stylesheet"
        href="https://stories.botble.com/vendor/core/core/table/css/table.css?v=5.24">
    <link media="all" type="text/css" rel="stylesheet"
        href="https://stories.botble.com/vendor/core/core/base/css/themes/default.css?v=5.24">
@endpush
