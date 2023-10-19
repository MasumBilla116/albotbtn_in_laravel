@extends("layout/master-header")
@section('title') {{"Exam duration "}} @endsection
@section('content')
<!-- Bread crumb and right sidebar toggle -->
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title text-white text-shadow fs-2 text-capitalize">exam duration &amp; exam mark</h4>
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
    <form class="w-full" action="#" method="#" enctype="multipart/form-data">
        <!-- start subject and skill  -->
        <fieldset class="mb-4  box-shadow">
            <legend class="text-shadow text-capitalize">subject &amp; skill</legend>
            <div class="row mb-4">
                <div class="col-lg-6">
                    <label for="subject" class="text-white text-capitalize  text-shadow">Subject Q &colon;</label>
                    <select id="subject" class="form-select section-bg box-shadow text-white border border-primary"
                        name="subject">
                        <option value="">select a subject</option>
                        <option value="English">English</option>
                        <option value="Bengali">Bengali</option>
                        <option value="Physics">Physics</option>
                        <option value="Biology">Biology</option>
                    </select>
                </div>
                <div class="col-lg-6">
                    <label for="skill" class="text-white text-capitalize  text-shadow">Skill lavel &colon;</label>
                    <select id="skill" class="form-select section-bg box-shadow text-white border border-primary"
                        name="subject">
                        <option value="">select skill</option>
                        <option value="normal">Normal</option>
                        <option value="medium">Medium</option>
                        <option value="medium-hard">Medium hard</option>
                        <option value="hard">Hard</option>
                    </select>
                </div>

            </div>
        </fieldset>
        <!-- start exam duration and submit  -->
        <fieldset class="mb-4  box-shadow">
            <legend class="text-shadow text-capitalize">Exan duration &amp; Question</legend>
            <div class="row mb-4">
                <div class="col-lg-6">
                    <div class="d-flex justify-content-between">
                        <label for="duration" class="text-white text-capitalize  text-shadow">Exam duration &lpar;
                            in minute &rpar; &colon;</label>
                        <i class="fas fa fa-solid fa-eraser text-warning" data-eraser="duration">
                            <div class="eraser-tooltip">Erase</div>
                        </i>
                    </div>

                    <input type="text" id="duration" name="duration" value="" placeholder="Enter exam duration"
                        class="form-control section-bg box-shadow border-primary" />
                </div>
                <div class="col-lg-6">
                    <label for="question" class="text-white text-capitalize  text-shadow">how many Question
                        &colon;</label>
                    <select id="question" class="form-select section-bg box-shadow text-white border border-primary"
                        name="question">
                        <option value="">select question range</option>
                        <option value="10">10</option>
                        <option value="15">15</option>
                        <option value="25">25</option>
                        <option value="25">30</option>
                        <option value="50">50</option>
                        <option value="75">75</option>
                        <option value="100">100</option>
                        <option value="125">125</option>
                        <option value="150">150</option>
                        <option value="200">200</option>
                        <option value="300">300</option>
                    </select>
                </div>
            </div>
        </fieldset>
        <!-- Question mark and negative mark -->
        <fieldset class="mb-4  box-shadow">
            <legend class="text-shadow text-capitalize">Question mark &amp; negative mark</legend>
            <div class="row mb-4">
                <div class="col-lg-6">
                    <div class="d-flex justify-content-between">
                        <label for="mark" class="text-white text-capitalize  text-shadow">Question mark &colon;</label>
                        <i class="fas fa fa-solid fa-eraser text-warning" data-eraser="mark">
                            <div class="eraser-tooltip">Erase</div>
                        </i>
                    </div>

                    <input type="text" id="mark" name="mark" value="" placeholder="per question mark"
                        class="form-control section-bg box-shadow border-primary" />
                </div>
                <div class="col-lg-6">
                    <div class="d-flex justify-content-between">
                        <label for="negative-mark" class="text-white text-capitalize text-shadow">negative
                            mark &colon;</label>
                        <i class="fas fa fa-solid fa-eraser text-warning" data-eraser="negative-mark">
                            <div class="eraser-tooltip">Erase</div>
                        </i>
                    </div>

                    <input type="text" id="negative-mark" name="negative-mark" value="" placeholder="per question mark"
                        class="form-control section-bg box-shadow border-primary" />
                </div>
            </div>
        </fieldset>
        <!-- submite -->
        <fieldset class="mb-4  box-shadow">
            <legend class="text-shadow text-capitalize">Submit</legend>
            <div class="row mb-4">
                <div class="col-lg-12">
                    <input type="submit" value="Submit" class="btn btn-primary fs-1 w-100 d-block">
                </div>
            </div>
        </fieldset>
    </form>
</div>
@endsection