@extends('admin.master')

@section('title')
    Add Company
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
                        <h1 class="page-title">Add Company</h1>
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
                                <span><h3 class="card-title">Add Company Form</h3></span>
                            </div>
                            <div class="card-body">
                                <p class="text-center text-success">{{session('message')}}</p>
                                <form class="form-horizontal" action="{{ route('company.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @foreach($companies as $company)
                                    <div class="row mb-4">
                                        <label for="categoryName" class="col-md-3 form-label">Company Name</label>
                                        <div class="col-md-9">
                                            <input class="form-control" value="{{$company->name}}" name="name" placeholder="Enter Company name" type="text">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="sloGan" class="col-md-3 form-label">Company Slogan</label>
                                        <div class="col-md-9">
                                            <input class="form-control" value="{{ $company->slogan }}" name="slogan" placeholder="Enter Slogan" type="text">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="domainUrl" class="col-md-3 form-label">Company Domain URL</label>
                                        <div class="col-md-9">
                                            <input class="form-control" value="{{ $company->domain_url }}" name="domain_url" placeholder="Enter Domain URL" type="text">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="facebookUrl" class="col-md-3 form-label">Company Facebook URL</label>
                                        <div class="col-md-9">
                                            <input class="form-control" value="{{ $company->facebook_url }}" name="facebook_url" placeholder="Enter Facebook URL" type="text">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="twitterUrl" class="col-md-3 form-label">Company Twitter URL</label>
                                        <div class="col-md-9">
                                            <input class="form-control" value="{{ $company->twitter_url }}" name="twitter_url" placeholder="Enter Twitter URL" type="text">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="youtubeUrl" class="col-md-3 form-label">Company YouTube URL</label>
                                        <div class="col-md-9">
                                            <input class="form-control" value="{{ $company->youtube_url }}" name="youtube_url" placeholder="Enter YouTube URL" type="text">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="linkedInUrl" class="col-md-3 form-label">Company LinkedIn URL</label>
                                        <div class="col-md-9">
                                            <input class="form-control" value="{{ $company->linked_in_url }}" name="linked_in_url" placeholder="Enter LinkedIn URL" type="text">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="instaGramUrl" class="col-md-3 form-label">Company Instagram URL</label>
                                        <div class="col-md-9">
                                            <input class="form-control" value="{{ $company->instagram_url }}" name="instagram_url" placeholder="Enter Instagram URL" type="text">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="logoJpg" class="col-md-3 form-label">Company Logo JPG</label>
                                        <div class="col-md-9">
                                            <input class="form-control dropify" src="{{ asset($company->logo_jpg) }}" name="logo_jpg" type="file">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="logoPng" class="col-md-3 form-label">Company Logo PNG</label>
                                        <div class="col-md-9">
                                            <input class="form-control dropify" value="{{ $company->slogan }}" name="logo_png" type="file">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="favIcon" class="col-md-3 form-label">Company FavIcon</label>
                                        <div class="col-md-9">
                                            <input class="form-control dropify" value="{{ $company->slogan }}" name="favicon" type="file">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="tradeLicense" class="col-md-3 form-label">Company Trade License</label>
                                        <div class="col-md-9">
                                            <input class="form-control dropify" value="{{ $company->slogan }}" name="trade_license" type="file">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="description" class="col-md-3 form-label">Company TIN Certificate</label>
                                        <div class="col-md-9">
                                            <input class="form-control dropify" value="{{ $company->slogan }}" name="tin_certificate" type="file">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="ecabCertificate" class="col-md-3 form-label">Company ECAB Certificate</label>
                                        <div class="col-md-9">
                                            <input class="form-control dropify" value="{{ $company->slogan }}" name="ecab_certificate" type="file">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="paymentImage" class="col-md-3 form-label">Payment Gateway Image</label>
                                        <div class="col-md-9">
                                            <input class="form-control dropify" value="{{ $company->slogan }}"  name="payment_images[]" type="file"
                                                   accept=" image/jpeg, image/png, text/html, application/zip, text/css, text/js" multiple/>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="contactEmail" class="col-md-3 form-label">Company Contact Email</label>
                                        <div class="col-md-9">
                                            <input class="form-control" value="{{ $company->contact_email }}" name="contact_email" placeholder="Enter Contact Email" type="text">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="supportEmail" class="col-md-3 form-label">Company Support Email</label>
                                        <div class="col-md-9">
                                            <input class="form-control" value="{{ $company->support_email }}" name="support_email" placeholder="Enter Support Email" type="text">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="description" class="col-md-3 form-label">Company Contact Phone</label>
                                        <div class="col-md-9">
                                            <input class="form-control" value="{{ $company->contact_mobile }}" name="contact_mobile" placeholder="Enter Contact Mobile" type="text">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="description" class="col-md-3 form-label">Company Support Phone</label>
                                        <div class="col-md-9">
                                            <input class="form-control" value="{{ $company->support_mobile }}" name="support_mobile" placeholder="Enter Support Mobile" type="text">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="faxNumber" class="col-md-3 form-label">Company Fax Number</label>
                                        <div class="col-md-9">
                                            <input class="form-control" value="{{ $company->fax_number }}" name="fax_number" placeholder="Enter Fax Number" type="text">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="addRess" class="col-md-3 form-label">Company Address</label>
                                        <div class="col-md-9">
                                            <textarea class="form-control" name="address" placeholder="Enter Address" type="text">{{ $company->address }}</textarea>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="bioGraphy" class="col-md-3 form-label">Company Short Biography</label>
                                        <div class="col-md-9">
                                            <textarea class="form-control" ivalue="{{ $company->biography }}" name="biography" placeholder="Enter Biography" type="text"></textarea>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="CopyWrite" class="col-md-3 form-label">Copy Write</label>
                                        <div class="col-md-9">
                                            <textarea class="form-control" value="{{ $company->copy_write }}" name="copy_write" placeholder="Enter Copy Write" type="text"></textarea>
                                        </div>
                                    </div>
                                    @endforeach
                                    <button class="btn btn-primary" type="submit">Add Company Info</button>
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
