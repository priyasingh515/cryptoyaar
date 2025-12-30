
@extends('backend.layouts.main')
@section('content')
    

    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Dashboard</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item active">Dashboard</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="float-end">
                                    <div class="avatar-sm mx-auto mb-4">
                                        <span class="avatar-title rounded-circle bg-light font-size-24">
                                            <i class="mdi mdi-cash-multiple text-primary"></i>
                                        </span>
                                    </div>
                                </div>
                                <div>
                                    <p class="text-muted text-uppercase fw-semibold">Total Users</p>
                                    <h4 class="mb-1 mt-1"><span class="counter-value" data-target="{{$totalUsers}}">0</span></h4>
                                </div>
                                </p>
                            </div>
                        </div>
                    </div> <!-- end col-->

                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="float-end">
                                    <div class="avatar-sm mx-auto mb-4">
                                        <span class="avatar-title rounded-circle bg-light font-size-24">
                                            <i class="mdi mdi-refresh-circle text-success"></i>
                                        </span>
                                    </div>
                                </div>
                                <div>
                                    <p class="text-muted text-uppercase fw-semibold">Total Category</p>
                                    <h4 class="mb-1 mt-1"><span class="counter-value" data-target="{{$totalCategory}}">0</span></h4>
                                </div>
                                </p>
                            </div>
                        </div>
                    </div> <!-- end col-->

                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="float-end">
                                    <div class="avatar-sm mx-auto mb-4">
                                        <span class="avatar-title rounded-circle bg-light font-size-24">
                                            <i class="mdi mdi-account-group text-primary"></i>
                                        </span>
                                    </div>
                                </div>
                                <div>
                                    <p class="text-muted text-uppercase fw-semibold">Total Staff</p>
                                    <h4 class="mb-1 mt-1"><span class="counter-value" data-target="{{$totalStaff}}">0</span></h4>
                                </div>
                                </p>
                            </div>
                        </div>
                    </div> <!-- end col-->

                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="float-end">
                                    <div class="avatar-sm mx-auto mb-4">
                                        <span class="avatar-title rounded-circle bg-light font-size-24">
                                            <i class="mdi mdi-cart-check text-success"></i>
                                        </span>
                                    </div>
                                </div>
                                <div>
                                    <p class="text-muted text-uppercase fw-semibold">Total Enquiry</p>
                                    <h4 class="mb-1 mt-1"><span class="counter-value" data-target="">0</span></h4>
                                </div>
                                </p>
                            </div>
                        </div>
                    </div> <!-- end col-->
                </div> <!-- end row-->


            </div>
            <!-- container-fluid -->
        </div>
@endsection