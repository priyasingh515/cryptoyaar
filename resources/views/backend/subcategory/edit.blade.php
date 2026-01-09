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
                        <form action="{{ route('subcategory.update',$subCategory->id) }}" method="post">
                            @csrf

                            <div class="card-body">
                                <div class="row">

                                    <div class="col-sm-4">
                                        <label>Main Category</label>
                                        <select name="category_id" class="form-control">
                                            @foreach($categories as $cat)
                                                <option value="{{ $cat->id }}"
                                                    {{ $subCategory->category_id == $cat->id ? 'selected' : '' }}>
                                                    {{ $cat->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-sm-6">
                                        <label>Sub Category Name</label>
                                        <input type="text"
                                            name="name"
                                            class="form-control"
                                            value="{{ $subCategory->name }}">
                                    </div>

                                    <div class="col-sm-3">
                                        <label>Status</label>
                                        <select name="status" class="form-control">
                                            <option value="1" {{ $subCategory->status ? 'selected' : '' }}>Active</option>
                                            <option value="0" {{ !$subCategory->status ? 'selected' : '' }}>Inactive</option>
                                        </select>
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
