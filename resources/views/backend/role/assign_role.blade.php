@extends('backend.layouts.main')
@section('content')

 <div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
        
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Add Role</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                {{-- <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li> --}}
                                <li class="breadcrumb-item active">Add Role</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->
        
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <h4 class="mb-3">
                            Assign Permissions to:
                            <span class="text-primary">{{ $role->name }}</span>
                        </h4>

                        <form action="{{ route('roles.permissions.save', $role->id) }}" method="post">
                            @csrf

                            @foreach($permissions as $module => $modulePermissions)

                                <div class="card mb-3">
                                    <div class="card-header text-capitalize fw-bold">
                                        {{ $module }}
                                    </div>

                                    <div class="card-body">
                                        <div class="row">

                                            @foreach($modulePermissions as $permission)
                                                <div class="col-md-4 mb-2">
                                                    <div class="form-check">
                                                        <input
                                                            class="form-check-input"
                                                            type="checkbox"
                                                            name="permissions[]"
                                                            value="{{ $permission->id }}"
                                                            id="perm{{ $permission->id }}"
                                                            {{ in_array($permission->id, $assignedPermissions) ? 'checked' : '' }}
                                                        >
                                                        <label class="form-check-label"
                                                            for="perm{{ $permission->id }}">
                                                            {{ $permission->name }}
                                                        </label>
                                                    </div>
                                                </div>
                                            @endforeach

                                        </div>
                                    </div>
                                </div>

                            @endforeach

                            <button type="submit" class="btn btn-primary">
                                Save Permissions
                            </button>

                        </form>

                    </div>
                    </div> <!-- end col -->
                </div>
            </div>
            <!-- end row -->
        </div> 
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->


@endsection
