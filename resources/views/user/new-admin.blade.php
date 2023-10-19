@extends("layout/master-header")
@section('title') {{"Add country"}} @endsection
@section('content')
<!-- Bread crumb and right sidebar toggle -->
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title text-white text-shadow fs-2 text-capitalize">Add new admin </h4>
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
    @if(session("message"))
    <div class="alert alert-warning alert-dismissible fade show mt-4 mb-4">
        <strong>{{session("message")}}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    @endif
    <form class="w-full" action="{{action('App\Http\Controllers\usersController@addAdmin')}}" method="post">
        @csrf
        <!-- start subject and skill  -->
        <fieldset class="mb-4  box-shadow">
            <legend class="text-shadow text-capitalize">Add new admin</legend>
            <div class="row mb-4">
                <div class="col-lg-6 ">
                    <label for="name" class="text-white text-capitalize">admin name&colon;</label>
                    <input type="name" id="name" name="name" value="{{old('name')}}" placeholder="Enter admin name"
                        class="form-control section-bg box-shadow border-primary" required>
                    @error("name")
                    <div class="text-danger">{{$message}}</div>
                    @enderror

                </div>
                <div class="col-lg-6 ">
                    <label for="email" class="text-white text-capitalize">admin email&colon;</label>
                    <input type="email" id="email" name="email" value="{{old('email')}}" placeholder="Enter admin email"
                        class="form-control section-bg box-shadow border-primary" required>
                    @error("email")
                    <div class="text-danger">{{$message}}</div>
                    @enderror

                </div>
                <div class="col-lg-6 position-relative mt-4">
                    <label for="password" class="text-white text-capitalize">Password&colon;</label>
                    <input type="password" id="password" name="password" value=""
                        class="form-control  section-bg box-shadow border-primary"
                        placeholder="Enter your secure password">
                    @error("password")
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                    <span class="pass-eye">
                        <i class="fas fa fa-solid fa-eye"></i>
                    </span>
                </div>
            </div>
        </fieldset>
        <fieldset class="mb-4  box-shadow">
            <legend class="text-shadow text-capitalize">Save</legend>
            <div class="row mb-4">
                <div class="col-lg-3"></div>
                <div class="col-lg-6 pt-2 text-center">
                    <input type="submit" value="submit" class="btn btn-danger box-shadow text-white btn-lg">
                </div>
                <div class="col-lg-3"></div>
            </div>
        </fieldset>

    </form>
</div>
</div>
@endsection