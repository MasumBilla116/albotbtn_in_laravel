@extends("layout/master-header")
@section("title") {{"all question"}} @endsection
@section('content')
<!-- Bread crumb and right sidebar toggle -->
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title text-white text-shadow fs-2 text-capitalize">All question </h4>
            <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a
                                href="{{action('App\Http\Controllers\usersController@dashboard')}}"
                                class="text-white">Home</a></li>
                        <li class="breadcrumb-item active text-white" aria-current="page">All question and ans</li>
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
                        class="col  box-shadow rounde  p-2 pt-2 pb-1 text-center bg-danger d-flex justify-content-center align-items-center">
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
                    <option value="english">Eglishn</option>
                    <option value="physics">Physics</option>
                </select>
            </div>
        </div>
    </div>
    <!-- end catagory selector and filtering -->
    <table class="table table-striped text-white text-center auto-counter table-responsive box-shadow">
        <thead class="text-white text-center">
            <tr class="text-white text-center">
                <th class="text-white">S&period;I</th>
                <th class="text-white">Subject</th>
                <th class="text-white">Question</th>
                <th class="text-white">Option A</th>
                <th class="text-white">Option B</th>
                <th class="text-white">Option C</th>
                <th class="text-white">Option D</th>
                <th class="text-white">Action</th>
            </tr>
        </thead>
        <tbody id="content" class="text-white">
            @foreach($ques as $row)
            <tr>
                <td>
                    <div class="counter"></div>
                </td>
                <td class="text-capitalize">
                    <a href="#">{!!$row->course_name!!}</a>
                </td>
                <td class="text-capitalize text-start">
                    <a href="#}">
                        {!! $row->question !!}
                    </a>
                </td>
                @foreach($option as $op)
                @if($row->q_id == $op->question_id)
                <td>
                    <a href="#">
                        {!! $op->option !!}
                    </a>
                </td>
                @endif
                @endforeach
                <td>
                    <a href="{{action('App\Http\Controllers\ExamController@editQuestionAndAns',$row->q_id)}}"
                        class="btn btn-primary btn-sm rounded-circle mb-2">
                        <i class="fa fa-solid fa-pen"></i>
                    </a>
                    <button type="button" data-bs-toggle="modal" data-bs-target="#modal{{3124+$row->q_id+9875}}"
                        class="btn btn-warning btn-sm rounded-circle mb-2">
                        <i class="fas fa fa-thin fa-trash-can"></i>
                    </button>
                </td>

            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr class="text-white text-center">
                <th class="text-white">S&period;I</th>
                <th class="text-white">Subject</th>
                <th class="text-white">Question</th>
                <th class="text-white">Option A</th>
                <th class="text-white">Option B</th>
                <th class="text-white">Option C</th>
                <th class="text-white">Option D</th>
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
<!-- start delete modal -->
@foreach($ques as $row)
<div class="modal fade" id="modal{{3124+$row->q_id+9875}}">
    <form action="{{action('App\Http\Controllers\ExamController@deleteQuestion')}}" method="post">
        @csrf
        <input type="hidden" name="qid" value="{{$row->q_id}}" />
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
<!-- end delete modal -->
<!--  start video modal -->
<div class="modal fade" id="video1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title ">Video title here...</h3>
                <button type="button" class="btn-close " data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <video class="w-100 box-shadow-none" src="{{url('storage/videos/1.mp4')}}" controls width="100%">
                    </video>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- end video modal -->
@if(session("message"))
<div class="alert alert-warning alert-dismissible fade show position-fixed left-alert" role="alert">
    <strong>{{session('message')}}</strong>
    {{session()->forget("message")}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<!-- end pages -->

@endsection