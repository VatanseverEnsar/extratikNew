@extends('patients.layouts.master')
@section('content')
    <div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Subheader-->
        <div class="subheader py-2 py-lg-6  subheader-solid " id="kt_subheader">
            <div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                <!--begin::Info-->
                <div class="d-flex align-items-cenFter flex-wrap mr-1">
                    <!--begin::Mobile TFoggle-->
                    <button class="burger-icon burger-icon-left mr-4 d-inline-block d-lg-none"
                            id="kt_subheader_mobile_toggle">
                        <span></span>
                    </button>
                    <!--end::Mobile Toggle-->

                    <!--begin::Page Heading-->
                    <div class="d-flex align-items-baseline flex-wrap mr-5">
                        <!--begin::Page Title-->
                        <h5 class="text-dark font-weight-bold my-1 mr-5">
                            #{{ $patient['Id'] }} Patient Detail </h5>
                        <!--end::Page Title-->

                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                            <li class="breadcrumb-item text-muted">
                                <a href="{{ route('patients') }}" class="text-muted">
                                    Patients
                                </a>
                            </li>
                            <li class="breadcrumb-item text-muted">
                                <a href="{{ route('patients.detail',$patient['Id']) }}" class="text-muted">
                                    #{{ $patient['Id'] }} Patient Detail
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex flex-column-fluid">
            <div class=" container ">
                <div class="d-flex flex-row">
                    <div class="flex-row-lg-auto offcanvas-mobile w-300px w-xl-350px" id="kt_profile_aside">
                        <div class="card card-custom card-stretch">
                            <div class="card-body pt-4">
                                <div class="d-flex align-items-center">
                                    <div
                                        class="symbol symbol-60 symbol-xxl-100 mr-5 align-self-start align-self-xxl-center">
                                        <div class="symbol symbol-lg-75 symbol-primary">
                                            <span class="symbol-label font-size-h3 font-weight-boldest">{{ strtoupper(substr($patient['Name'], 0, 1)) }}{{ strtoupper(substr($patient['Surname'], 0, 1)) }}</span>
                                        </div>
                                        <i class="symbol-badge bg-success"></i>
                                    </div>
                                    <div>
                                        <a href="#"
                                           class="font-weight-bolder font-size-h5 text-dark-75 text-hover-primary">
                                            {{ @$patient['Name'] }} {{ @$patient['Surname'] }}
                                        </a>
                                        <div class="text-muted">
                                            {{ @$patient['Gender'] }}
                                        </div>
                                    </div>
                                </div>

                                <!--begin::Contact-->
                                <div class="py-9">
                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                        <span class="font-weight-bold mr-2">ID Card:</span>
                                        <a href="#" class="text-muted text-hover-primary">{{ @$patient['IdCard'] }}</a>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                        <span class="font-weight-bold mr-2">Phone 1:</span>
                                        <span class="text-muted">{{ @$patient['ContactNumber1'] }}</span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                        <span class="font-weight-bold mr-2">Phone 2:</span>
                                        <span class="text-muted">{{ @$patient['ContactNumber2'] }}</span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span class="font-weight-bold mr-2">Address:</span>
                                        <span class="text-muted">{{ @$patient['Address'] }}</span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span class="font-weight-bold mr-2">PostCode:</span>
                                        <span class="text-muted">{{ @$patient['Postcode'] }}</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="flex-row-lg-fluid ml-lg-8">
                        <!--begin::Row-->
                        <div class="row">
                            <div class="card card-custom gutter-b card-stretch">
                                <div class="card-body pt-4">
                                    <!-- Header -->
                                    <div class="text-center mb-7">
                                        <h2 class="text-dark mb-3">Close Relatives</h2>
                                    </div>
                                    <!-- Row for Kin Cards -->
                                    <div class="row justify-content-center">
                                        @foreach ($patient['NextOfKin'] as $kin)
                                            <div class="col-lg-auto">
                                                <div class="card card-custom gutter-b card-stretch" style="background-color: #e5e5e5c7;">
                                                    <div class="card-body pt-4 d-flex flex-column">
                                                        <!-- Kin Details -->
                                                        <div class="d-flex align-items-center mb-7">
                                                            <div class="flex-shrink-0 mr-4 mt-lg-0 mt-3">
                                                                <div class="symbol symbol-lg-75 symbol-primary">
                                                                    <span class="symbol-label font-size-h3 font-weight-boldest">{{ strtoupper(substr($kin['Name'], 0, 1)) }}{{ strtoupper(substr($kin['Surname'], 0, 1)) }}</span>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex flex-column">
                                                                <a href="#" class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0">{{ $kin['Name'] }} {{ $kin['Surname'] }}</a>
                                                            </div>
                                                        </div>
                                                        <div class="mb-7">
                                                            <div class="d-flex justify-content-between align-items-center">
                                                                <span class="text-dark-75 font-weight-bolder mr-2">ID Card:</span>
                                                                <span class="text-muted font-weight-bold">{{ $kin['IdCard'] }}</span>
                                                            </div>
                                                            <div class="d-flex justify-content-between align-items-center my-2">
                                                                <span class="text-dark-75 font-weight-bolder mr-2">Phone 1:</span>
                                                                <a href="#" class="text-muted text-hover-primary">{{ $kin['ContactNumber1'] }}</a>
                                                            </div>
                                                            <div class="d-flex justify-content-between align-items-center">
                                                                <span class="text-dark-75 font-weight-bolder mr-2">Phone 2:</span>
                                                                <a href="#" class="text-muted text-hover-primary">{{ $kin['ContactNumber2'] }}</a>
                                                            </div>
                                                        </div>
                                                        <!-- End Kin Details -->
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card mb-8">
                                    <div class="card-body">
                                        <div class="p-6">
                                            <h2 class="text-dark mb-8">Medical Information</h2>
                                            <!--begin::Accordion-->
                                            <div class="accordion accordion-light accordion-light-borderless accordion-svg-toggle" id="accordionMedical">
                                                @foreach ($patient['Medical'] as $categoryName => $categoryItems)
                                                    <!--begin::Card for each category-->
                                                    <div class="card">
                                                        <div class="card-header" id="heading{{ $categoryName }}">
                                                            <div class="card-title collapsed" data-toggle="collapse" data-target="#collapse{{ $categoryName }}" aria-expanded="false" aria-controls="collapse{{ $categoryName }}">
                                         <span class="svg-icon svg-icon-primary"><!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Navigation/Angle-double-right.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <title>Stockholm-icons / Navigation / Angle-double-right</title>
                                                                <desc>Created with Sketch.</desc>
                                                                <defs></defs>
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                                                    <path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero"></path>
                                                                    <path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) "></path>
                                                                </g>
                                                            </svg><!--end::Svg Icon-->
                                                        </span>
                                                                <div class="card-label text-dark pl-4">{{ $categoryName }}</div>
                                                            </div>

                                                        </div>
                                                        <div id="collapse{{ $categoryName }}" class="collapse" aria-labelledby="heading{{ $categoryName }}" data-parent="#accordionMedical">
                                                            <div class="card-body text-dark-50 font-size-lg pl-12">
                                                                @foreach ($categoryItems as $item)
                                                                    <!-- Item details here -->
                                                                    <p><strong>{{ $item['Name'] }}</strong>: {{ $item['Notes'] == "" ? 'No details provided.':$item['Notes'] }}</p>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end::Card for each category-->
                                                @endforeach
                                            </div>
                                            <!--end::Accordion-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

