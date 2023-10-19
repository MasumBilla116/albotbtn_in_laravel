<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>albotbn | user login</title>
    <link href="{{url('/storage/logo/fav-icon.png')}}" rel="icon">
    <link rel="stylesheet" type="text/css" href="{{url('http://localhost:8000/assets/vendor/css/style.min.css')}}" />
    <link rel="stylesheet" type="text/css"
        href="{{url('http://localhost:8000/assets/vendor/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" type="text/css"
        href="{{url('http://localhost:8000/assets/vendor/font/fontawesome.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{url('http://localhost:8000/assets/vendor/css/cust.style.css')}}" />

</head>

<body>
    @if(session("message"))
    <div class="alert alert-warning alert-dismissible fade show position-fixed left-alert" role="alert">
        <strong>{{session('message')}}</strong>
        {{session()->forget("message")}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div class="login-container">

        <div class="form col-lg-4 col-md-5 col-sm-12 box-shadow">
            <form action="{{action('App\Http\Controllers\usersController@adminLogin')}}" method="post">
                @csrf
                <h1 class="text-center text-aliceblue mb-0 text-uppercase">
                    <img src="{{url('/storage/logo/albotbn155X33.png')}}" />
                </h1>
                <hr />
                <div class="col">
                    <div class="d-flex">
                        <span
                            class="bg-danger box-shadow z-10 ps-2 pe-2 pt-1 pb-1 rounded-lt rounded-lb text-white border border-white border-right-0">
                            <i class="fas fa fa-duotone fa-envelope"></i>
                        </span>
                        <input type="email" name="email" value="{{old('email')}}"
                            class="form-control focus-box-shadow box-shadow rounded-lt-0 rounded-lb-0" id="email"
                            placeholder="Enter your email" required />

                    </div>
                    @error("email")
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="col mt-4">
                    <div class="d-flex">
                        <span
                            class="bg-danger box-shadow z-10 ps-2 pe-2 pt-1 pb-1 text-white rounded-lt rounded-lb border border-white border-right-0">
                            <i class="fas fa fa-duotone fa-unlock"></i>
                        </span>
                        <input type="password" id="password" name="password" value=""
                            class="form-control focus-box-shadow box-shadow rounded-lt-0 rounded-lb-0"
                            placeholder="Secure password" required />
                    </div>
                    @error("password")
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="col mt-4 mb-4 text-right">
                    <hr />
                    <button type="submit" class="btn btn-danger box-shadow border border-white">
                        Login
                    </button>

                </div>
            </form>
        </div>
    </div>
    <script src="{{url('http://localhost:8000/assets/vendor/js/jquery.min.js')}}"></script>
    <script src="{{url('http://localhost:8000/assets/vendor/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('http://localhost:8000/assets/vendor/js/font.js')}}"></script>
</body>

</html>