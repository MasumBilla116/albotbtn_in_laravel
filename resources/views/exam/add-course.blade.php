@extends("layout/master-header")
@section('title') {{"Add new subject"}} @endsection
@section('content')
<!-- Bread crumb and right sidebar toggle -->
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title text-white text-shadow fs-2 text-capitalize">Add new course </h4>
            <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{action('App\Http\Controllers\usersController@dashboard')}}"
                                class="text-white">Home</a>
                        </li>
                        <li class="breadcrumb-item active text-white" aria-current="page">Add course</li>
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
    <form class="w-full" action="{{action('App\Http\Controllers\ExamController@storeCourse')}}" method="post">
        @csrf
        <!-- start subject and skill  -->
        <fieldset class="mb-4  box-shadow">
            <legend class="text-shadow text-capitalize">Course name &amp; submit</legend>
            <div class="row mb-4">
                <div class="col-lg-6">
                    <label for="course" class="text-white text-capitalize">Course name&colon;</label>
                    <input type="text" id="course" name="course" value="{{old('course')}}"
                        placeholder="Enter course name" class="form-control section-bg box-shadow border-primary">
                    @error('course')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="col-lg-6 pt-2">
                    <input type="submit" value="Submit" class="w-100 btn btn-primary box-shadow mt-4">
                </div>
            </div>
        </fieldset>
    </form>
    <div class="container p-4 rounded bg-secondary pt-2">
        @foreach($course as $row)
        <div class="badge rounded-pill bg-warning text-dark border border-dark mr-4 mt-4">{{$row->course_name}}</div>
        @endforeach
    </div>
</div>

</div>
@if(session("message"))
<div class="alert alert-warning alert-dismissible fade show position-fixed msg-alert" role="alert">
    <strong>{{session('message')}}</strong>
    {{session()->forget("message")}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
@endsection