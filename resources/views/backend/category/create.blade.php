@extends('backend.layouts.main')
@section('content')

 <div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
        
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Add Category</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                {{-- <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li> --}}
                                <li class="breadcrumb-item active">Add Category</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->
        
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <form action="{{ route('category.store') }}" method="post">
                            @csrf

                            <div class="card-body">
                                <div class="row">

                                    <div class="col-sm-6">
                                        <label class="form-label">Category Name</label>
                                        <input class="form-control"
                                            name="name"
                                            type="text"
                                            placeholder="Enter Category name"
                                            value="{{ old('name') }}">

                                        @error('name')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-sm-3">
                                        <label class="form-label">Status</label>
                                        <select name="status" class="form-control">
                                            <option value="1">Active</option>
                                            <option value="0">Inactive</option>
                                        </select>

                                        @error('status')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-sm-3">
                                        <label class="form-label">Order</label>
                                        <input type="number" name="order" class="form-control"
                                            value="{{ old('order', 0) }}">
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
