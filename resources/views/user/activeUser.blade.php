@extends("layout/master-header")
@section('title') {{"Active uesrs"}} @endsection
@section('content')
<!-- Bread crumb and right sidebar toggle -->
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title text-white text-shadow fs-2">All Videos </h4>
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
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                </select>
            </div>
        </div>
    </div>
    <!-- end catagory selector and filtering -->
    <table class=" table  table-striped text-white text-center auto-counter table-responsive box-shadow">
        <thead>
            <tr class="text-white text-center">
                <th class="text-white">S&period;I</th>
                <th class="text-white">Video title</th>
                <th class="text-white">Include</th>
                <th class="text-white">Course</th>
                <th class="text-white">Video</th>
                <th class="text-white">Action</th>
            </tr>
        </thead>
        <tbody id="content" class="text-white">
            <tr>
                <td>
                    <div class="counter"></div>
                </td>
                <td>This is a title</td>
                <td class="text-capitalize">paid</td>
                <td class="text-capitalize">Reactjs</td>
                <td>
                    <div data-aos="flip-right" data-aos-delay="500" data-aos-duration="1000">
                        <button data-bs-toggle="modal" data-bs-target="#video1" type="button"
                            class="btn btn-light p-2 pt-0 pb-0 fs-1 text-primary">
                            <i class="fas fa fa-video"></i>
                        </button>
                        <div class="text-secondary d-block">28&sol;03&sol;2022</div>
                    </div>
                </td>
                <td>
                    <div class="d-flex justify-content-between align-items-center">
                        <button type="button" class="btn btn-primary" data-aos="flip-left" data-aos-delay="500"
                            data-aos-duration="1000">Active</button>
                        <button type="button" class="btn btn-warning" data-aos="flip-right" data-aos-delay="500"
                            data-aos-duration="1000">Disabled</button>
                        <button type="button" class="btn btn-danger" data-aos="flip-left" data-aos-delay="500"
                            data-aos-duration="1000">Delete</button>
                    </div>
                </td>
            </tr>
        </tbody>
        <tfoot>
            <tr class=" text-white text-center">
                <th>S&period;I</th>
                <th>Video title</th>
                <th>Include</th>
                <th>Course</th>
                <th>Video</th>
                <th>Action</th>
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
<!-- modal start -->
<div class="modal fade" id="video1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title ">Video title here...</h3>
                <button type="button" class="btn-close " data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <video class="w-100 box-shadow-none" src="{{url('storage/videos/1.mp4')}}" controls
                        width="100%"></video>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- end modal -->
<!-- end pages -->
@endsection