@extends('backend.layouts.main')
@section('content')

 <div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
        
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Add Event</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                {{-- <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li> --}}
                                <li class="breadcrumb-item active">Add Event</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->
        
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <form action="{{ route('event.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6 mb-3">
                                        <label class="form-label">Title</label>
                                        <input class="form-control"
                                            name="title"
                                            type="text"
                                            placeholder="Enter Category name"
                                            value="{{ old('title') }}">

                                        @error('title')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-sm-6 mb-3">
                                        <label>Event  Image</label>
                                        <input type="file" name="image" class="form-control">
                                        <small class="text-muted">
                                            Allowed: JPG, PNG, WEBP ,
                                            Recommended size: 200x200 px ,
                                            Max size: 500KB
                                        </small>
                                        @error('image')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label class="form-label">Event Date</label>
                                        <input class="form-control"
                                            name="event_date"
                                            type="datetime-local"
                                            placeholder="Enter Event Date"
                                            value="{{ old('event_date') }}">

                                        @error('event_date')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-sm-6 mb-3">
                                        <label class="form-label">Location</label>
                                        <input class="form-control"
                                            name="location"
                                            type="text"
                                            placeholder="Enter location iframe link"
                                            value="{{ old('location') }}">

                                        @error('location')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-sm-12 mb-3">
                                        <label class="form-label">Description</label>
                                        <textarea name="description" id="" class="form-control" cols="30" rows="10">{{ old('description') }}</textarea>
                                        @error('description')
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
