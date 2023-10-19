@extends("layout/master-index-header")
@section('title')
{{"User register"}}
@endsection
@section("content")
<main id="main">
    <div class="d-flex justify-content-center align-items-center h-100vh">
        <div class="row ">

            <div class="col-sm-10 login-box">
                <div class="row">
                    <div class="col-lg-4 col-md-5 box-de">
                        <div class="small-logo">
                            <i class="fab fa-asymmetrik"></i>
                            Style Login
                        </div>
                        <div class="ditk-inf sup-oi">
                            <h2 class="w-100">Already Have an Account</h2>
                            <p>Simply login to your account by clicking the SIGN IN Button</p>
                            <a href="{{action('App\Http\Controllers\usersController@userLogin')}}">
                                <button type="button" class="btn btn-outline-light">SIGN IN</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-7 log-det">

                        <h2>Create Account</h2>
                        <form action="{{action('App\Http\Controllers\usersController@addNewUserRegister')}}"
                            method="post">
                            @csrf
                            <div class="text-box-cont">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="far fa-user"></i>
                                        </span>
                                    </div>
                                    <input type="text" name="name" value="{{old('name')}}" class="form-control"
                                        placeholder="Full Name" aria-label="Username" aria-describedby="basic-addon1">

                                </div>
                                @error("name")
                                <div class="text-danger -mt-3">{{$message}}</div>
                                @enderror
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="far fa-envelope"></i>
                                        </span>
                                    </div>
                                    <input type="email" name="email" value="{{old('email')}}" class="form-control"
                                        placeholder="Email Address">

                                </div>
                                @error("email")
                                <div class="text-danger -mt-3">{{$message}}</div>
                                @enderror
                                <div class="input-group mb-3 position-relative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i
                                                class="fas fa-lock"></i></span>
                                    </div>
                                    <input type="password" name="password" class="form-control" placeholder="Password"
                                        aria-label="Username" aria-describedby="basic-addon1">
                                    <span class="pass-eye">
                                        <i class="fas fa fa-solid fa-eye"></i>
                                    </span>
                                </div>
                                @error("password")
                                <div class="text-danger -mt-3">{{$message}}</div>
                                @enderror

                                <div class="input-group center sup mb-3">
                                    <button class="btn btn-success btn-round">SIGN UP</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@if(session("message"))
<div class="alert alert-warning alert-dismissible fade show position-fixed msg-alert" role="alert">
    <strong>{{session('message')}}</strong>
    {{session()->forget("message")}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
@endsection