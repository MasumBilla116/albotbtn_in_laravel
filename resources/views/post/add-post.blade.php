@extends("layout/master-header")
@section('title') {{"Add Post"}} @endsection
@section('content')
<!-- Bread crumb and right sidebar toggle -->
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title text-white text-shadow fs-2 text-capitalize">Add Post</h4>
            <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a
                                href="{{action('App\Http\Controllers\usersController@dashboard')}}"
                                class="text-white">Home</a></li>
                        <li class="breadcrumb-item active text-white" aria-current="page">Add post</li>
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
    <form class="w-full" action="{{action('App\Http\Controllers\postController@storePost')}}" method="post"
        enctype="multipart/form-data">
        @csrf
        <!-- start add question -->
        <fieldset class="mb-4  box-shadow">
            <legend class="text-shadow text-capitalize">Post</legend>
            <div class="row mb-2">
                <div class="col-lg-12">
                    <textarea id="editor1" name="post" placeholder="Enter your new post article"></textarea>
                </div>
                @error("post")
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
        </fieldset>
        <!-- Submited -->
        <fieldset class="mb-4  box-shadow">
            <legend class="text-shadow text-capitalize">Submit</legend>
            <div class="row mb-4">
                <div class="col-lg-12">
                    <input type="submit" value="Submit" class="w-100 btn btn-primary box-shadow fs-2">
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
<script src="{{url('http://localhost:8000/assets/vendor/js/editor.js')}}"></script>
<script>
// first editor
ClassicEditor
    .create(document.querySelector('#editor1'), {
        ckfinder: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}"
    })
    .then(editor => {
        window.editor = editor;
    })
    .catch(err => {
        console.error(err.stack);
    });
</script>
<!-- end pages -->
@endsection