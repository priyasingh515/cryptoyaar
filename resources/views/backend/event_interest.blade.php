@extends('backend.layouts.main')
@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Event Interested user</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                {{-- <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li> --}}
                                <li class="breadcrumb-item active">Event Interested User List</li>
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
                            <h4 class="card-title">Event Interested Users List</h4>
                            <table id="datatable" class="table table-bordered dt-responsive nowrap w-100">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Event Name</th>
                                    <th>Event Date</th>
                                    <th>Action</th>
                                </tr>
                                </thead>

                                <tbody>
                                    @foreach ($interestUsers as $item)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{ $item->user->name }}</td>
                                            <td>{{ $item->user->email }}</td>
                                            <td>{{ $item->user->phone }}</td>
                                            <td>{{ $item->event->title }}</td>
                                           <td>{{ \Carbon\Carbon::parse($item->event->event_date)->format('D d M Y h:i A') }}</td>
                                            
                                            <td>

                                                <button type="button"
                                                        class="btn btn-sm btn-danger"
                                                        onclick="">
                                                    <i class="bx bx-trash"></i>
                                                </button>

                                                {{-- <form id="delete-form-{{ $item->id }}"
                                                    action="{{ route('enquiry.destroy', $item->id) }}"
                                                    method="POST" style="display:none;">
                                                    @csrf
                                                    @method('DELETE')
                                                </form> --}}
                                            </td>
                                        </tr>

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
        function confirmDelete(id) {
            Swal.fire({
                title: 'Are you sure?',
                text: "This category will be deleted!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form-' + id).submit();
                }
            });
        }
    </script>

@endsection