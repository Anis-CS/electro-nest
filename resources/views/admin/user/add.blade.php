@extends('admin.master')

@section('title')
    user
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
                        <h1 class="page-title">Form Layouts</h1>
                    </div>
                    <div class="ms-auto pageheader-btn">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Form Layouts</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- row -->
                <div class="row row-deck">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <span><h3 class="card-title">Add Color Form</h3></span>
                                <a href="{{ route('user.index') }}" class="btn btn-primary ms-auto d-block">Manage User</a>
                            </div>
                            <div class="card-body">
                                <p class="text-center text-success">{{session('message')}}</p>
                                <form class="form-horizontal" action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row mb-4">
                                        <label for="colorName" class="col-md-3 form-label">User Name</label>
                                        <div class="col-md-9">
                                            <input class="form-control" id="userName" name="name" placeholder="Enter User name" type="text">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="colorCode" class="col-md-3 form-label">User Email</label>
                                        <div class="col-md-9">
                                            <input class="form-control" id="email" name="email" placeholder="Enter Email address" type="email">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="colorCode" class="col-md-3 form-label">User Password</label>
                                        <div class="col-md-9">
                                            <input class="form-control" id="password" name="password" placeholder="Enter Your Password" type="password">
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <label for="colorCode" class="col-md-3 form-label">Profile Image</label>
                                        <div class="col-md-9">
                                            <input class="form-control" id="image" name="profile_photo_path" type="file">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="colorCode" class="col-md-3 form-label">Moderator</label>
                                        <div class="col-md-9">
                                            <select name="moderator" class="form-control">
                                                <option disabled selected>Selected User Moderator</option>
                                                <option value="Supper Admin">Supper Admin</option>
                                                <option value="Sub Admin">Sub Admin</option>
                                                <option value="User">User</option>
                                            </select>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Create User</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /row -->

            </div>
        </div>
    </div>
    <!-- CONTAINER CLOSED -->

@endsection
