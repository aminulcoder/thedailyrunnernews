@extends('backend.layout.app')
@section('content')
    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box page-title-box-alt">
                        <h4 class="page-title">Datatables</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Minton</a></li>
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
                                        <a href="{{route('vot.create')}}" class="btn btn-success mb-2"><i
                                            class="mdi mdi-format-list-bulleted me-1"></i> Create Vot</a>
                                    </div>
                                </div>
                            </div>
                            </p>

                            <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th style="width:25%">Description</th>
                                        <th>Yes</th>
                                        <th>No</th>
                                        <th>No Comment</th>
                                        <th>Total Vot</th>
                                        <th>Start date</th>
                                        <th>End date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    @php
                                        $serial = 1;
                                    @endphp

                                    @foreach ($vots as $vot)
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">{{ $serial++ }}</td>

                                            <td>
                                                <h5 class="m-0 d-inline-block align-middle"><a href="#"
                                                        class="text-dark">{{ $vot->description }}</a></h5>
                                            </td>
                                            <td>
                                                <h5 class="m-0 d-inline-block align-middle"><a href="#"
                                                        class="text-dark">{{ $vot->yes }}</a></h5>
                                            </td>
                                            <td>
                                                <h5 class="m-0 d-inline-block align-middle"><a href="#"
                                                        class="text-dark">{{ $vot->no }}</a></h5>
                                            </td>
                                            <td>
                                                <h5 class="m-0 d-inline-block align-middle"><a href="#"
                                                        class="text-dark">{{ $vot->no_comment }}</a></h5>
                                            </td>
                                            <td>
                                                <h5 class="m-0 d-inline-block align-middle"><a href="#"
                                                        class="text-dark">{{ $vot->total_vot }}</a></h5>
                                            </td>
                                            <td>
                                                <h5 class="m-0 d-inline-block align-middle"><a href="#"
                                                        class="text-dark">{{ $vot->start_date->format('Y-m-d')}}</a></h5>
                                            </td>
                                            <td>
                                                <h5 class="m-0 d-inline-block align-middle"><a href="#"
                                                        class="text-dark">{{ $vot->end_date->format('Y-m-d')}}</a></h5>
                                            </td>

                                            <td>
                                                <a href="{{ route('vot.edit', $vot->id) }}"
                                                    class="btn btn-sm btn-info icon-pencil7 ">Edit</a>
                                                <form action="{{ route('vot.destroy', $vot->id) }}" method="POST"
                                                    style="display: inline-flex">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        onclick=" return confirm('Are you  shure to delete?')"
                                                        class="btn  btn-danger btn-sm icon-trash mt-1" style="padding:6px;" > Delete</button>
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

