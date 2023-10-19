@extends("../layout/master-header")
@section('title')
{{"Tdesk | Update video content"}}
@endsection
@section('content')
<!-- Bread crumb and right sidebar toggle -->
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title text-white text-shadow fs-2 text-capitalize">Update video information </h4>
            <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a
                                href="{{action('App\Http\Controllers\usersController@dashboard')}}"
                                class="text-white">Home</a></li>
                        <li class="breadcrumb-item active text-white" aria-current="page">update video</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<hr />
<!-- End Bread crumb and right sidebar toggle -->
<div class="container">
    <form class="w-full" action="{{action('App\Http\Controllers\VideoContentController@saveUpdateVideoInfo')}}"
        method="post" enctype="multipart/form-data">
        @csrf
        <!--
                    Add video section
                -->
        <fieldset class="mb-4  box-shadow">
            <legend class="text-shadow  text-capitaliz">Update video content</legend>
            <div class="row mb-4">
                <div class="col d-flex justify-content-center align-items-center">
                    <div class="w-100 mb-2">
                        <div class="d-flex justify-content-between">
                            <label for="title" class="text-white text-shadow fw-100 fs-1  text-capitaliz">Update
                                Title</label>
                            <i class="fas fa fa-solid fa-eraser text-warning" data-eraser="title">
                                <div class="eraser-tooltip">Erase</div>
                            </i>
                        </div>
                        <input type="text" name="title" value="{{$tutorial['title']}}" id="title"
                            placeholder="Enter video title" required="true"
                            class="form-control box-shadow border-primary">
                        @error('title')
                        <div class="text-danger">{{$message}}</div>
                        @enderror

                    </div>
                </div>
                <div class="col">
                    <video controls height="200" width="100%" type="mp4" id="video"
                        src="{{url($tutorial->video_path)}}">
                        Your browser is not supported
                    </video>
                </div>
            </div>
        </fieldset>
        <!--
                    Poster and title section
                -->
        <fieldset class="mb-4  box-shadow">
            <legend class="text-shadow  text-capitaliz">Update Video Poster</legend>
            <div class="row mb-4">
                <div class="col d-flex-column justify-content-center align-items-center">
                    <div class="w-100">
                        <div class="w-100 mb-4">
                            <label for="file" id="file"
                                class="text-white text-shadow fw-100 fs-1  text-capitaliz">Update Video
                                Poster</label>
                            <input type="file" name="thumbnail" value="{{$tutorial['thumnail']}}" id="file"
                                class="form-control box-shadow reader  border-primary" data-view="#poster-view">
                            @error('thumbnail')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="w-100">
                        <label for="status" class="text-white text-shadow fw-100 fs-1">Status</label>
                        <select name="status" id="status" class="form-control box-shadow">
                            <option>Selec a video status</option>
                            <option value="1" @if($tutorial->status == 1) selected="selected" @endif
                                >Active
                            </option>
                            <option value="0" @if($tutorial->status == 0) selected="selected"
                                @endif
                                >Disabled
                            </option>
                        </select>
                        @error('status')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="d-flex justify-content-center align-items-center">
                        <img alt="poster" src="{{url($tutorial['thumnail'])}}" class="img-fluid rounded"
                            id="poster-view" />
                    </div>
                </div>
            </div>
        </fieldset>
        <!-- Video category -->
        <fieldset class="mb-4  box-shadow">
            <legend class="text-shadow text-capitaliz">Update Video Category</legend>
            <div class="row mb-4">
                <div class="col ">
                    <label for="course" class="text-white text-shadow fw-100 fs-1">Course</label>
                    <select name="course" id="course" class="form-control box-shadow">
                        <option>Selec a course</option>
                        @foreach($course as $row)
                        <option value="{{$row->id}}" @if($row->id == $tutorial['course_id']) selected="selected" @endif
                            >{{$row->course_name}}
                        </option>
                        @endforeach
                    </select>
                    @error('course')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
            </div>
        </fieldset>

        <!-- Submit content -->
        <input type="hidden" name="video" value="{{$tutorial['t_id']}}">
        <fieldset class="mb-4 box-shadow">
            <legend class="text-shadow text-capitaliz">Uploaded content</legend>
            <div class="row mb-4">
                <div class="col d-flex justify-content-center">
                    <input type="submit" value="Update"
                        class="btn btn-primary text-right fs-2 fw-100 text-white box-shadow rounded" />
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