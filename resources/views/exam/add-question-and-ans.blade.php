@extends("layout/master-header")
@section('title') {{"Add Question"}} @endsection
@section('content')
<!-- Bread crumb and right sidebar toggle -->
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title text-white text-shadow fs-2 text-capitalize">Add Question and ans</h4>
            <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a
                                href="{{action('App\Http\Controllers\usersController@dashboard')}}"
                                class="text-white">Home</a></li>
                        <li class="breadcrumb-item active text-white" aria-current="page">Add question and ans</li>
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
    <form class="w-full" action="{{action('App\Http\Controllers\ExamController@storeQuestionAndAns')}}" method="post"
        enctype="multipart/form-data">
        @csrf
        <!-- start subject and skill  -->
        <fieldset class="mb-4  box-shadow">
            <legend class="text-shadow text-capitalize">subject &amp; skill</legend>
            <div class="row mb-4">
                <div class="col-lg-6">
                    <label for="course" class="text-white text-shadow fw-100 fs-1">Course</label>
                    <select name="course" id="category" class="form-control box-shadow">
                        <option>Selec a course</option>
                        @foreach($course as $row)
                        <option value="{{$row->id}}">{{$row->course_name}}</option>
                        @endforeach
                    </select>
                    @error("course")
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="col-lg-6">
                    <label for="skill" class="text-white text-capitalize">Skill lavel &colon;</label>
                    <select id="skill" class="form-select section-bg box-shadow text-white border border-primary"
                        name="subject" disabled>
                        <option value="">select skill</option>
                        <option value="normal">Normal</option>
                        <option value="medium">Medium</option>
                        <option value="medium-hard">Medium hard</option>
                        <option value="hard">Hard</option>
                    </select>
                </div>

            </div>
        </fieldset>
        <!-- start add question -->
        <fieldset class="mb-4  box-shadow">
            <legend class="text-shadow text-capitalize">Add Question</legend>
            <div class="row mb-4">
                <div class="col-lg-12">
                    <textarea id="editor1" name="question" placeholder="Enter your question"></textarea>
                </div>
                @error("question")
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
        </fieldset>
        <!--  start ans -->
        <fieldset class="mb-4  box-shadow">
            <legend class="text-shadow text-capitalize">Ans&colon; option</legend>
            <div class="row mb-4">
                <!-- option 1 -->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="d-block">
                        <label from="optiona" class="form-control-label text-capitalize text-white">
                            Option A</label>
                        <textarea name="optiona" id="optiona" placeholder="Enter your option A"></textarea>
                        @error("optiona")
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mt-2">
                        <div class="form-check">
                            <input type="checkbox" name="ansa" id="ansa" class="form-check-input">
                            <label for="ansa" class="form-check-label text-white">Ans&colon; A</label>
                        </div>
                    </div>
                </div>

                <!-- option 2 -->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="d-block">
                        <label from="optionb" class="form-control-label text-capitalize text-white">
                            option B</label>
                        <textarea name="optionb" id="optionb" placeholder="Enter your option B"></textarea>
                        @error("optionb")
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mt-2">
                        <div class="form-check">
                            <input type="checkbox" name="ansb" id="ansb" class="form-check-input">
                            <label for="ansb" class="form-check-label text-white">Ans&colon; B</label>
                        </div>
                    </div>
                </div>
                <!-- option 3 -->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="d-block">
                        <label from="option3" class="form-control-label text-capitalize text-white">
                            option C</label>
                        <textarea name="optionc" id="optionc" placeholder="Enter your option C"></textarea>
                    </div>
                    <div class="mt-2">
                        <div class="form-check">
                            <input type="checkbox" name="ansc" id="ansc" class="form-check-input">
                            <label for="ansc" class="form-check-label text-white">Ans&colon; C</label>
                        </div>
                    </div>
                </div>
                <!-- option 4 -->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="d-block">
                        <label from="optiond" class="form-control-label text-capitalize text-white">
                            option D</label>
                        <textarea name="optiond" id="optiond" placeholder="Enter your option D"></textarea>
                    </div>
                    <div class="mt-2">
                        <div class="form-check">
                            <input type="checkbox" name="ansd" id="ansd" class="form-check-input">
                            <label for="ansd" class="form-check-label text-white">Ans&colon; D</label>
                        </div>
                    </div>
                </div>



            </div>
        </fieldset>
        <!-- start add ans: describe -->
        <fieldset class="mb-4  box-shadow">
            <legend class="text-shadow text-capitalize"> describe Ans&colon;</legend>
            <div class="row mb-4">
                <div class="col-lg-12">
                    <textarea id="editor2" name="ansdes"
                        placeholder="Enter your question answer description"></textarea>
                </div>

            </div>
        </fieldset>
        <!-- Submited -->
        <fieldset class="mb-4  box-shadow">
            <legend class="text-shadow text-capitalize">Submited</legend>
            <div class="row mb-4">
                <div class="col-lg-12">
                    <input type="submit" value="Submit" class="w-100 btn btn-primary box-shadow fs-2">
                </div>

            </div>
        </fieldset>
    </form>
</div>
@if(session("message"))
<div class="alert alert-warning alert-dismissible fade show position-fixed msg-alert" role="alert">
    <strong>{{session('message')}}</strong>
    {{session()->forget("message")}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<script src="{{url('/assets/vendor/js/editor.js')}}"></script>
<script>
// first editor
ClassicEditor
    .create(document.querySelector('#editor1'), {
        // toolbar: ['heading', '|', 'bold', 'italic', 'link']
    })
    .then(editor => {
        window.editor = editor;
    })
    .catch(err => {
        console.error(err.stack);
    });
// second editor
ClassicEditor
    .create(document.querySelector("#editor2"), {})
    .then(editor => {
        window.editor = editor;
    })
    .catch(err => {
        console.error(err.stack);
    })

// second editor
ClassicEditor
    .create(document.querySelector("#optiona"), {})
    .then(editor => {
        window.editor = editor;
    })
    .catch(err => {
        console.error(err.stack);
    })

// second editor
ClassicEditor
    .create(document.querySelector("#optionb"), {})
    .then(editor => {
        window.editor = editor;
    })
    .catch(err => {
        console.error(err.stack);
    })
// second editor
ClassicEditor
    .create(document.querySelector("#optionc"), {})
    .then(editor => {
        window.editor = editor;
    })
    .catch(err => {
        console.error(err.stack);
    })
// second editor
ClassicEditor
    .create(document.querySelector("#optiond"), {})
    .then(editor => {
        window.editor = editor;
    })
    .catch(err => {
        console.error(err.stack);
    })
</script>
<!-- end pages -->
@endsection