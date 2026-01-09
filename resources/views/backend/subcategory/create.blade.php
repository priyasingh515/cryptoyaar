@extends('backend.layouts.main')
@section('content')

<div class="main-content">
<div class="page-content">
<div class="container-fluid">

<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Add Sub Category</h4>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <form action="{{ route('subcategory.store') }}" method="post">
                @csrf

                <div class="card-body">
                    <div class="row">

                        {{-- MAIN CATEGORY --}}
                        <div class="col-sm-4">
                            <label class="form-label">Category</label>
                            <select name="category_id" class="form-control">
                                <option value="">Select Category</option>
                                @foreach($categories as $cat)
                                    <option value="{{ $cat->id }}">
                                        {{ $cat->name }}
                                    </option>
                                @endforeach
                            </select>

                            @error('category_id')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- SUB CATEGORY NAME --}}
                        <div class="col-sm-6">
                            <label class="form-label">Sub Category Name</label>
                            <input class="form-control"
                                   name="name"
                                   type="text"
                                   placeholder="Enter Sub Category name"
                                   value="{{ old('name') }}">

                            @error('name')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- STATUS --}}
                        <div class="col-sm-3">
                            <label class="form-label">Status</label>
                            <select name="status" class="form-control">
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>

                        {{-- ORDER --}}
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
        </div>
    </div>
</div>

</div>
</div>
</div>

@endsection
