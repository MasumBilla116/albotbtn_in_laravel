@extends("layout/master-header")
@section("title")
{{"admin profile upate"}}
@endsection
@section("content")
<div class="container-fluid bg-transparent">

    <div class="container">
        <div class="row gap-4">
            <div class="col-lg-12">
                <div class="container mt-4">
                    <div class="row">
                        <div class="col-lg-12 section-bg shadow p-4">
                            <form action="{{url('/admin/profile/update')}}" class="row" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="col-lg-12">
                                    <h5 class="fw-bold text-white  text-shadow">Update profile</h5>
                                    <hr>
                                </div>
                                <div class="col-lg-6">
                                    <div class="input-group mb-3">
                                        <input type="file" id="pfile" name="file"
                                            class="form-control reader mt-2  box-shadow border-primary"
                                            data-view="#profile-view">
                                    </div>
                                    @error("file")
                                    <div class="text-danger">{{$message}} </div>
                                    @enderror
                                </div>

                                <div class=" col-lg-6 text-center">
                                    <img src="{{url(session('profile'))}}" alt="profile" class="profile"
                                        id="profile-view">
                                </div>
                                <div class="col-lg-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-warning btn-sm  box-shado">SAVE</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row gap-4">
            <div class="col-lg-12">
                <div class="container mt-4">
                    <div class="row">
                        <div class="col-lg-12 section-bg shadow p-4">
                            <form action="{{url('/admin/password/update')}}" class="row" method="post">
                                @csrf
                                <div class="col-lg-12">
                                    <h5 class="fw-bold text-white  text-shadow">Update Password </h5>
                                    <hr>
                                </div>
                                <div class="col-lg-6 position-relative mb-4">
                                    <label for="opassword" class="text-white text-capitalize">Old
                                        Password&colon;</label>
                                    <input type="password" id="opassword" name="old-password" value=""
                                        class="form-control  section-bg box-shadow border-primary"
                                        placeholder="Enter old password">
                                    @error("old-password")
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                                    <span class="pass-eye">
                                        <i class="fas fa fa-solid fa-eye"></i>
                                    </span>

                                </div>

                                <div class="col-lg-6 position-relative mb-4">
                                    <label for="npassword" class="text-white text-capitalize">New
                                        Password&colon;</label>
                                    <input type="password" id="npassword" name="new-password" value=""
                                        class="form-control  section-bg box-shadow border-primary"
                                        placeholder="Enter new password">
                                    <span class="pass-eye">
                                        <i class="fas fa fa-solid fa-eye"></i>
                                    </span>
                                    @error("new-password")
                                    <div class="text-danger">{{$message}} </div>
                                    @enderror
                                </div>
                                <div class="col-lg-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-warning btn-sm box-shado">SAVE</button>
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
<div class="alert alert-warning alert-dismissible fade show position-fixed left-alert" role="alert">
    <strong>{{session('message')}}</strong>
    {{session()->forget("message")}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
@endsection