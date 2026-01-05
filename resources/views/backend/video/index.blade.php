@extends('backend.layouts.main')
@section('content')

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Video Section</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item active">Video List</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Video List</h4>

                            <table id="datatable" class="table table-bordered dt-responsive w-100">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>Type</th>
                                        <th>Plan</th>
                                        <th>Play</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($videos as $video)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $video->title }}</td>
                                            <td>{{ $video->category->name ?? 'N/A' }}</td>
                                            <td>
                                                @if($video->is_free)
                                                    <span class="badge bg-success">Free</span>
                                                @else
                                                    <span class="badge bg-warning">Paid</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if(!$video->is_free && $video->plan)
                                                    {{ $video->plan->plan_name }}
                                                @else
                                                    <span class="text-muted">—</span>
                                                @endif
                                            </td>
                                            <td class="text-center">
                                                {{-- <span class="me-2">{{ $video->views }}</span> --}}
                                                <button class="btn btn-link text-primary p-0 play-video"
                                                    data-video="{{ asset('storage/'.$video->video_path) }}"
                                                    data-title="{{ $video->title }}">
                                                    <i class="bx bx-play-circle font-size-22"></i>
                                                </button>
                                            </td>
                                            <td>
                                                @if($video->status)
                                                    <span class="badge bg-success">Active</span>
                                                @else
                                                    <span class="badge bg-danger">Inactive</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.videos.edit', $video->id) }}"
                                                   class="btn btn-sm btn-warning">Edit</a>
                                                <form action="{{ route('admin.videos.destroy', $video->id) }}"
                                                      method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-sm btn-danger"
                                                            onclick="return confirm('Are you sure?')">
                                                        Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="videoModal" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="videoTitle"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body text-center">
                <video id="videoPlayer" width="100%" controls autoplay muted>
                    <source src="" id="videoSource">
                </video>
            </div>
        </div>
    </div>
</div>

<script>
document.querySelectorAll('.play-video').forEach(btn => {
    btn.addEventListener('click', function () {
        let video = document.getElementById('videoPlayer');
        document.getElementById('videoSource').src = this.dataset.video;
        document.getElementById('videoTitle').innerText = this.dataset.title;
        video.load();
        let modal = new bootstrap.Modal(document.getElementById('videoModal'));
        modal.show();
        setTimeout(() => { video.play().catch(() => {}); }, 300);
    });
});

document.getElementById('videoModal').addEventListener('hidden.bs.modal', function () {
    let video = document.getElementById('videoPlayer');
    video.pause();
    video.currentTime = 0;
});
</script>

@endsection
