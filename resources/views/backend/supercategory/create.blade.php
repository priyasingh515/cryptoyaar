    
@extends('backend.layouts.main')
@section('content')

<div class="main-content">
<div class="page-content">
<div class="container-fluid">

<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Add Super Sub Category</h4>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <form action="{{ route('supersubcategory.store') }}" method="post">
                @csrf

                <div class="card-body">
                    <div class="row">

                        <div class="col-sm-4">
                            <label class="form-label">Sub Category</label>
                            <select name="sub_category_id" class="form-control">
                                <option value="">Select Sub Category</option>
                                @foreach($subCategories as $sub)
                                    <option value="{{ $sub->id }}">{{ $sub->name }}</option>
                                @endforeach
                            </select>

                            @error('sub_category_id')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-sm-6">
                            <label class="form-label">Super Sub Category Name</label>
                            <input type="text"
                                name="name"
                                class="form-control"
                                placeholder="Enter Super Sub Category"
                                value="{{ old('name') }}">

                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-sm-3">
                            <label>Status</label>
                            <select name="status" class="form-control">
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>

                        <div class="col-sm-3">
                            <label>Order</label>
                            <input type="number" name="order" class="form-control" value="0">
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
  
    


