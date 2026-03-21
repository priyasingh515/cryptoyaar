@extends('backend.layouts.main')
@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Users Section</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    {{-- <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li> --}}
                                    <li class="breadcrumb-item active">Edit User</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Edit User</h4>
                                <form action="{{ route('user.update', $user->id) }}" class="row" method="POST">
                                    @csrf
                                    @method('PUT')

                                    <div class="mb-3 col-md-6">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            value="{{ $user->name }}" required>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            value="{{ $user->email }}" required>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="phone" class="form-label">Phone</label>
                                        <input type="text" class="form-control" id="phone" name="phone"
                                            value="{{ $user->phone }}">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="occupation" class="form-label">Occupation</label>
                                        <input type="text" class="form-control" id="occupation" name="occupation"
                                            value="{{ $user->occupation }}">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="referred_by" class="form-label">Referred By</label>
                                        <input type="text" class="form-control" id="referred_by" name="referred_by"
                                            value="{{ $user->referred_by }}" required>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password" name="password" required>
                                    </div>

                                    <div class="row">
                                        <button type="button" class="btn btn-secondary col-md-2 me-2"
                                            onclick="window.location.href='{{ route('userlist') }}'">Cancel</button>
                                        <button type="submit" class="btn btn-primary col-md-2">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
