@extends('backend.layouts.main')
@section('content')

<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Add Plan</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item active">Add Plan</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            

            <div class="row">
                <div class="col-12">
                    <div class="card">

                        <form action="{{ route('plans.store') }}" method="POST">
                            @csrf

                            <div class="card-body">
                                <div class="row">

                                  
                                    <div class="mb-3 col-md-6">
                                        <label>Plan Name</label>
                                        <input type="text" name="plan_name" class="form-control"
                                            placeholder="Enter Plan Name" required>
                                    </div>

                                    
                                    <div class="mb-3 col-md-3">
                                        <label>Validity (Days)</label>
                                        <input type="number" name="validity" class="form-control"
                                            placeholder="e.g. 30" required>
                                    </div>

                                    
                                    <div class="mb-3 col-md-3">
                                        <label>Price</label>
                                        <input type="number" name="price" class="form-control"
                                            placeholder="e.g. 499" required>
                                    </div>

                                    <div class="mb-3 col-md-12">
                                        <label>Plan Benefits</label>

                                        <div id="benefits-wrapper">
                                            <div class="d-flex mb-2 benefit-row">
                                                <input type="text" name="benefits[]" class="form-control"
                                                    placeholder="Enter benefit">
                                                <button type="button"
                                                    class="btn btn-danger ms-2"
                                                    onclick="removeBenefit(this)">✕</button>
                                            </div>
                                        </div>

                                        <button type="button"
                                            class="btn btn-sm btn-success mt-2"
                                            onclick="addBenefit()">
                                            + Add Benefit
                                        </button>
                                    </div>

                                </div>
                            </div>

                            <div class="card-footer text-end">
                                <button class="btn btn-primary">
                                    Create Plan
                                </button>
                            </div>

                        </form>

                    </div>
                </div>
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
