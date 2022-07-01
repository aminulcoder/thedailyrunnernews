@extends('backend.layout.app')
@section('title')
   sub category
@endsection
@section('content')
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box page-title-box-alt">
                        <h4 class="page-title">Sub Category List</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Heshelghor</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">eCommerce</a></li>
                                <li class="breadcrumb-item active">Category List</li>
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
                                    <a href="{{ route('subcategory.create') }}" class="btn btn-success mb-2"><i
                                            class="mdi mdi-plus-circle me-1"></i> Add Sub Category</a>
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
                                <table class="table table-centered w-100 dt-responsive nowrap" id="basic-datatable"
                                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead class="table-light">
                                        <tr>
                                            <th style="width: 20px;">
                                                <div class="form-check font-16 mb-0">
                                                    <input class="form-check-input" type="checkbox" id="customerlist">
                                                    <label class="form-check-label" for="customerlist">&nbsp;</label>
                                                </div>
                                            </th>
                                            <th class="all">SN</th>
                                            <th class="all">Category Name</th>
                                            <th class="all">Sub Category Name</th>
                                            <th style="width: 85px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $serial = 1;
                                        @endphp
                                        @foreach ($subcategories as $subcategory)
                                            <tr>
                                                <td>
                                                    <div class="form-check font-16 mb-0">
                                                        <input class="form-check-input" type="checkbox" id="customerlist01">
                                                        <label class="form-check-label" for="customerlist01">&nbsp;</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    {{ $serial++ }}
                                                </td>
                                                <td>
                                                    <h5 class="m-0 d-inline-block align-middle"><a href="#"
                                                            class="text-dark">{{ $subcategory->category->name }}</a></h5>
                                                </td>
                                                <td>
                                                    <h5 class="m-0 d-inline-block align-middle"><a href="#"
                                                            class="text-dark">{{ $subcategory->name}}</a></h5>
                                                </td>
                                                <td  class="d-flex justify-content-start ">
                                                    <a href="{{ route('subcategory.edit', $subcategory->id) }}"
                                                        class="btn  btn-info  "><i
                                                            class="mdi mdi-square-edit-outline "></i> </a>

                                                    <form action="{{ route('subcategory.destroy', $subcategory->id) }}"
                                                        method="POST" style="display: inline-flex">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            onclick=" return confirm('Are you  shure to delete?')"
                                                            class="btn btn-danger "> <i class="mdi mdi-delete"></i></button>
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


        </div> <!-- container -->

    </div> <!-- content -->
@endsection

