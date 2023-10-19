@extends("layout/master-index-header")
@section("title")

{{"Online Exam Answer"}}
@endsection
@section("content")
<!-- ======= Online exam ======= -->

<section id="about" class="about">
    <div class="container">

        <div class="section-title">
            <h2>Exam Result&colon;</h2>
        </div>
        <div class="row content auto-count">
            <div class="con-lg-12 p-4 d-flex justify-content-center">
                <div class="ans-container">
                    <div class="d-flex justify-content-between border p-4 pb-2 rounded mb-2">
                        <h5><strong>Total Question &colon;<strong></h5>
                        <h5><strong>{{$totalQuestion}}<strong></h5>
                    </div>
                    <div class="d-flex justify-content-between border p-4 pb-2 rounded mb-2">
                        <h5><strong>Total Mark&colon;<strong></h5>
                        <h5><strong>{{$totalQuestion}}<strong></h5>
                    </div>
                    <div class="d-flex justify-content-between border p-4 pb-2 rounded">
                        <h5><strong>Correct Answer&colon;<strong></h5>
                        <h5><strong>{{$correctAns}}<strong></h5>
                    </div>
                </div>
            </div>
            <div class="con-lg-12 p-4 d-flex justify-content-center">
                <a href="{{URL::previous()}}" class=" btn btn-primary btn-lg">Back</a>
            </div>
        </div>

    </div>
</section>
<!-- Online exam -->

@endsection