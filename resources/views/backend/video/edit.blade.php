@extends('backend.layouts.main')
@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                <h4 class="mb-4">Edit Video</h4>

                <div class="card">
                    <form id="videoUpdateForm" action="{{ route('admin.videos.update', $video->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="card-body">
                            <div class="row">

                                {{-- TITLE --}}
                                <div class="mb-3 col-md-6">
                                    <label>Video Title</label>
                                    <input type="text" name="title" class="form-control" value="{{ $video->title }}"
                                        required>
                                </div>

                                {{-- CATEGORY --}}
                                <div class="mb-3 col-md-6">
                                    <label>Category</label>
                                    <select name="category_id" id="category" class="form-control">

                                        <option value="">Select Category</option>

                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}"
                                                {{ $video->category_id == $category->id ? 'selected' : '' }}>

                                                {{ $category->name }}

                                            </option>
                                        @endforeach

                                    </select>
                                </div>


                                <div class="mb-3 col-md-6" id="subCategoryBox">
                                    <label>Sub Category</label>

                                    <select name="subcategory_id" id="subcategory" class="form-control">

                                        <option value="">Select Sub Category</option>

                                    </select>

                                </div>


                                <div class="mb-3 col-md-6" id="superSubCategoryBox">
                                    <label>Super Sub Category</label>

                                    <select name="super_subcategory_id" id="super_subcategory" class="form-control">

                                        <option value="">Select Super Sub Category</option>

                                    </select>

                                </div>

                                {{-- DESCRIPTION --}}
                                <div class="mb-3 col-md-6">
                                    <label>Description</label>
                                    <textarea name="description" class="form-control" rows="3">{{ $video->description }}</textarea>
                                </div>

                                {{-- REPLACE VIDEO --}}
                                <div class="mb-3 col-md-6 text-center">
                                    <label>Replace Video</label>
                                    <input type="file" name="video" class="form-control">
                                    {{-- <span class="me-2">{{ $video->views }}</span> --}}
                                    <button class="btn btn-link text-primary p-0 play-video"
                                        data-video="{{ asset('storage/' . $video->video_path) }}"
                                        data-title="{{ $video->title }}">
                                        <i class="bx bx-play-circle font-size-22"></i>
                                    </button>

                                </div>

                                <div class="mb-3 col-md-6">
                                    <label>thumbnail image</label>
                                    <input type="file" name="thumbnail" class="form-control">
                                    <img src="{{ asset('storage/' . $video->thumbnail) }}" alt="" height="50">
                                </div>

                                {{-- VIDEO TYPE --}}
                                <div class="mb-3 col-md-6">
                                    <label>Video Type</label>
                                    <select name="is_free" id="is_free" class="form-control">
                                        <option value="1" {{ $video->is_free ? 'selected' : '' }}>Free</option>
                                        <option value="0" {{ !$video->is_free ? 'selected' : '' }}>Paid</option>
                                    </select>
                                </div>

                                {{-- PLAN --}}
                                <div class="mb-3 col-md-6" id="planBox"
                                    style="{{ $video->is_free ? 'display:none;' : '' }}">
                                    <label>Subscription Plan</label>
                                    <select name="plan_id" class="form-control">
                                        @foreach ($plans as $plan)
                                            <option value="{{ $plan->id }}"
                                                {{ $video->plan_id == $plan->id ? 'selected' : '' }}>
                                                {{ $plan->plan_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                {{-- STATUS TOGGLE --}}
                                <div class="mb-3 col-md-6">
                                    <label class="d-block">Video Status</label>

                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="statusToggle"
                                            {{ $video->status ? 'checked' : '' }}>

                                        <label class="form-check-label" for="statusToggle">
                                            <span id="statusText">
                                                {{ $video->status ? 'Active' : 'Inactive' }}
                                            </span>
                                        </label>
                                    </div>

                                    {{-- hidden input for form submit --}}
                                    <input type="hidden" name="status" id="statusInput" value="{{ $video->status }}">
                                </div>

                            </div>
                        </div>

                        <div class="card-footer text-end">
                            <button class="btn btn-primary">Update Video</button>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>

    {{-- UPLOAD MODAL --}}
    <div class="modal fade" id="uploadModal" tabindex="-1" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content text-center p-4">

                <div id="statusIcon" style="font-size:48px; display:none;" class="text-success">✔</div>

                <h5 class="mb-2" id="uploadStatus">Updating...</h5>

                <div style="font-size:28px;font-weight:600;" id="uploadPercent">0%</div>

                <div class="progress mt-3" style="height:8px;">
                    <div class="progress-bar" id="uploadBar" style="width:0%"></div>
                </div>

            </div>
        </div>
    </div>

    {{-- SCRIPT --}}
    <script>
        // FREE / PAID TOGGLE
        document.getElementById('is_free').addEventListener('change', function() {
            document.getElementById('planBox').style.display =
                this.value == 0 ? 'block' : 'none';
        });

        // STATUS TOGGLE
        let statusToggle = document.getElementById('statusToggle');
        let statusInput = document.getElementById('statusInput');
        let statusText = document.getElementById('statusText');

        statusToggle.addEventListener('change', function() {
            if (this.checked) {
                statusInput.value = 1;
                statusText.innerText = 'Active';
            } else {
                statusInput.value = 0;
                statusText.innerText = 'Inactive';
            }
        });

        // FORM SUBMIT WITH PROGRESS
        document.getElementById('videoUpdateForm').addEventListener('submit', function(e) {
            e.preventDefault();

            let modal = new bootstrap.Modal(document.getElementById('uploadModal'));
            let percent = document.getElementById('uploadPercent');
            let bar = document.getElementById('uploadBar');
            let text = document.getElementById('uploadStatus');
            let icon = document.getElementById('statusIcon');

            modal.show();

            let xhr = new XMLHttpRequest();
            xhr.open('POST', this.action, true);
            xhr.setRequestHeader('X-CSRF-TOKEN', '{{ csrf_token() }}');

            xhr.upload.onprogress = function(e) {
                if (e.lengthComputable) {
                    let p = Math.round((e.loaded / e.total) * 100);
                    percent.innerText = p + '%';
                    bar.style.width = p + '%';
                }
            };

            xhr.onload = function() {
                if (xhr.status === 200) {
                    text.innerText = 'Updated';
                    percent.style.display = 'none';
                    bar.style.display = 'none';
                    icon.style.display = 'block';

                    setTimeout(() => {
                        window.location.href = "{{ route('admin.videos.index') }}";
                    }, 900);
                }
            };

            xhr.send(new FormData(e.target));
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        let selectedSub = "{{ $video->subcategory_id }}";
        let selectedSuper = "{{ $video->super_subcategory_id }}";

        $(document).ready(function() {

            let category_id = $('#category').val();

            if (category_id) {

                $('#subCategoryBox').show();

                $.get('/admin/get-subcategories/' + category_id, function(data) {

                    let html = '<option value="">Select Sub Category</option>';

                    data.forEach(function(item) {

                        let selected = selectedSub == item.id ? 'selected' : '';

                        html += '<option value="' + item.id + '" ' + selected + '>' + item.name +
                            '</option>';

                    });

                    $('#subcategory').html(html);

                    if (selectedSub) {
                        loadSuperSub(selectedSub);
                    }

                });

            }

        });


        // Subcategory change

        $('#subcategory').on('change', function() {

            let sub_id = $(this).val();

            loadSuperSub(sub_id);

        });



        // Super Sub Category load function

        function loadSuperSub(sub_id) {

            if (sub_id) {

                $('#superSubCategoryBox').show();

                $.get('/admin/get-super-subcategories/' + sub_id, function(data) {

                    let html = '<option value="">Select Super Sub Category</option>';

                    data.forEach(function(item) {

                        let selected = selectedSuper == item.id ? 'selected' : '';

                        html += '<option value="' + item.id + '" ' + selected + '>' + item.name +
                            '</option>';

                    });

                    $('#super_subcategory').html(html);

                });

            }

        }
    </script>
@endsection
