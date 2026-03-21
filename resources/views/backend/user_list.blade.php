@extends('backend.layouts.main')
@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Users Section</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item active">Users List</li>
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

                            <a href="{{ route('user.add') }}" class="btn btn-primary mb-3">Add User</a>

                            <table id="datatable" class="table table-bordered dt-responsive nowrap w-100">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Referral Code</th>
                                    <th>Action</th>
                                </tr>
                                </thead>

                                <tbody>
                                    @forelse ($usersList as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->email }}</td>

                                            <td>{{ $item->phone }}</td>

                                            <td>{{ $item->referral_code ?? 'N/A' }}</td>

                                            <td>
                                                <button type="button"
                                                        class="btn btn-sm btn-info"
                                                        onclick="window.location.href='{{ route('user.edit', $item->id) }}'">
                                                    Edit
                                                </button>

                                                <button type="button"
                                                        class="btn btn-sm btn-danger"
                                                        onclick="confirmDelete({{ $item->id }})">
                                                    Delete
                                                </button>

                                                <form id="delete-form-{{ $item->id }}"
                                                      action="{{ route('user.destroy', $item->id) }}"
                                                      method="POST" style="display:none;">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-center">No Users Found</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script>
        function confirmDelete(id) {
            Swal.fire({
                title: 'Are you sure?',
                text: "User will be deleted!",
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