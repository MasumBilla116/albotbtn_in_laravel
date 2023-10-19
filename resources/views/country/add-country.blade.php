@extends("layout/master-header")
@section('title') {{"Add country"}} @endsection
@section('content')
<!-- Bread crumb and right sidebar toggle -->
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title text-white text-shadow fs-2 text-capitalize">Add new country </h4>
            <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a
                                href="{{action('App\Http\Controllers\usersController@dashboard')}}"
                                class="text-white">Home</a></li>
                        <li class="breadcrumb-item active text-white" aria-current="page">Add</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<hr />
<!-- End Bread crumb and right sidebar toggle -->
<!-- Start pages -->
<div class="container">
    <form class="w-full" action="#" method="#" enctype="multipart/form-data">
        <!-- start subject and skill  -->
        <fieldset class="mb-4  box-shadow">
            <legend class="text-shadow text-capitalize">Country name &amp; submit</legend>
            <div class="row mb-4">
                <div class="col-lg-6">
                    <label for="country" class="text-white text-capitalize">country name&colon;</label>
                    <input type="text" id="country" name="country" value="" placeholder="Enter country name"
                        class="form-control section-bg box-shadow border-primary">
                </div>
                <div class="col-lg-6 pt-2">
                    <input type="submit" value="Submit" class="w-100 btn btn-primary box-shadow mt-4">
                </div>
            </div>
        </fieldset>

    </form>
</div>
</div>
@endsection