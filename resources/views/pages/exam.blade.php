@extends("layout/master-index-header")
@section("title")
{{$subject}}
{{" | Online exam"}}
@endsection
@section("content")
<!-- ======= Online exam ======= -->
<section id="about" class="about">
    <div class="container">
        <form action="{{action('App\Http\Controllers\pagesController@ans')}}" method="post">
            @csrf
            @method("post")
            <div class="d-flex justify-content-between">
                <div><strong>Total question &colon;</strong> {{count($question)}}</div>
                <div class="section-title">
                    <h2>{{$subject}} Exam&colon;</h2>
                </div>
                <div><strong>Total mark &colon;</strong> {{count($question)}}</div>
            </div>
            <div class="row content auto-count">
                <!-- Question  -->
                <?php $q=1; $o=1;?>
                @foreach($question as $row)
                <div class="col-lg-12 question-container">
                    <div class="count d-flex">{!! $row->question !!}</div>
                    <input type="hidden" name="question[{{$q}}]" value="{{$row->id}}">
                    <div class="row">
                        @foreach($answer as $option)
                        @if($row->id == $option->question_id)
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="form-check">
                                <input type="radio" id="opx$%{{6548+$option->id+9366}}%$2bg" name="option[{{$o}}]"
                                    class="form-check-input" value="{{$option->id}}">
                                <label for="opx$%{{6548+$option->id+9366}}%$2bg" class="form-label fw-bold">
                                    {!! $option->option !!}</label>
                            </div>
                        </div>

                        @endif
                        @endforeach
                    </div>
                    @foreach($answerdescription as $ansDes)
                    @if(($ansDes->question_id == $row->id) && ($ansDes->description != null))
                    <button type="button" class="btn btn-danger me-4" data-bs-toggle="collapse"
                        data-bs-target="#collapse{{46456+$row->id+454}}">Description</button>
                    @endif
                    @endforeach
                    @foreach($answer as $correctAns)
                    @if(($correctAns->question_id == $row->id) && ($correctAns->correct_ans == 'on'))
                    <button type="button" class="btn btn-warning" data-bs-toggle="collapse"
                        data-bs-target="#ans{{7972+$row->id+9317}}">Answer</button>
                    <div class="mt-4 mb-2 collapse" id="ans{{7972+$row->id+9317}}">
                        <div class="card card-body">{!! $correctAns->option !!}</div>
                    </div>
                    @endif
                    @endforeach
                    @foreach($answerdescription as $ansDes)
                    @if(($ansDes->question_id == $row->id) && ($ansDes->description != null))
                    <div class="mt-4 mb-2 collapse" id="collapse{{46456+$row->id+454}}">
                        <div class="card card-body">
                            {!! $ansDes->description !!}
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
                <?php $o++; ?>
                <?php $q++; ?>
                @endforeach
                <input type="hidden" name="totalquestion" value="{{count($question)}}">
                <div class="con-lg-12 p-4 d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary btn-lg shadow">Result</button>
                </div>
            </div>
        </form>
    </div>
</section>
<!-- Online exam -->

@endsection