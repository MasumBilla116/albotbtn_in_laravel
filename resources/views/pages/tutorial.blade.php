@extends("layout/master-index-header")
@section('title')
{{"Online tutorial"}}
@endsection
@section("content")
<main id="main">

    <!-- ======= Tutorials Section ======= -->
    <section id="post" class="portfolio">
        <div class="container mb-4">

            <div class="section-title">
                <h2>Tutorials</h2>
            </div>
            <div class="row mt-4">
                <!-- tutorials content -->
                @foreach($tutorial as $row)
                <div class=" col-lg-4 col-md-6 col-sm-12 mb-4 border pt-2 pb-2">
                    <div class="poster-area">
                        <a href="{{action('App\Http\Controllers\pagesController@watch',Hash::make($row->t_id))}}"
                            class="poster-thumnail">
                            <img src="{{url($row->thumnail)}}" alt="turtorials" />
                            <span class="video-duration"><i class="fas fa fa-duotone fa-play"></i></span>
                        </a>
                        <div class="fs-sm">{{$row->title}}</div>
                        <div class="video-course mt-2">{{$row->course_name}}</div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section><!-- End tutorial Section -->
</main>
@if(session("message"))
<div class="alert alert-warning alert-dismissible fade show position-fixed msg-alert" role="alert">
    <strong>{{session('message')}}</strong>
    {{session()->forget("message")}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
@endsection