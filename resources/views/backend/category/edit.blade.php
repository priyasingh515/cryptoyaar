@extends('backend.layouts.main')
@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                <!-- Page Title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Edit Category</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item active">Edit Category</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Form -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">

                            <form action="{{ route('category.update', $category->id) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="row">

                                        <!-- Category Name -->
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Category Name</label>
                                            <input class="form-control" name="name" type="text"
                                                placeholder="Enter Category Name"
                                                value="{{ old('name', $category->name) }}">

                                            @error('name')
                                                <div class="text-danger mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>


                                        <!-- Category Image -->
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Category Image</label>

                                            <input type="file" name="category_image" class="form-control">

                                            @if ($category->category_image)
                                                <div class="mt-2">
                                                    <img src="{{ asset('uploads/category/' . $category->category_image) }}"
                                                        width="80" class="img-thumbnail">
                                                </div>
                                            @endif

                                            @error('category_image')
                                                <div class="text-danger mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>


                                        <!-- Status -->
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Status</label>
                                            <select name="status" class="form-control">

                                                <option value="1"
                                                    {{ old('status', $category->status) == 1 ? 'selected' : '' }}>
                                                    Active
                                                </option>

                                                <option value="0"
                                                    {{ old('status', $category->status) == 0 ? 'selected' : '' }}>
                                                    Inactive
                                                </option>

                                            </select>

                                            @error('status')
                                                <div class="text-danger mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>


                                        <!-- Become Expert Category -->
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Show in Become Expert</label>

                                            <select name="is_expert_category" class="form-control">

                                                <option value="0"
                                                    {{ old('is_expert_category', $category->is_expert_category) == 0 ? 'selected' : '' }}>
                                                    No
                                                </option>

                                                <option value="1"
                                                    {{ old('is_expert_category', $category->is_expert_category) == 1 ? 'selected' : '' }}>
                                                    Yes
                                                </option>

                                            </select>

                                            @error('is_expert_category')
                                                <div class="text-danger mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>

                                    </div>


                                    <button type="submit" class="btn btn-success mt-3">
                                        Update
                                    </button>

                                    <a href="{{ route('category.index') }}" class="btn btn-secondary mt-3">
                                        Back
                                    </a>

                                </div>
                            </form>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
