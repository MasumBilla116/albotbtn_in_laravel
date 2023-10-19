@extends("layout/master-header")
@section("title")
{{"Video content list"}}
@endsection
@section("content")
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
                        <li class="breadcrumb-item active text-white" aria-current="page">All video</li>
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
                        class="col box-shadow rounded p-2 pt-2 pb-1 text-center bg-danger d-flex justify-content-center align-items-center">
                        <h6>Users &lpar; {{count($user)}} &rpar;</h6>
                    </div>
                    <div
                        class="col box-shadow rounde  p-2 pt-2 pb-1 text-center bg-primary d-flex justify-content-center align-items-center">
                        <h6>Videos &lpar; {{count($tutorial)}} &rpar;</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5 col-md-4 col-sm-3">
            <div class="d-flex justify-content-end ">
                <input type="text" class="form-control box-shadow w-100 filter border-primary"
                    placeholder="Search your item" data-target="content" />
            </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6">
            <div class="w-100 d-flex justify-content-end">
                <select name="category" id="cat-video" class="filter form-select box-shadow w-max-content"
                    data-target="content">
                    <option value="*">All</option>
                    @foreach($course as $row)
                    <option value="{{$row->course_name}}">{{$row->course_name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <!-- end catagory selector and filtering -->
    <table id="load-table"
        class=" table  table-striped text-white text-center auto-counter table-responsive box-shadow">
        <thead>
            <tr class="text-white text-center">
                <th class="text-white">S&period;I</th>
                <th class="text-white">Video title</th>
                <th class="text-white">Course</th>
                <th class="text-white">Video</th>
                <th class="text-white">Status</th>
                <th class="text-white">Action</th>
            </tr>
        </thead>
        <tbody id="content" class="text-white">
            @foreach($tutorial as $row)
            <tr>
                <td>
                    <div class="counter"></div>
                </td>
                <td>{{$row->title}}</td>
                <td class="text-capitalize">{{$row->course_name}}</td>
                <td>
                    <div>
                        <button data-bs-toggle="modal" data-bs-target="#v{{802+$row->t_id+564}}w" type="button"
                            class="btn btn-light p-2 pt-0 pb-0 fs-1 text-primary">
                            <i class="fas fa fa-video"></i>
                        </button>
                        <div class="text-secondary d-block">{{$row->created_at}}</div>
                    </div>
                </td>
                <td>
                    @if($row->status)
                    {{"active"}}
                    @else
                    {{"Disabled"}}
                    @endif
                </td>
                <td>
                    <div class="d-flex justify-content-between align-items-center">
                        <button type="button" class="btn btn-primary success-alert position-relative"
                            data-alert="active" data-target="{{$row->t_id}}" data-action="video">
                            Active
                        </button>
                        <button type="button" class="btn btn-warning success-alert" data-alert="disabled"
                            data-target="{{$row->t_id}}" data-action="video">Disabled</button>
                        <button type=" button" class="btn btn-danger success-alert" data-alert="delete"
                            data-target="{{$row->t_id}}" data-action="video">Delete</button>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr class=" text-white text-center">
                <th>S&period;I</th>
                <th>Video title</th>
                <th>Course</th>
                <th>Video</th>
                <th>Status</th>
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
@foreach($tutorial as $row)
<div class="modal fade" id="v{{802+$row->t_id+564}}w">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title ">{{$row->title}}</h3>
                <button type="button" class="btn-close " data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <video class="w-100 box-shadow-none" src="{{url($row->video_path)}}"
                        poster="{{url($row->thumnail)}}" controls width="100%"></video>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endforeach
<!-- end modal -->
<!-- end pages -->
@endsection