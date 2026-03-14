@extends('backend.layouts.main')
@section('content')

 <div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
        
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Update Faq</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                {{-- <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li> --}}
                                <li class="breadcrumb-item active">Update Faq</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->
        
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <form action="{{ route('faq.update',$faq->id) }}" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6 mb-3">
                                        <label class="form-label">Question</label>
                                        <input class="form-control"
                                            name="question"
                                            type="text"
                                            placeholder="Enter Category name"
                                            value="{{ old('question',$faq->question) }}">

                                        @error('question')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label class="form-label">Answer</label>
                                        <input class="form-control"
                                            name="answer"
                                            type="text"
                                            placeholder="Enter Category name"
                                            value="{{ old('answer',$faq->answer) }}">

                                        @error('answer')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                </div>

                                <button type="submit" class="btn btn-primary mt-3">
                                    Update
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
