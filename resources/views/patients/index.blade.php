@extends('patients.layouts.master')
@section('content')
<div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="subheader py-2 py-lg-6  subheader-solid " id="kt_subheader">
        <div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <div class="d-flex align-items-center flex-wrap mr-1">

                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <h5 class="text-dark font-weight-bold my-1 mr-5">
                        Extratik
                    </h5>

                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ route('patients') }}" class="text-muted">
                                Patients
                            </a>
                        </li>
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page Heading-->
            </div>
        </div>
    </div>
    <!--end::Subheader-->

    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <div class=" container ">

            <div class="card card-custom">
                <div class="card-header flex-wrap border-0 pt-6 pb-0">
                    <div class="card-title">
                        <h3 class="card-label">
                            Patient Information Datatable
                            <span class="d-block text-muted pt-2 font-size-sm">Access detailed patient information in the table below</span>
                        </h3>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div class="datatable datatable-default datatable-bordered datatable-loaded">
                            <table class="table table-head-custom table-vertical-center" >
                                <thead>
                                <tr class="text-uppercase">
                                    <th class="pl-0" style="min-width:50px">ID</th>
                                    <th style="min-width: 100px">IdCard</th>
                                    <th style="min-width: 100px">Name</th>
                                    <th style="min-width: 100px">Surname</th>
                                    <th style="min-width: 120px">DateOfBirth</th>
                                    <th style="min-width: 100px">Phone1</th>
                                    <th style="min-width: 100px">Phone2</th>
                                    <th class="pr-0 text-right" style="min-width: 30px">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($patients as $patient)
                                    <tr data-id="{{ $patient['Id'] }}">
                                        <td class="pl-0">#{{ $patient['Id'] }}</td>
                                        <td>{{ $patient['IdCard'] }}</td>
                                        <td>{{ $patient['Name'] }}</td>
                                        <td>{{ $patient['Surname'] }}</td>
                                        <td>{{ \Carbon\Carbon::parse($patient['DateOfBirth'])->format('d-m-Y') }}</td>
                                        <td>{{ $patient['ContactNumber1'] }}</td>
                                        <td>{{ $patient['ContactNumber2'] }}</td>
                                        <td class="pr-0 text-right">
                                            <a href="{{ route('patients.detail',$patient['Id']) }}" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-1" data-toggle="tooltip" title="Hasta Detayını Görüntüle">
                                        <span class="svg-icon svg-icon-md svg-icon-primary">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                 <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24"/>
                                                    <path d="M3,12 C3,12 5.45454545,6 12,6 C16.9090909,6 21,12 21,12 C21,12 16.9090909,18 12,18 C5.45454545,18 3,12 3,12 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                                    <path d="M12,15 C10.3431458,15 9,13.6568542 9,12 C9,10.3431458 10.3431458,9 12,9 C13.6568542,9 15,10.3431458 15,12 C15,13.6568542 13.6568542,15 12,15 Z" fill="#000000" opacity="0.3"/>
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>


                </div>
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
@endsection


