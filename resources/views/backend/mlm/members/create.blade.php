@extends('backend.layouts.main')
@section('content')

 <div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
        
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Add Member</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                {{-- <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li> --}}
                                <li class="breadcrumb-item active">Add Member</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->
        
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <form action="{{ route('roles.store') }}" method="post">
                            @csrf

                            <div class="card-body">
                                <div class="row">
                                 <div class="col-sm-6 mb-2">
                                        <label class="form-label">Member Name</label>
                                        <input class="form-control"
                                            name="name"
                                            type="text"
                                            placeholder="Enter role name"
                                            value="{{ old('name') }}">

                                        @error('name')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                 <div class="col-sm-6 mb-2">
                                        <label class="form-label">Plan</label>
                                        <input class="form-control"
                                            name="name"
                                            type="text"
                                            placeholder="Enter role name"
                                            value="{{ old('name') }}">

                                        @error('name')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>


                                   <div class="col-sm-6 mb-2">
                                        <label class="form-label">Joining Date</label>
                                        <input class="form-control"
                                            name="name"
                                            type="text"
                                            placeholder="Enter role name"
                                            value="{{ old('name') }}">

                                        @error('name')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-sm-6 mb-2">
                                        <label class="form-label">Reference ID</label>
                                        <input class="form-control"
                                            name="name"
                                            type="text"
                                            placeholder="Enter role name"
                                            value="{{ old('name') }}">

                                        @error('name')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary mt-3">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div> <!-- end col -->
                </div>
            </div>
            <!-- end row -->
        </div> 
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->


@endsection
