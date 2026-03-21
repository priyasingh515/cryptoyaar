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
                                    <li class="breadcrumb-item active">Add User</li>
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
                                <h4 class="card-title">Add User</h4>
                                <form action="{{ route('user.store') }}" class="row" method="POST">
                                    @csrf
                                    <div class="mb-3 col-md-6">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" required>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="phone" class="form-label">Phone</label>
                                        <input type="text" class="form-control" id="phone" name="phone">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="occupation" class="form-label">Occupation</label>
                                        <input type="text" class="form-control" id="occupation" name="occupation">
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
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Add Plan</h4>
                                <form action="{{ route('user.storeplan') }}" class="row" method="POST">
                                    @csrf
                                    <input type="text" name="user_id">
                                    <div class="mb-3 col-md-6">
                                        <label for="plan_id" class="form-label">Select Plan</label>
                                        <select class="form-control" id="plan_id" name="plan_id">
                                            <option value="">Select Plan</option>
                                            @foreach ($plan as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }} -
                                                    ₹{{ $item->price }}</option>
                                            @endforeach
                                        </select>
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
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Add Referrel</h4>
                                <form action="{{ route('user.store-referral') }}" class="row" method="POST">
                                    @csrf
                                    <input type="text" name="user_id">
                                    <div class="mb-3 col-md-6">
                                        <label for="referred_by" class="form-label">Referred By</label>
                                        <input type="text" class="form-control" id="referred_by" name="referred_by">
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
