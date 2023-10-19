@extends("layout/master-header")
@section("title") {{"edit question and ans"}} @endsection
@section('content')
<!-- Bread crumb and right sidebar toggle -->
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title text-white text-shadow fs-2 text-capitalize">edit qustion and ans</h4>
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
    <form action="{{action('App\Http\Controllers\ExamController@updateQuestionAndAns')}}" method="post">
        @csrf
        <fieldset class="mb-4  box-shadow">
            <legend class="text-shadow text-capitalize">Question &colon;</legend>

            <div class="row mb-4">
                <div class="col-lg-12 mb-4">
                    <label for="course" class="text-white text-shadow fw-100 fs-1">Course</label>
                    <select name="course" id="category" class="form-control box-shadow">
                        <option>Selec a course</option>
                        @foreach($course as $row)
                        <option value="{{$row->id}}" @if($question->course_id == $row->id)
                            selected @endif>{{$row->course_name}}
                        </option>
                        @endforeach
                    </select>
                    @error("course")
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="col-lg-12">
                    <h5 class="text-start text-white text-shadow text-capitalize">Edite Question&colon;</h5>
                    <hr class="bg-white" />
                    <textarea id="editor1" name="question" value="{{$question->question}}"
                        placeholder="Update your question">{!! $question->question !!}</textarea>
                </div>
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
                        <textarea name="optiona" value="{{$ans[0]->option}}" id="optiona"
                            placeholder="Enter your option A">
                            {{$ans[0]->option}}
                        </textarea>

                    </div>
                    <div class="mt-2">
                        <div class="form-check">
                            <input type="checkbox" name="ansa" id="ansa" class="form-check-input"
                                @if($ans[0]->correct_ans) checked @endif>
                            <label for="ansa" class="form-check-label text-white">Ans&colon; A</label>
                            <input type="hidden" name="opaid" value="{{$ans[0]->id}}" />
                        </div>
                    </div>
                </div>

                <!-- option 2 -->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="d-block">
                        <label from="optionb" class="form-control-label text-capitalize text-white">
                            option B</label>
                        <textarea name="optionb" value="{{$ans[1]->option}}" id="optionb"
                            placeholder="Enter your option B">
                        {{$ans[1]->option}}
                        </textarea>

                    </div>
                    <div class="mt-2">
                        <div class="form-check">
                            <input type="checkbox" name="ansb" id="ansb" class="form-check-input"
                                @if($ans[1]->correct_ans) checked @endif>
                            <label for="ansb" class="form-check-label text-white">Ans&colon; B</label>
                            <input type="hidden" name="opbid" value="{{$ans[1]->id}}" />
                        </div>
                    </div>
                </div>
                <!-- option 3 -->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="d-block">
                        <label from="option3" class="form-control-label text-capitalize text-white">
                            option C</label>
                        <textarea name="optionc" value="{{$ans[2]->option}}" id="optionc"
                            placeholder="Enter your option C">
                        {{$ans[2]->option}}
                        </textarea>
                    </div>
                    <div class="mt-2">
                        <div class="form-check">
                            <input type="checkbox" name="ansc" id="ansc" class="form-check-input"
                                @if($ans[2]->correct_ans) checked @endif>
                            <label for="ansc" class="form-check-label text-white">Ans&colon; C</label>
                            <input type="hidden" name="opcid" value="{{$ans[2]->id}}" />
                        </div>
                    </div>
                </div>
                <!-- option 4 -->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="d-block">
                        <label from="optiond" class="form-control-label text-capitalize text-white">
                            option D</label>
                        <textarea name="optiond" value="{{$ans[3]->option}}" id="optiond"
                            placeholder="Enter your option D">
                        {{$ans[3]->option}}
                        </textarea>
                    </div>
                    <div class="mt-2">
                        <div class="form-check">
                            <input type="checkbox" name="ansd" id="ansd" class="form-check-input"
                                @if($ans[3]->correct_ans) checked @endif>
                            <label for="ansd" class="form-check-label text-white">Ans&colon; D</label>
                            <input type="hidden" name="opdid" value="{{$ans[3]->id}}" />
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>
        <fieldset class="mb-4 box-shadow">
            <legend class="text-shadow text-capitalize">correct ans &amp; describe &colon;</legend>
            <div class="row mb-4">
                <div class="col-lg-12">
                    <h5 class="text-start text-white text-shadow text-capitalize">Answer description&colon;</h5>
                    <hr class="bg-white" />
                    <textarea id="editor2" name="descripiption">{{$des->description}}</textarea>
                </div>

            </div>
        </fieldset>
        <input type="hidden" name="qid" value="{{$question->id}}" />
        <fieldset class="mb-4 box-shadow">
            <legend class="text-shadow text-capitalize">Update</legend>
            <div class="row mb-4">
                <div class="col-lg-12 d-flex justify-content-center align-items-center">
                    <button type="submit" class="btn btn-primary">Update</button>
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
<!-- end pages -->
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
@endsection