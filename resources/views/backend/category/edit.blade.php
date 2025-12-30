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

                        <form action="{{ route('category.update', $category->id) }}" method="post">
                            @csrf

                            <div class="card-body">
                                <div class="row">

                                    <!-- Category Name -->
                                    <div class="col-sm-6">
                                        <label class="form-label">Category Name</label>
                                        <input class="form-control"
                                               name="name"
                                               type="text"
                                               placeholder="Enter Category name"
                                               value="{{ old('name', $category->name) }}">

                                        @error('name')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Status -->
                                    <div class="col-sm-3">
                                        <label class="form-label">Status</label>
                                        <select name="status" class="form-control">
                                            <option value="1" {{ old('status', $category->status) == 1 ? 'selected' : '' }}>
                                                Active
                                            </option>
                                            <option value="0" {{ old('status', $category->status) == 0 ? 'selected' : '' }}>
                                                Inactive
                                            </option>
                                        </select>

                                        @error('status')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Order -->
                                    <div class="col-sm-3">
                                        <label class="form-label">Order</label>
                                        <input type="number"
                                               name="order"
                                               class="form-control"
                                               value="{{ old('order', $category->order) }}">
                                    </div>

                                </div>

                                <button type="submit" class="btn btn-success mt-3">
                                    Update
                                </button>

                                <a href="{{ route('category.index') }}"
                                   class="btn btn-secondary mt-3">
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
