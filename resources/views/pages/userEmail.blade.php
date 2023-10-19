@extends("layout/master-header")
@section('title') {{"All uesrs"}} @endsection
@section('content')
<!-- Bread crumb and right sidebar toggle -->
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title text-white text-shadow fs-2">Email : <span class="text-warning"> {{$email}}</span>
            </h4>
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
<div class="container">
    <!-- start category selector  and filtering-->
    <div class="row mb-4 text-white">
        <div class="col-lg-3 col-md-3 col-sm-6 ">
            <div class="rounded p-2 pt-2 pb-1 text-center bg-warning d-flex justify-content-center align-items-center">
                <h6>Users &lpar; 552 &rpar;</h6>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 ">
            <div class="rounded  p-2 pt-2 pb-1 text-center bg-primary d-flex justify-content-center align-items-center">
                <h6>Videos &lpar; 552 &rpar;</h6>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 ">
            <div class="rounded  p-2 pt-2 pb-1 text-center bg-danger d-flex justify-content-center align-items-center">
                <h6>Login &lpar; 552 &rpar;</h6>
            </div>
        </div>

    </div>
    <!-- end catagory selector and filtering -->
    <!-- start user information -->
    <div class="container">
        <div class="row gap-4">
            <div class="col-lg-5 section-bg rounded p-4 pt-2">
                <h5 class="text-center text-white fw-bold">Lam abbu</h5>
                <img src="{{url('/storage/user/user-1.jpg')}}" alt="users" class="img-fluid rounded">
            </div>
            <div class="col-lg-6 section-bg p-4">
                <div class="row">
                    <!--  user name -->
                    <div class="col-lg-12">
                        <div class="d-flex">
                            <label for="name"
                                class="box-shadow z-10 ps-4 pe-4  pt-.6 pb-.6 cursor-pointer d-flex justify-content-center align-items-center text-white rounded-lt rounded-lb border border-primary border-right-0">
                                <i class="fas fa fa-user text-primary"></i>
                            </label>
                            <input type="text" id="name" name="name" value="Lam"
                                class="form-control focus-box-shadow box-shadow rounded-lt-0 rounded-lb-0"
                                placeholder="your email" />
                        </div>
                    </div>
                    <!--  user date of birth -->
                    <div class="col-lg-12 mt-4">
                        <div class="d-flex">
                            <label for="designation"
                                class="box-shadow z-10 ps-4 pe-4  pt-.6 pb-.6 cursor-pointer d-flex justify-content-center align-items-center text-white rounded-lt rounded-lb border border-primary border-right-0">
                                <i class="fas afs fa-solid fa-baby text-primary"></i>
                            </label>
                            <input type="text" id="dob" name="dob" value="11/6/2020"
                                class="form-control focus-box-shadow box-shadow rounded-lt-0 rounded-lb-0"
                                placeholder="User Date of birth" />
                        </div>
                    </div>
                    <!--  user email -->
                    <div class="col-lg-12  mt-4">
                        <div class="d-flex">
                            <label for="email"
                                class="box-shadow z-10 ps-4 pe-4  pt-.6 pb-.6 cursor-pointer d-flex justify-content-center align-items-center text-white rounded-lt rounded-lb border border-primary border-right-0">
                                <i class="fas fa fa-duotone fa-envelope text-primary"></i>
                            </label>
                            <input type=" email" id="email" name="email" value="{{$email}}"
                                class="form-control focus-box-shadow box-shadow rounded-lt-0 rounded-lb-0"
                                placeholder="User email" />
                        </div>
                    </div>
                    <!--  user country -->
                    <div class="col-lg-12 mt-4">
                        <div class="d-flex">
                            <label for="country"
                                class="box-shadow z-10 ps-4 pe-4  pt-.6 pb-.6 cursor-pointer d-flex justify-content-center align-items-center text-white rounded-lt rounded-lb border border-primary border-right-0">
                                <i class="fas fa fa-solid fa-globe text-primary"></i>
                            </label>
                            <input type="text" id="country" name="country" value="Bangladesh"
                                class="form-control focus-box-shadow box-shadow rounded-lt-0 rounded-lb-0"
                                placeholder="User country" />
                        </div>
                    </div>
                    <!--  user designation -->
                    <div class="col-lg-12 mt-4">
                        <div class="d-flex">
                            <label for="designation"
                                class="box-shadow z-10 ps-4 pe-4  pt-.6 pb-.6 cursor-pointer d-flex justify-content-center align-items-center text-white rounded-lt rounded-lb border border-primary border-right-0">
                                <i class="fas fa fa-solid fa-user-group text-primary"></i>
                            </label>
                            <input type="text" id="designation" name="designation" value="User"
                                class="form-control focus-box-shadow box-shadow rounded-lt-0 rounded-lb-0"
                                placeholder="User designation" />
                        </div>
                    </div>
                    <!--  user designation -->
                    <div class="col-lg-12 mt-4">
                        <div class="d-flex">
                            <label for="password"
                                class="box-shadow z-10 ps-4 pe-4  pt-.6 pb-.6 cursor-pointer d-flex justify-content-center align-items-center text-white rounded-lt rounded-lb border border-primary border-right-0">
                                <i class="fsa fa fa-thin fa-key text-primary"></i>
                            </label>
                            <input type="password" id="password" name="designation" value="2315341545646"
                                class="form-control focus-box-shadow box-shadow rounded-lt-0 rounded-lb-0"
                                placeholder="User password" />
                        </div>
                    </div>
                    <!-- Action  -->
                    <div class="col-lg-12 mt-4">
                        <div class="d-flex  justify-content-between align-items-center">

                            <button type="button" class="btn position-relative w-25 btn-primary success-alert"
                                data-alert="active">
                                Active
                            </button>
                            <button type="button" class="btn w-25 btn-warning text-dark success-alert"
                                data-alert="disabled">Disabled</button>
                            <button type="button" class="btn  w-25 btn-danger text-white success-alert"
                                data-alert="delete">Delete</button>
                        </div>
                    </div>
                    <!-- Update user information -->
                    <div class=" col-lg-12 mt-4">
                        <h5 class="fw-bolder text-capitalize text-white d-block">Update information</h5>
                        <hr class="bg-white" />
                        <input type="submit" class="btn btn-danger w-100 text-white" value="Update" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end user information -->
</div>
@endsection