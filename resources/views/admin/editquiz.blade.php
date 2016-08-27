@extends('layouts.admin')

@section('content')
    @include('layouts.success')
    @include('layouts.error')
<h4>Create Quiz</h4>
    <Div>
        {!!   Form::open(array('action' => 'QuizController@store', 'class' => 'form-horizontal',
                           'id'=>'form-sign-up')
                           ) !!}
        {{ csrf_field()}}
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Title:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="title" id="email" required >
                </div>
            </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">URL:</label>
            <div class="col-sm-10">
                <input type="url" class="form-control" name="url" id="email" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2"  for="email">Fee:</label>
            <div class="col-sm-10">
                <input type="number" class="form-control " name="fee" id="email" required>
            </div>
        </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="pwd">Minutes:</label>
                <div class="col-sm-10">
                    <input type="time" class="form-control" id="pwd" name="minutes" required >
                </div>
            </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Description:</label>
            <div class="col-sm-10">
                <textarea class="form-control" id="pwd" name="description" ></textarea>

            </div>
        </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    {!!  Form::button('<i class="fa fa-plus"></i> Upload Quiz', array(
                                     'class' => 'btn btn-sm btn-primary',
                                     'type' => 'submit'
                                     ))  !!}
                </div>
            </div>
        {!!  Form::close()  !!}
    </Div>
@stop
@section('footer')
<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
@stop