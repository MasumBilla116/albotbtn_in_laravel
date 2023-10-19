@extends("layout/master-index-header")
@section('title')
{{"Post"}}
@endsection
@section("content")
<main id="main">
    <div class="container mt-4">

        <div class="section-title mt-4">
            <h2 class="text-capitalize">All Posted</h2>
        </div>

        <div class="row ">
            <!-- post article -->
            @foreach($post as $row)
            <div class="col-lg-12  mb-4">
                <div class="shadow rounded table-responsive p-4 text-justify">
                    {!! $row->post !!}
                </div>
            </div>
            @endforeach

        </div>

    </div>
</main>

@endsection