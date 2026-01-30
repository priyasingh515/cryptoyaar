@extends('backend.layouts.main')
@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Creator Section</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                {{-- <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li> --}}
                                <li class="breadcrumb-item active">Creator Request List</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Creator Request</h4>
                            <table id="datatable" class="table table-bordered dt-responsive nowrap w-100">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Youtube Link</th>
                                    <th>Instagram Link</th>
                                    <th>Top video Link</th>
                                    <th>Action</th>
                                </tr>
                                </thead>

                                <tbody>
                                    @foreach ($creators as $item)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{ $item->user->name ?? '-' }}</td>
                                            <td>{{ $item->user->email ?? '-' }}</td>
                                            <td>{{ $item->user->phone ?? '-' }}</td>
                                            <td>{{$item->youtube_link}}</td>
                                            <td>{{$item->instagram_link}}</td>
                                            <td>{{$item->top_video_link}}</td>
                                            <td>
                                                <a href="javascript:void(0)"
                                                    class="btn btn-sm btn-warning"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#statusModal{{ $item->id }}">
                                                    Edit
                                                </a>
                                            </td>
                                        </tr>

                                        <div class="modal fade" id="statusModal{{ $item->id }}" tabindex="-1">
                                            <div class="modal-dialog">
                                                <form action="{{ route('creator.status.update', $item->id) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')

                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Update Creator Status</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                        </div>

                                                        <div class="modal-body">

                                                            <div class="mb-2">
                                                                <label>User</label>
                                                                <input type="text" class="form-control"
                                                                    value="{{ $item->user->name ?? '-' }}" readonly>
                                                            </div>

                                                            <div class="mb-2">
                                                                <label>Status</label>
                                                                <select name="status" class="form-control">
                                                                    <option value="pending" {{ $item->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                                                    <option value="approved" {{ $item->status == 'approved' ? 'selected' : '' }}>Approved</option>
                                                                    <option value="rejected" {{ $item->status == 'rejected' ? 'selected' : '' }}>Rejected</option>
                                                                </select>
                                                            </div>

                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-success">Update</button>
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                                Cancel
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                        <!-- end card-body -->
                    </div>
                    <!-- end card -->
                </div> <!-- end col -->
            </div> <!-- end row -->

            
        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const deleteButtons = document.querySelectorAll('.deleteBtn');

            deleteButtons.forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    const form = this.closest('form');

                    Swal.fire({
                        title: "Are you sure?",
                        text: "This record will be permanently deleted!",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#d33",
                        cancelButtonColor: "#3085d6",
                        confirmButtonText: "Yes, delete it!"
                    }).then((result) => {
                        if (result.isConfirmed) {
                            form.submit();
                        }
                    });
                });
            });
        });
    </script>

@endsection