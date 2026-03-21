@extends('backend.layouts.main')

@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <!-- PAGE TITLE -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex justify-content-between align-items-center">
                        <h4 class="mb-0">Users Section</h4>
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item active">Users List</li>
                        </ol>
                    </div>
                </div>
            </div>

            <!-- TABLE -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <a href="{{ route('user.add') }}" class="btn btn-primary mb-3">
                                + Add User
                            </a>

                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name (Tree)</th>
                                        <th>Parent</th>
                                        <th>Referral Code</th>
                                        <th>Wallet</th>
                                        <th>Status</th>
                                        <th width="200">Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($users as $user)
                                        @if (!$user->parent_id)
                                            @include('backend.partials.user-row', [
                                                'user' => $user,
                                                'level' => 1
                                            ])
                                        @endif
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

<script>
function confirmDelete(id) {
    Swal.fire({
        title: 'Are you sure?',
        text: "User will be deleted!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!',
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('delete-form-' + id).submit();
        }
    });
}
</script>
@endsection