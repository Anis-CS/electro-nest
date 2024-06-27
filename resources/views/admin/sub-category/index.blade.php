@extends('admin.master')

@section('title')
    SubCategory
@endsection

@section('body')

    <!--app-content open-->
    <div class="app-content main-content mt-0">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">


                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <div>
                        <h1 class="page-title">Subcategory</h1>
                    </div>
                    <div class="ms-auto pageheader-btn">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Manage Category</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- Row -->
                <!-- End Row -->

                <!-- Row -->
                <div class="row row-sm">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <span><h3 class="card-title">All Subcategory</h3></span>
                                <a href="{{ route('sub-category.create') }}" class="btn btn-primary ms-auto d-block">Add Subcategory</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered text-nowrap border-bottom w-100" id="responsive-datatable">
                                        <thead>
                                        <tr>
                                            <th class="wd-15p border-bottom-0">Sl</th>
                                            <th class="wd-15p border-bottom-0">Subcategory Name</th>
                                            <th class="wd-15p border-bottom-0">Category Name</th>
                                            <th class="wd-20p border-bottom-0">Image</th>
                                            <th class="wd-15p border-bottom-0">Description</th>
                                            <th class="wd-10p border-bottom-0">Status</th>
                                            <th class="wd-25p border-bottom-0">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($subCategories as $subCategory)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $subCategory->name }}</td>
                                                <td>{{ $subCategory->category->name }}</td>
                                                <td>
                                                    <img src="{{ asset($subCategory->image) }}" alt="" height="60" width="80">
                                                </td>
                                                <td>{{ $subCategory->description }}</td>
                                                <td>{{ $subCategory->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                                <td class="justify-content-center">
                                                    <a href="{{ route('sub-category.edit', $subCategory->id) }}" class="btn btn-primary btn-sm me-2 float-start">
                                                        <i class="fa fa-edit"></i>
                                                    </a>

                                                    @if($subCategory->status == 1)
                                                        <a href="{{ route('sub-category.show', $subCategory->id) }}" class="btn btn-warning btn-sm me-2 float-start">
                                                            <i class="fa fa-eye-slash"></i>
                                                        </a>
                                                    @else
                                                        <a href="{{ route('sub-category.show', $subCategory->id) }}" class="btn btn-success btn-sm me-2 float-start">
                                                            <i class="fa fa-eye"></i>
                                                        </a>
                                                    @endif


                                                    <form action="{{ route('sub-category.destroy', $subCategory->id) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure delete this!!')">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
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
                <!-- End Row -->



            </div>
        </div>
    </div>
    <!-- CONTAINER CLOSED -->
@endsection