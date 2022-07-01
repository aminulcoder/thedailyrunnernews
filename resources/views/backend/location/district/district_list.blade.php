@extends('backend.layout.app')
@section('title')
 District
@endsection
@section('content')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box page-title-box-alt">
                    <h4 class="page-title">District List</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dailyrunnernews</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Paper</a></li>
                            <li class="breadcrumb-item active">Product List</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <a href="{{ route('district.create') }}" class="btn btn-success mb-2"><i
                                        class="mdi mdi-plus-circle me-1"></i> Add District</a>
                            </div>
                            <div class="col-sm-6">
                                <div class="float-sm-end">
                                    <button type="button" class="btn btn-success mb-2 mb-sm-0"><i
                                            class="mdi mdi-cog"></i></button>
                                </div>
                            </div><!-- end col-->
                        </div>
                        <!-- end row -->

                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th>SN</th>
                                        <th>District</th>
                                        <th>Division</th>
                                        <th>Created at</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $serial = 1;
                                    @endphp
                                    @foreach ($all_district as $district)
                                        <tr>
                                            <th scope="row">{{ $serial++ }}</th>
                                            <td>
                                                <h5 class="m-0 d-inline-block align-middle"><a href="#"
                                                        class="text-dark">{{ $district->name }}</a></h5>
                                            </td>
                                            <td>
                                                <h5 class="m-0 d-inline-block align-middle">
                                                    <small>{{$district->getDivision->name}} -> {{$district->name}}</small>
                                                </h5>
                                            </td>
                                            <td>
                                                {{ Carbon\Carbon::parse($district->created_at)->diffForHumans() }}
                                            </td>
                                            <td>

                                                <a href="{{ route('district.edit', $district->id) }}"
                                                    class="btn btn-sm btn-info icon-pencil7">Edit</a>
                                                <form action="{{ route('district.destroy', $district->id) }}"
                                                    method="POST" style="display: inline-flex">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->


    </div>
@endsection
