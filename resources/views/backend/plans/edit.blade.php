@extends('backend.layouts.main')
@section('content')

    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                <h4 class="mb-4">Edit Plan</h4>

                <div class="card">
                    <form action="{{ route('plan.update', $plan->id) }}" method="post">
                        @csrf
                        @method('PUT')

                        <div class="card-body">
                            <div class="row">


                                <div class="mb-3 col-md-6">
                                    <label>Plan Name</label>
                                    <input type="text" name="plan_name" class="form-control"
                                        value="{{ $plan->plan_name }}" required>
                                </div>

                                <div class="mb-3 col-md-3">
                                    <label>Validity (Days)</label>
                                    <input type="number" name="validity" class="form-control" value="{{ $plan->validity }}"
                                        required>
                                </div>

                                <div class="mb-3 col-md-3">
                                    <label>Price</label>
                                    <input type="number" name="price" class="form-control" value="{{ $plan->price }}"
                                        required>
                                </div>


                                <div class="mb-3 col-md-12">
                                    <label>Plan Benefits</label>

                                    <div id="benefits-wrapper">

                                        @if (!empty($plan->benefits))
                                            @foreach ($plan->benefits as $benefit)
                                                <div class="d-flex mb-2 benefit-row">
                                                    <input type="text" name="benefits[]" class="form-control"
                                                        value="{{ $benefit }}" placeholder="Enter benefit">
                                                    <button type="button" class="btn btn-danger ms-2"
                                                        onclick="removeBenefit(this)">✕</button>
                                                </div>
                                            @endforeach
                                        @else
                                            <div class="d-flex mb-2 benefit-row">
                                                <input type="text" name="benefits[]" class="form-control"
                                                    placeholder="Enter benefit">
                                                <button type="button" class="btn btn-danger ms-2"
                                                    onclick="removeBenefit(this)">✕</button>
                                            </div>
                                        @endif

                                    </div>

                                    <button type="button" class="btn btn-sm btn-success mt-2" onclick="addBenefit()">
                                        + Add Benefit
                                    </button>
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label class="d-block">Plan Status</label>

                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="statusSwitch" name="status"
                                            value="active" {{ $plan->status === 'active' ? 'checked' : '' }}>

                                        <label class="form-check-label" for="statusSwitch">
                                            {{ $plan->status === 'active' ? 'Active' : 'Inactive' }}
                                        </label>
                                    </div>
                                </div>


                            </div>
                        </div>

                        <div class="card-footer text-end">
                            <button class="btn btn-primary">
                                Update Plan
                            </button>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>

    <script>
        function addBenefit() {
            let wrapper = document.getElementById('benefits-wrapper');

            let div = document.createElement('div');
            div.classList.add('d-flex', 'mb-2', 'benefit-row');

            div.innerHTML = `
        <input type="text" name="benefits[]" class="form-control" placeholder="Enter benefit">
        <button type="button" class="btn btn-danger ms-2" onclick="removeBenefit(this)">✕</button>
    `;

            wrapper.appendChild(div);
        }

        function removeBenefit(button) {
            button.parentElement.remove();
        }
    </script>

@endsection
