@extends('backend.layouts.main')
@section('content')

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <h4 class="mb-4">Edit Video</h4>

            <div class="card">
                <form id="videoUpdateForm"
                      action="{{ route('admin.videos.update', $video->id) }}"
                      method="POST"
                      enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="card-body">
                        <div class="row">

                            <div class="mb-3 col-md-6">
                                <label>Video Title</label>
                                <input type="text" name="title" class="form-control"
                                       value="{{ $video->title }}" required>
                            </div>

                            <div class="mb-3 col-md-6">
                                <label>Category</label>
                                <select name="category_id" class="form-control" required>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ $video->category_id == $category->id ? 'selected' : '' }}>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3 col-md-12">
                                <label>Description</label>
                                <textarea name="description" class="form-control">{{ $video->description }}</textarea>
                            </div>

                            <div class="mb-3 col-md-6">
                                <label>Replace Video</label>
                                <input type="file" name="video" class="form-control">
                            </div>

                            <div class="mb-3 col-md-6">
                                <label>Video Type</label>
                                <select name="is_free" id="is_free" class="form-control">
                                    <option value="1" {{ $video->is_free ? 'selected' : '' }}>Free</option>
                                    <option value="0" {{ !$video->is_free ? 'selected' : '' }}>Paid</option>
                                </select>
                            </div>

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

<script>
document.getElementById('is_free').addEventListener('change', function () {
    document.getElementById('planBox').style.display = this.value == 0 ? 'block' : 'none';
});

document.getElementById('videoUpdateForm').addEventListener('submit', function (e) {
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

    xhr.upload.onprogress = function (e) {
        if (e.lengthComputable) {
            let p = Math.round((e.loaded / e.total) * 100);
            percent.innerText = p + '%';
            bar.style.width = p + '%';
        }
    };

    xhr.onload = function () {
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

@endsection
