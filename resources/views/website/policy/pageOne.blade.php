@extends('website.master')

@section('title')
    | {{ $policy->one_name }}
@endsection

@section('body')

    <!-- START SECTION BREADCRUMB -->
    <div class="breadcrumb_section bg_gray page-title-mini">
        <div class="container"><!-- STRART CONTAINER -->
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-title">
                        <h1>{{ $policy->one_name }}</h1>
                    </div>
                </div>
                <div class="col-md-6">
                    <ol class="breadcrumb justify-content-md-end">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('policyone')}}">{{ $policy->one_name }}</a></li>
                    </ol>
                </div>
            </div>
        </div><!-- END CONTAINER-->
    </div>
    <!-- END SECTION BREADCRUMB -->

    <!-- START MAIN CONTENT -->
    <div class="main_content">

        <!-- STAT SECTION FAQ -->
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="term_conditions">
                           {!! $policy->one_description !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END SECTION FAQ -->

    </div>
    <!-- END MAIN CONTENT -->

@endsection
