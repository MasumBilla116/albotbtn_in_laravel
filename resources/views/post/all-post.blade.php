@extends("layout/master-header")
@section("title") {{"All post"}} @endsection
@section('content')
<!-- Bread crumb and right sidebar toggle -->
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title text-white text-shadow fs-2">Edit </h4>
            <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a
                                href="{{action('App\Http\Controllers\usersController@dashboard')}}"
                                class="text-white">Home</a></li>
                        <li class="breadcrumb-item active text-white" aria-current="page">All post</li>
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
        <div class="col-lg-8 col-md-5 col-sm-3 ">
            <div class="container">
                <div class="row gap-2 text-white">
                    <div
                        class="col box-shadow rounded p-2 pt-2 pb-1 text-center bg-warning d-flex justify-content-center align-items-center">
                        <h6>Users &lpar; {{$user}} &rpar;</h6>
                    </div>
                    <div
                        class="col box-shadow rounde  p-2 pt-2 pb-1 text-center bg-primary d-flex justify-content-center align-items-center">
                        <h6>Videos &lpar; {{$tutorial}} &rpar;</h6>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-3">
            <div class="d-flex justify-content-end ">
                <input type="text" class="form-control box-shadow w-100 filter border-primary"
                    placeholder="Search your item" data-target="content" />
            </div>
        </div>
    </div>
    <!-- end catagory selector and filtering -->
    <table class="table table-striped text-white text-center auto-counter table-responsive box-shadow">
        <thead class="text-white text-center">
            <tr class=" text-white text-center">
                <th>S&period;I</th>
                <th>Date</th>
                <th>Post</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody id="content" class="text-white">
            @foreach($post as $row)
            <tr>
                <td>
                    <div class="counter"></div>
                </td>
                <td><a href="#"> {{$row->created_at}} </a>
                </td>
                <td>{!! $row->post !!}</td>
                <td>
                    <a href="{{action('App\Http\Controllers\postController@editePost',$row->id)}}"
                        class="btn btn-primary btn-sm rounded-circle mb-2">
                        <i class="fa fa-solid fa-pen"></i>
                    </a>
                    <button type="button" class="btn btn-warning btn-sm rounded-circle mb-2"
                        data-bs-target="#modal{{8795+$row->id+8569}}" data-bs-toggle="modal">
                        <i class="fas fa fa-thin fa-trash-can"></i>
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr class=" text-white text-center">
                <th>S&period;I</th>
                <th>Date</th>
                <th>Post</th>
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
<!-- modal section -->
@foreach($post as $row)
<div class="modal fade fade-out" id="modal{{8795+$row->id+8569}}">
    <form action="{{action('App\Http\Controllers\postController@deletePost')}}" method="post">
        @csrf
        <input type="hidden" name="pid" value="{{$row->id}}" />
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Are you sure delete this content</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <h2 class="text-danger text-center">Warning</h2>
                    <p class="text-danger text-center">Confirm delete this item</p>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger">Delete</button>
                    <button class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endforeach
<!-- end modal section -->
@if(session("message"))
<div class="alert alert-warning alert-dismissible fade show position-fixed left-alert" role="alert">
    <strong>{{session('message')}}</strong>
    {{session()->forget("message")}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<!-- end pages -->
@endsection