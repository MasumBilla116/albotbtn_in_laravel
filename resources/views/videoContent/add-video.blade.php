@extends("../layout/master-header")
@section('title')
{{"Tdesk | Add video content"}}
@endsection
@section('content')
<!-- Bread crumb and right sidebar toggle -->
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title text-white text-shadow fs-2">Add Videos </h4>
            <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a
                                href="{{action('App\Http\Controllers\usersController@dashboard')}}"
                                class="text-white">Home</a></li>
                        <li class="breadcrumb-item active text-white" aria-current="page">Add video</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<hr />
<!-- End Bread crumb and right sidebar toggle -->
<div class="container">
    <form class="w-full" action="{{action('App\Http\Controllers\VideoContentController@uploadVideo')}}" method="post"
        enctype="multipart/form-data">
        @csrf
        <!--
                    Add video section
                -->
        <fieldset class="mb-4  box-shadow">
            <legend class="text-shadow">Add Video</legend>
            <div class="row mb-4">
                <div class="col d-flex justify-content-center align-items-center">
                    <div class="w-100">
                        <label for="video" class="text-white text-shadow fw-100 fs-1">Video</label>
                        <input type="file" name="video" class="form-control box-shadow reader"
                            data-view="#video-preview">
                    </div>
                </div>
                <div class="col">
                    <video controls height="200" width="100%" type="mp4" id="video-preview" duration
                        src="{{url('/storage/videos/demo.mp4')}}">
                        Your browser is not supported
                    </video>
                </div>
            </div>
        </fieldset>
        <!--
                    Poster and title section
                -->
        <fieldset class="mb-4  box-shadow">
            <legend class="text-shadow">Video Poster & Title</legend>
            <div class="row mb-4">
                <div class="col d-flex-column justify-content-center align-items-center">
                    <div class="w-100">
                        <div class="w-100 mb-4">
                            <label for="thumbnail" class="text-white text-shadow fw-100 fs-1">Video
                                Poster</label>
                            <input type="file" name="thumbnail" value="" id="thumbnail"
                                class="form-control box-shadow reader" data-view="#poster-view">
                        </div>
                        <div class="w-100 mb-2">
                            <div class="d-flex justify-content-between">
                                <label for="title" class="text-white text-shadow fw-100 fs-1">Title</label>
                                <i class="fas fa fa-solid fa-eraser text-warning" data-eraser="title">
                                    <div class="eraser-tooltip">Erase</div>
                                </i>
                            </div>
                            <input type="text" name="title" value="" id="title" placeholder="Video title"
                                required="true" class="form-control box-shadow">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="d-flex justify-content-center align-items-center">
                        <img alt="poster" src="{{url('storage/thumbnail/1.jpg')}}" class="img-fluid rounded"
                            id="poster-view" />
                    </div>
                </div>
            </div>
        </fieldset>
        <!-- Video category -->
        <fieldset class="mb-4  box-shadow">
            <legend class="text-shadow">Courses</legend>
            <div class="row mb-4">
                <div class="col ">
                    <label for="course" class="text-white text-shadow fw-100 fs-1">Course</label>
                    <select name="course" id="category" class="form-control box-shadow">
                        <option>Selec a course</option>
                        @foreach($course as $row)
                        <option value="{{$row->id}}">{{$row->course_name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </fieldset>
        <!-- Submit content -->
        <fieldset class="mb-4 box-shadow">
            <legend class="text-shadow">Uploaded content</legend>
            <div class="row mb-4">
                <div class="col">
                    <input type="submit" class="btn btn-danger w-100 fs-2 fw-100 text-white box-shadow" />
                </div>

            </div>
        </fieldset>
    </form>
</div>
@if(session("message"))
<div class="alert alert-warning alert-dismissible fade show position-fixed left-alert" role="alert">
    <strong>{{session('message')}}</strong>
    {{session()->forget("message")}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
@endsection