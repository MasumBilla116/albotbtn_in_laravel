@extends("layout/master-index-header")
@section("title")

{{" Watch tutorial"}}
@endsection
@section("content")
<!-- ======= watch tutorial ======= -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-6 col-sm-12">
                <video src="{{url($watch['video_path'])}}" controls width="100%" height="400"
                    poster="{{url($watch['thumnail'])}}">
                </video>
                <!-- video title and others like dislike share and save -->
                <div class="col-lg-12">
                    <h5>{{$watch->title}}</h5>
                    <div class="video-course mt-4 p-2 rounded bg-secondary d-inline text-white">
                        {{$watch->course_name}}
                    </div>
                    <div class="d-flex mt-4 mb-4 justify-content-between align-items-center table-responsive">
                        <button type="button" class="me-2 watch-btn d-flex">
                            <i class="fas fa fa-duotone fa-thumbs-up me-2"></i> 56
                        </button>

                        <button type="button" class="me-2 watch-btn d-flex">
                            <i class="fas fa fa-duotone fa-thumbs-down me-2"></i> 12
                        </button>
                        <button type="button" class="me-2 watch-btn d-flex ">
                            <i class="fas fa fa-duotone fa-share me-2"></i>
                            Share</button>
                        <button type="button" class="me-2 watch-btn d-flex">
                            <i class="fas fa fa-duotone fa-square-plus mt-1 me-2"></i>
                            Save
                        </button>
                    </div>
                </div>
            </div>
            <!-- related tutorial -->
            <div class=" col-lg-4 col-md-6 col-sm-12 pe-0 sub-tuto-outer-con">
                <div class="sub-tuto-inner-con">
                    <div class="section-title section-title-bg position-sticky top-0 z-1 pt-1 shadow">
                        <h6>Related Video</h6>
                    </div>
                    <div class="row">
                        <!-- tutorials content -->
                        @foreach($tuto as $row)
                        <div class=" col-lg-12 col-md-12 col-sm-12 mb-4">
                            <div class="poster-area pe-3">
                                <a href="{{action('App\Http\Controllers\pagesController@watch',Hash::make($row->t_id))}}"
                                    class="poster-thumnail">
                                    <img src="{{url($row->thumnail)}}" alt="turtorials" />
                                    <span class="video-duration"><i class="fas fa fa-duotone fa-play"></i></span>
                                </a>
                            </div>
                        </div>
                        @endforeach


                    </div>
                </div>
            </div>
            <!-- video title and others like dislike share and save -->
            <div class="col-lg-8 d-none" style="display:none;">
                <h5>{{$watch->title}}</h5>
                <div class="video-course mt-2 p-2 rounded bg-secondary d-inline text-white">
                    {{$watch->course_name}}
                </div>
                <div class="row mt-4">
                    <div class="col-lg-2 col-md-6 col-sm-12">
                        <button type="button" class="me-2 watch-btn">
                            <i class="fas fa fa-duotone fa-thumbs-up"></i> 56
                        </button>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12">
                        <button type="button" class="me-2 watch-btn">
                            <i class="fas fa fa-duotone fa-thumbs-down"></i> 12
                        </button>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 text-center">
                        <button type="button" class="me-2 watch-btn"><i class="fas fa fa-duotone fa-share"></i>
                            Share</button>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12  text-center">
                        <button type="button" class="me-2 watch-btn">
                            <i class="fas fa fa-duotone fa-square-plus"></i>
                            Save
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- watch tutorial -->
<!-- ======= Tutorials Section ======= -->
<section id="tutorial" class="portfolio">
    <div class="container mb-4">

        <div class="section-title">
            <h2>Tutorials</h2>
            <p>We are provide some courses videos&period;Now you can watch this video and learn more batter&period;</p>
        </div>


        <div class="row">
            <!-- tutorials content -->
            @foreach($tutorial as $row)
            <div class=" col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="poster-area">
                    <a href="{{action('App\Http\Controllers\pagesController@watch',$row->t_id)}}"
                        class="poster-thumnail">
                        <img src="{{url($row->thumnail)}}" alt="turtorials" />
                        <span class="video-duration">05.05</span>
                    </a>
                    <div class="video-course mt-2">{{$row->course_name}}</div>
                </div>
            </div>
            @endforeach
            <!--end tutorials content -->


        </div>

    </div>
</section><!-- End Portfolio Section -->

@endsection