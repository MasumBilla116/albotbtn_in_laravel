@extends("layout/master-header")
@section('title') {{"All uesrs"}} @endsection
@section('content')
<!-- Bread crumb and right sidebar toggle -->
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title text-white text-shadow fs-2 text-capitalize"> country &sol;
                {{$country}}
            </h4>
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
<!-- end catagory selector and filtering -->
<table class=" table  table-striped text-white text-center auto-counter table-responsive box-shadow">
    <thead>
        <tr class="text-white text-center">
            <th class="text-white">S&period;I</th>
            <th class="text-white">Country</th>
            <th class="text-white">Email</th>
            <th class="text-white">Designation</th>
            <th class="text-white">DoB</th>
            <th class="text-white">User</th>
            <th class="text-white">Action</th>
        </tr>
    </thead>
    <tbody id="content" class="text-white">
        <tr>
            <td>
                <div class="counter"></div>
            </td>
            <td>
                <a href="{{action('App\Http\Controllers\countryController@CountryWiseUser','Bangladesh')}}">
                    Bangladesh</a>
            </td>
            <td>masum@gmail.com</td>
            <td class="text-capitalize">user</td>
            <td class="text-capitalize">11&sol;06&sol;1999&sol;</td>
            <td>
                <div data-aos="flip-right" data-aos-delay="500" data-aos-duration="1000">
                    <button data-bs-toggle="modal" data-bs-target="#video1" type="button"
                        class="btn btn-light p-2 pt-0 pb-0 fs-1 text-primary">
                        <i class="fas fa fa-user"></i>
                    </button>
                    <div class="text-secondary d-block">Masum billa</div>
                </div>
            </td>
            <td>
                <div class="d-flex justify-content-between align-items-center">
                    <button type="button" class="btn btn-primary success-alert" data-aos="flip-left"
                        data-aos-delay="500" data-aos-duration="1000" data-alert="active">Active</button>
                    <button type="button" class="btn btn-warning  success-alert" data-alert="disabled"
                        data-aos="flip-right" data-aos-delay="500" data-aos-duration="1000">Disabled</button>
                    <button type="button" class="btn btn-danger success-alert" data-alert="delete" data-aos="flip-left"
                        data-aos-delay="500" data-aos-duration="1000">Delete</button>
                </div>
            </td>
        </tr>
    </tbody>
    <tfoot>
        <tr class="text-white text-center">
            <th class="text-white">S&period;I</th>
            <th class="text-white">Country</th>
            <th class="text-white">Email</th>
            <th class="text-white">Designation</th>
            <th class="text-white">DoB</th>
            <th class="text-white">User</th>
            <th class="text-white">Action</th>
        </tr>
    </tfoot>
</table>
</div>
<!-- paging start -->
<div class="container">
    <div class="row">
        <div class="col d-flex justify-content-end">
            <ul class="pagination">
                <li class="page-item">
                    <a href="#" class="page-link">&laquo;</a>
                </li>
                <li class="page-item"><a href="#" class="page-link">1</a></li>
                <li class="page-item"><a href="#" class="page-link">2</a></li>
                <li class="page-item"><a href="#" class="page-link">3</a></li>
                <li class="page-item"><a href="#" class="page-link">&raquo;</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- pageing end -->
@endsection