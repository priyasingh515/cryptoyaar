@extends('backend.layouts.main')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                <h4 class="mb-4">Add Video</h4>

                <div class="card">
                    <form id="videoUploadForm" action="{{ route('admin.videos.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="card-body">
                            <div class="row">

                                <div class="mb-3 col-md-6">
                                    <label>Video Title</label>
                                    <input type="text" name="title" class="form-control" placeholder="Enter video Title" required>
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label>Category</label>
                                    <select name="category_id" id="category" class="form-control">
                                        <option value="">Select Category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>


                                <div class="mb-3 col-md-6" id="subCategoryBox" style="display:none;">
                                    <label>Sub Category</label>
                                    <select name="subcategory_id" id="subcategory" class="form-control">
                                        <option value="">Select Sub Category</option>
                                    </select>
                                </div>


                                <div class="mb-3 col-md-6" id="superSubCategoryBox" style="display:none;">
                                    <label>Super Sub Category</label>
                                    <select name="super_subcategory_id" id="super_subcategory" class="form-control">
                                        <option value="">Select Super Sub Category</option>
                                    </select>
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label>Description</label>
                                    <textarea name="description" class="form-control"></textarea>
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label>keywords</label>
                                    <input type="text" name="keywords" class="form-control"
                                        placeholder="ex: dance, hip hop, tutorial">
                                    <small>Comma separated keywords</small>
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label>Video File</label>
                                    <input type="file" name="video" class="form-control" required>
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label>thumbnail Image</label>
                                    <input type="file" name="thumbnail" class="form-control" required>
                                </div>

                                

                                <div class="mb-3 col-md-6">
                                    <label>Video Type</label>
                                    <select name="is_free" id="is_free" class="form-control">
                                        <option value="1">Free</option>
                                        <option value="0">Paid</option>
                                    </select>
                                </div>

                                <div class="mb-3 col-md-6" id="planBox" style="display:none;">
                                    <label>Subscription Plan</label>
                                    <select name="plan_id" class="form-control">
                                        @foreach ($plans as $plan)
                                            <option value="{{ $plan->id }}">{{ $plan->plan_name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label>Publish Date</label>
                                    <input type="datetime-local" name="publish_at" class="form-control" required>
                                </div>
                                 
                            </div>
                        </div>

                        <div class="card-footer text-end">
                            <button class="btn btn-primary">Upload Video</button>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="uploadModal" tabindex="-1" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content text-center p-4">

                <div id="statusIcon" style="font-size:48px; display:none;" class="text-success">✔</div>

                <h5 class="mb-2" id="uploadStatus">Uploading...</h5>

                <div style="font-size:28px;font-weight:600;" id="uploadPercent">0%</div>

                <div class="progress mt-3" style="height:8px;">
                    <div class="progress-bar" id="uploadBar" style="width:0%"></div>
                </div>

            </div>
        </div>
    </div>

    <script>
        document.getElementById('is_free').addEventListener('change', function() {
            document.getElementById('planBox').style.display = this.value == 0 ? 'block' : 'none';
        });

        document.getElementById('videoUploadForm').addEventListener('submit', function(e) {
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
                    text.innerText = 'Uploaded';
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
        $('#category').change(function(){

            let category_id = $(this).val();

            if(category_id != ''){
                $('#subCategoryBox').show();

                $.get('/admin/get-subcategories/'+category_id,function(data){

                    let html = '<option value="">Select</option>';

                    data.forEach(function(item){

                        html += '<option value="'+item.id+'">'+item.name+'</option>';

                    });

                    $('#subcategory').html(html);

                });
            }

        });

        $('#subcategory').change(function(){

            let sub_id = $(this).val();

            if(sub_id != ''){
                $('#superSubCategoryBox').show();

                $.get('/admin/get-super-subcategories/'+sub_id,function(data){

                    let html = '<option value="">Select</option>';

                    data.forEach(function(item){

                        html += '<option value="'+item.id+'">'+item.name+'</option>';

                    });

                    $('#super_subcategory').html(html);

                });
            }

        });
    </script>
@endsection
