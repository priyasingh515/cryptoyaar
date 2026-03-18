@extends('backend.layouts.main')
@section('content')

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

         
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Plan Section</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item active">Plan List</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Plan List</h4>

                            <table id="datatable" class="table table-bordered dt-responsive w-100">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>User Name</th>
                                        <th>Plan Name</th>
                                        <th>Price</th>
                                        <th>Payment Id</th>
                                        <th>Expire Date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($plans as $plan)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $plan->user_name }}</td>
                                            <td>{{ $plan->plan_name }}</td>
                                            <td>₹{{ $plan->price }}</td>
                                            <td>{{ $plan->payment_id }}</td>
                                            <td>{{ \Carbon\Carbon::parse($plan->expire_at)->format('d-m-Y') }}</td>
                                            <td>
                                                @if($plan->status == 'paid')
                                                    <span class="badge bg-success">Paid</span>
                                                @elseif($plan->status == 'failed')
                                                    <span class="badge bg-danger">Failed</span>
                                                @else
                                                    <span class="badge bg-warning text-dark">Pending</span>
                                                @endif
                                            </td>

                                            <td>
                                                <a href="{{ route('plan.edit', $plan->id)}}"
                                                   class="btn btn-sm btn-warning">
                                                    Edit
                                                </a>

                                                {{-- <form action="{{route('plan.destroy' , $plan->id)}}"
                                                      method="post"
                                                      style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
            
                                                    <button class="btn btn-sm btn-danger"
                                                            onclick="return confirm('Are you sure?')">
                                                        Delete
                                                    </button>
                                                </form> --}}
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

@endsection
