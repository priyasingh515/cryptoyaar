@extends('backend.layouts.main')
@section('content')

 <div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
        
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Add Permission</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                {{-- <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li> --}}
                                <li class="breadcrumb-item active">Add Permission</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->
        
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <form action="{{ route('members.store') }}" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="row">

                                    <div class="mb-3 col-md-6">
                                        <label>Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="Enter Full name">
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control"placeholder="Enter Email Address">
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control"placeholder="Set Password">
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label>Role</label>
                                        <select name="role_id" class="form-control">
                                            <option value="">Select Role</option>
                                            @foreach($roles as $role)
                                                <option value="{{ $role->id }}">
                                                    {{ $role->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary">Create Member</button>
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
