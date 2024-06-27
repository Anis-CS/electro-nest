@extends('admin.master')

@section('title')
    Manage Company
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
                        <h1 class="page-title">Manage Company</h1>
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
                                <span><h3 class="card-title">Company Form</h3></span>
                            </div>
                            <div class="card-body">
                                <p class="text-center text-success">{{session('message')}}</p>
                                <form class="form-horizontal" action="{{ route('company.update',$company->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row mb-4">
                                        <label for="companyName" class="col-md-3 form-label">Company Name</label>
                                        <div class="col-md-9">
                                            <input class="form-control" id="companyName" name="name" value="{{$company->name}}" type="text">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="sloGan" class="col-md-3 form-label">Company Slogan</label>
                                        <div class="col-md-9">
                                            <input class="form-control" id="sloGan" name="slogan" value="{{$company->slogan}}" type="text">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="domainUrl" class="col-md-3 form-label">Company Domain URL</label>
                                        <div class="col-md-9">
                                            <input class="form-control" id="domainUrl" name="domain_url" value="{{$company->domain_url}}"  type="text">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="facebookUrl" class="col-md-3 form-label">Company Facebook URL</label>
                                        <div class="col-md-9">
                                            <input class="form-control" id="facebookUrl" name="facebook_url" value="{{$company->facebook_url}}"   type="text">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="twitterUrl" class="col-md-3 form-label">Company Twitter URL</label>
                                        <div class="col-md-9">
                                            <input class="form-control" id="twitterUrl" name="twitter_url" value="{{$company->twitter_url}}"   type="text">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="youtubeUrl" class="col-md-3 form-label">Company YouTube URL</label>
                                        <div class="col-md-9">
                                            <input class="form-control" id="youtubeUrl" name="youtube_url" value="{{$company->youtube_url}}"  type="text">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="linkedInUrl" class="col-md-3 form-label">Company LinkedIn URL</label>
                                        <div class="col-md-9">
                                            <input class="form-control" id="linkedInUrl" name="linked_in_url" value="{{$company->linked_in_url}}"   type="text">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="instagramUrl" class="col-md-3 form-label">Company Instagram URL</label>
                                        <div class="col-md-9">
                                            <input class="form-control" id="instagramUrl" name="instagram_url" value="{{$company->instagram_url}}"   type="text">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="logoJpg" class="col-md-3 form-label">Company Logo JPG</label>
                                        <div class="col-md-9">
                                            <input class="form-control dropify" id="logoJpg" name="logo_jpg" type="file">
                                            <img src="{{asset($company->logo_jpg)}}" alt="" height="200"/>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="logoPng" class="col-md-3 form-label">Company Logo PNG</label>
                                        <div class="col-md-9">
                                            <input class="form-control dropify" id="logoPng" name="logo_png" type="file">
                                            <img src="{{asset($company->logo_png)}}" alt="" height="200"/>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="favIcon" class="col-md-3 form-label">Company FavIcon</label>
                                        <div class="col-md-9">
                                            <input class="form-control dropify" id="favIcon" name="favicon" type="file">
                                            <img src="{{asset($company->favicon)}}" alt="" height="200"/>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="tradeLicense" class="col-md-3 form-label">Company Trade License</label>
                                        <div class="col-md-9">
                                            <input class="form-control dropify" id="tradeLicense" name="trade_license" type="file">
                                            <img src="{{asset($company->trade_license)}}" alt="" height="200"/>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="tinCertificate" class="col-md-3 form-label">Company TIN Certificate</label>
                                        <div class="col-md-9">
                                            <input class="form-control dropify" id="tinCertificate" name="tin_certificate" type="file">
                                            <img src="{{asset($company->tin_certificate)}}" alt="" height="200"/>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="ecabCertificate" class="col-md-3 form-label">Company ECAB Certificate</label>
                                        <div class="col-md-9">
                                            <input class="form-control dropify" id="ecabCertificate" name="ecab_certificate" type="file">
                                            <img src="{{asset($company->ecab_certificate)}}" alt="" height="200"/>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <label for="image" class="col-md-3 form-label">Payment Image</label>
                                        <div class="col-md-9">
                                            <input class="form-control dropify"  name="payment_image[]" type="file" accept=" image/jpeg, image/png, text/html, application/zip, text/css, text/js" multiple/>
                                            @foreach($paymentImages as $paymentImage)
                                                <img src="{{ asset($paymentImage->payment_images) }}" alt="" style="height: 100px; width: 150px;">
                                            @endforeach
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <label for="contactEmail" class="col-md-3 form-label">Company Contact Email</label>
                                        <div class="col-md-9">
                                            <input class="form-control" id="contactEmail" value="{{$company->contact_email}}" name="contact_email"  type="text">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="supportEmail" class="col-md-3 form-label">Company Support Email</label>
                                        <div class="col-md-9">
                                            <input class="form-control" id="supportEmail" value="{{$company->support_email}}" name="support_email" type="text">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="description" class="col-md-3 form-label">Company Contact Phone</label>
                                        <div class="col-md-9">
                                            <input class="form-control"  value="{{$company->contact_mobile}}" name="contact_mobile" type="text">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="description" class="col-md-3 form-label">Company Support Phone</label>
                                        <div class="col-md-9">
                                            <input class="form-control"  value="{{$company->support_mobile}}" name="support_mobile" type="text">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="faxNumber" class="col-md-3 form-label">Company Fax Number</label>
                                        <div class="col-md-9">
                                            <input class="form-control" id="faxNumber" value="{{$company->fax_number}}" name="fax_number" type="text">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="address" class="col-md-3 form-label">Company Address</label>
                                        <div class="col-md-9">
                                            <textarea class="form-control" id="address" name="address" type="text">{{$company->address}}</textarea>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="biography" class="col-md-3 form-label">Company Short Biography</label>
                                        <div class="col-md-9">
                                            <textarea class="form-control" id="biography" name="biography" type="text">{{$company->biography}}</textarea>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="copyWrite" class="col-md-3 form-label">CopyWrite</label>
                                        <div class="col-md-9">
                                            <textarea class="form-control" id="copy_write" name="copy_write"  type="text">{{$company->copy_write}}</textarea>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Update Company Info</button>
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
