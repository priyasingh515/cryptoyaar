@extends('backend.layouts.main')
@section('content')

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <h4 class="mb-4">Edit Member</h4>

            <div class="card">
                <form action="{{ route('members.update', $member->id) }}" method="post">
                    @csrf

                    <div class="card-body">
                        <div class="row">

                            <div class="mb-3 col-md-6">
                                <label>Name</label>
                                <input type="text"
                                       name="name"
                                       class="form-control"
                                       value="{{ $member->name }}">
                            </div>

                            <div class="mb-3 col-md-6">
                                <label>Email</label>
                                <input type="email"
                                       name="email"
                                       class="form-control"
                                       value="{{ $member->email }}">
                            </div>

                            <div class="mb-3 col-md-6">
                                <label>Password (leave blank to keep same)</label>
                                <input type="password"
                                       name="password"
                                       class="form-control">
                            </div>

                            <div class="mb-3 col-md-6">
                                <label>Role</label>
                                <select name="role_id" class="form-control">
                                    @foreach($roles as $role)
                                        <option value="{{ $role->id }}"
                                            {{ $member->role_id == $role->id ? 'selected' : '' }}>
                                            {{ $role->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                        </div>
                    </div>

                    <button class="btn btn-primary">Update Member</button>
                </form>
            </div>

        </div>
    </div>
</div>

@endsection
