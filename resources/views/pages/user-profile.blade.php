@extends("layout/master-index-header")
@section("title")
{{"User profile"}}
@endsection
@section("content")
<div class="container-fluid bg-transparent">
    <div class="container h-80vh d-flex justify-content-center align-items-center">
        <div class="row gap-4">
            <div class="col-lg-12">
                <div class="container mt-4">
                    <div class="row">
                        <div class="col-lg-12 bg-white shadow p-4">
                            <form action="{{action('App\Http\Controllers\usersController@updateProfile')}}" class="row"
                                method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="col-lg-12">
                                    <h5 class="fw-bold">Update profile</h5>
                                    <hr>
                                </div>
                                <div class="col-lg-6">
                                    <div class="input-group mb-3">
                                        <input type="file" id="pfile" name="file" class="form-control reader mt-2"
                                            data-view="#profile-view">
                                    </div>
                                    @error("file")
                                    <div class="text-danger -mt-3">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="col-lg-6 text-center">
                                    <img src="{{url(session('profile'))}}" alt="profile" class="profile"
                                        id="profile-view">
                                </div>
                                <div class="col-lg-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-warning btn-sm">SAVE</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@if(session("message"))
<div class="alert alert-warning alert-dismissible fade show position-fixed msg-alert" role="alert">
    <strong>{{session('message')}}</strong>
    {{session()->forget("message")}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@endsection