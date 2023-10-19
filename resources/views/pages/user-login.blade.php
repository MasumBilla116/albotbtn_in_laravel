@extends("layout/master-index-header")
@section('title')
{{"User login"}}
@endsection
@section("content")
<main id="main">
    <div class="d-flex justify-content-center align-items-center h-100vh">
        <div class="row ">
            <div class="col-sm-10 login-box">
                <div class="row">
                    <div class="col-lg-8 col-md-7 log-det">
                        <form action="{{action('App\Http\Controllers\usersController@login')}}" method="post">
                            @csrf
                            <h2>Albotbn login</h2>

                            <div class="text-box-cont">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i
                                                class="fas fa-user"></i></span>
                                    </div>
                                    <input type="email" name="email" value="{{old('email')}}" class="form-control"
                                        placeholder="Enter your email">
                                </div>
                                @error("email")
                                <div class="text-danger -mt-3">{{$message}}</div>
                                @enderror
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i
                                                class="fas fa-lock"></i></span>
                                    </div>
                                    <input type="password" name="password" class="form-control" placeholder="password">
                                </div>
                                @error("password")
                                <div class="text-danger -mt-3">{{$message}}</div>
                                @enderror
                                <div class="row">
                                    <p class="forget-p">Forget Password ?</p>
                                </div>
                                <div class="input-group center mb-3">
                                    <button type="submit" class="btn btn-success btn-round">SIGN IN</button>
                                </div>
                            </div>
                        </form>

                    </div>
                    <div class="col-lg-4 col-md-5 box-de">
                        <div class="ditk-inf">
                            <h2 class="w-100">Din't Have an Account </h2>
                            <p>Simply Create your account by clicking the Signup Button</p>
                            <a href="{{action('App\Http\Controllers\usersController@userRegister')}}">
                                <button type="button" class="btn btn-outline-light">SIGN UP</button>
                            </a>
                        </div>
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