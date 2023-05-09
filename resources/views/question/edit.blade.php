@extends('layouts.default')

@section('content')
<div class="page-header card">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="fa fa-book bg-c-blue"></i>
                <div class="d-inline">
                    <h5>Question</h5>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="pcoded-inner-content">
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">Edit Question</div>
                            <div class="card-block">
                                <form method="POST" action="{{ route('question.update') }}" novalidate>
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Question Name<label class=text-danger>*</label></label>
                                        <div class="col-sm-10">
                                            <input type= "hidden" name="id" value="{{$questions->id}}">
                                            <input type="text" class="form-control" name="questionname" value="{{$questions->question_name}}">
                                            @error('username')<span class="messages text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Question Type<label class=text-danger>*</label></label>
                                        <div class="col-sm-10">
                                            <select name="question_type" id="question_type" class="form-control">
                                                <option disabled>Select Type</option>
                                                <option value="single" {{ ( 'single' == $questions->question_type) ? 'selected' : '' }}>Single</option>
                                                <option value="multiple" {{ ( 'multiple' == $questions->question_type) ? 'selected' : '' }}>Multiple</option>
                                            </select>
                                            @error('question_type')<span class="messages text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Question Choices<label class=text-danger>*</label></label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="choice_1" value="{{$questions->choice_1}}" >
                                            @error('choice_1')<span class="messages text-danger">{{ $message }}</span> @enderror

                                            <input type="text" class="form-control" name="choice_2" value="{{$questions->choice_2}}" >
                                            @error('choice_2')<span class="messages text-danger">{{ $message }}</span> @enderror

                                            <input type="text" class="form-control" name="choice_3" value="{{$questions->choice_3}}" >
                                            @error('choice_3')<span class="messages text-danger">{{ $message }}</span> @enderror

                                            <input type="text" class="form-control" name="choice_4" value="{{$questions->choice_4}}">
                                            @error('choice_4')<span class="messages text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    @php
                                       $answers = explode(",",$questions->answer);
                                    @endphp

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Correct answer<label class=text-danger>*</label></label>
                                        <div class="col-sm-10">
                                            <select name="answer[]" id="answers" class="form-control">
                                                <option disabled>Select Right Answer</option>

                                                <option value="choice_1" {{ (in_array("choice_1", $answers)) ? 'selected' : '' }}>Choice 1</option>
                                                <option value="choice_2" {{ (in_array("choice_2", $answers)) ? 'selected' : '' }}>Choice 2</option>
                                                <option value="choice_3" {{ (in_array("choice_3", $answers)) ? 'selected' : '' }}>Choice 3</option>
                                                <option value="choice_4" {{ (in_array("choice_4", $answers)) ? 'selected' : '' }}>Choice 4</option>
                                            </select>
                                            @error('answer')<span class="messages text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2"></label>
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-primary m-b-0">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script type="text/javascript">
$( document ).ready(function() {
    var question_type = $('#question_type :selected').val();
    if(question_type == 'multiple'){
        $("#answers").attr("multiple","multiple");
    }

    $(document).on('change', '#question_type', function(){
        var type = $(this).val();
        if(type == 'multiple'){
            $("#answers").attr("multiple","multiple");
        }
    });
});
</script>
@endsection