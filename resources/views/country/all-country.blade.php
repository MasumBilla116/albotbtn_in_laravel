@extends("layout/master-header")
@section('title') {{"Edit country"}} @endsection
@section('content')
<!-- Bread crumb and right sidebar toggle -->
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title text-white text-shadow fs-2 text-capitalize">Edit country </h4>
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
    <!-- start category selector  and filtering-->
    <div class="row mb-4">
        <div class="col-lg-5 col-md-5 col-sm-3 ">
            <div class="container">
                <div class="row gap-2 text-white">
                    <div
                        class="col box-shadow rounded p-2 pt-2 pb-1 text-center bg-warning d-flex justify-content-center align-items-center">
                        <h6>Users &lpar; 552 &rpar;</h6>
                    </div>
                    <div
                        class="col box-shadow rounde  p-2 pt-2 pb-1 text-center bg-primary d-flex justify-content-center align-items-center">
                        <h6>Videos &lpar; 552 &rpar;</h6>
                    </div>
                    <div
                        class="col box-shadow rounde  p-2 pt-2 pb-1 text-center bg-danger d-flex justify-content-center align-items-center">
                        <h6>Login &lpar; 552 &rpar;</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5 col-md-4 col-sm-3">
            <div class="d-flex justify-content-end ">
                <input type="text" class="form-control box-shadow w-100 filter" placeholder="Search your item"
                    data-target="content" />
            </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6">
            <div class="w-100 d-flex justify-content-end">
                <select name="category" id="cat-video" class="filter form-select box-shadow w-max-content"
                    data-target="content">
                    <option value="*">All</option>
                    <option value="bangladesh">Bangladesh</option>
                    <option value="india">India</option>
                </select>
            </div>
        </div>
    </div>
    <!-- end catagory selector and filtering -->
    <table class=" table  table-striped text-white text-center auto-counter table-responsive box-shadow">
        <thead>
            <tr class="text-white text-center">
                <th class="text-white">S&period;I</th>
                <th class="text-white">Country</th>
                <th class="text-white">Date</th>
                <th class="text-white">Action</th>
            </tr>
        </thead>
        <tbody id="content" class="text-white">
            <tr>
                <td>
                    <div class="counter"></div>
                </td>
                <td>
                    <a href="{{action('App\Http\Controllers\countryController@editCountry')}}">
                        Bangladesh
                    </a>
                </td>
                <td class="text-capitalize">11&sol;06&sol;1999&sol;</td>
                <td>
                    <div class="d-flex justify-content-between align-items-center">
                        <button type="button" class="btn btn-primary success-alert" data-alert="active"
                            data-aos="flip-left" data-aos-delay="500" data-aos-duration="1000">Active</button>
                        <button type="button" class="btn btn-warning success-alert" data-alert="disabled"
                            data-aos="flip-right" data-aos-delay="500" data-aos-duration="1000">Disabled</button>
                        <button type="button" class="btn btn-danger success-alert" data-alert="delete"
                            data-aos="flip-left" data-aos-delay="500" data-aos-duration="1000">Delete</button>
                    </div>
                </td>
            </tr>
        </tbody>
        <tfoot>
            <tr class="text-white text-center">
                <th class="text-white">S&period;I</th>
                <th class="text-white">Country</th>
                <th class="text-white">Date</th>
                <th class="text-white">Action</th>
            </tr>
        </tfoot>
    </table>
</div>
<!-- paging start -->
@endsection