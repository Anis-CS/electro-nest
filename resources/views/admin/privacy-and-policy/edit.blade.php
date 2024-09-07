@extends('admin.master')

@section('title')
    Edit-Privacy-And-Policy
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
                        <h1 class="page-title">Policies</h1>
                    </div>
                    <div class="ms-auto pageheader-btn">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Privacy and Policy</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Policies</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- row -->
                <div class="row row-deck">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h3 class="card-title">Edit Policy Form</h3>
                            </div>
                            <div class="card-body">
                                <form class="form-horizontal" action="{{ route('privacy-policy.update', $policy->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <h4>Policy One</h4>
                                    <hr>
                                    <div class="row mb-4">
                                        <label for="oneName" class="col-md-3 form-label">Policy Name</label>
                                        <div class="col-md-9">
                                            <input class="form-control" id="oneName" name="one_name" value="{{ $policy->one_name }}" placeholder="Enter Policy name" type="text" required>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="policyDescription" class="col-md-3 form-label">Policy Description</label>
                                        <div class="col-md-9">
                                            <textarea class="form-control summernote" cols="30" rows="10" name="one_description" placeholder="Enter Policy Description" required>{{ $policy->one_description }}</textarea>
                                        </div>
                                    </div>
                                    <hr>
                                    <h4>Policy Two</h4>
                                    <hr>
                                    <div class="row mb-4">
                                        <label for="twoName" class="col-md-3 form-label">Policy Name</label>
                                        <div class="col-md-9">
                                            <input class="form-control" id="twoName" name="two_name" value="{{ $policy->two_name }}" placeholder="Enter Policy name" type="text">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="policyDescription" class="col-md-3 form-label">Policy Description</label>
                                        <div class="col-md-9">
                                            <textarea class="form-control summernote" cols="30" rows="10" name="two_description" placeholder="Enter Policy Description">{{ $policy->two_description }}</textarea>
                                        </div>
                                    </div>
                                    <hr>
                                    <h4>Policy Three</h4>
                                    <hr>
                                    <div class="row mb-4">
                                        <label for="threeName" class="col-md-3 form-label">Policy Name</label>
                                        <div class="col-md-9">
                                            <input class="form-control" id="threeName" value="{{ $policy->three_name }}" name="three_name" placeholder="Enter Policy name" type="text">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="policyDescription" class="col-md-3 form-label">Policy Description</label>
                                        <div class="col-md-9">
                                            <textarea class="form-control summernote" cols="30" rows="10" name="three_description" placeholder="Enter Policy Description">{{ $policy->three_description }}</textarea>
                                        </div>
                                    </div>
                                    <hr>
                                    <h4>Policy Four</h4>
                                    <hr>
                                    <div class="row mb-4">
                                        <label for="fourName" class="col-md-3 form-label">Policy Name</label>
                                        <div class="col-md-9">
                                            <input class="form-control" id="fourName" value="{{ $policy->four_name }}" name="four_name" placeholder="Enter Policy name" type="text">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="policyDescription" class="col-md-3 form-label">Policy Description</label>
                                        <div class="col-md-9">
                                            <textarea class="form-control summernote" cols="30" rows="10" name="four_description" placeholder="Enter Policy Description">{{ $policy->four_description }}</textarea>
                                        </div>
                                    </div>
                                    @if(Auth::user()->moderator=='admin')
                                        <button class="btn btn-primary" type="submit">Update Policy Info</button>
                                    @endif
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
