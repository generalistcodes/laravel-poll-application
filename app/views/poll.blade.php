@extends('layouts/master')

@section('title')
{{{$poll->question}}}
@stop

@section('content')
<div class="row">
    <div class="col-md-6">
        @if($errors->count())
            <div class="alert alert-danger fade in">
               <i class="icon-remove close" data-dismiss="alert"></i>
                {{ $errors->first(); }}
            </div>
        @endif
        @if(Session::has('flash_message'))
            <div class="alert alert-success fade in">
               <i class="icon-remove close" data-dismiss="alert"></i>
                {{ Session::get('flash_message') }}
            </div>
        @endif
    </div>
</div>
<div class="row">
    <div class="col-md-12">

        <div class="widget box">

            <div class="widget-header">

                <h4> {{{$poll->question}}}</h4>

            </div>

            <div class="widget-content">

                @section('content')
                    {{ Form::open(array('url' => route('poll_save', array('id' => $poll->id)),'class'=>'form-horizontal row-border')) }}
                        <div class="alert alert-info fade in">
                            Please Enter your Information Below
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Name:</label>
                            <div class="col-md-10"><input type="text" name="name" class="form-control"></div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">Email:</label>
                            <div class="col-md-10"><input type="text" name="email" class="form-control"></div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">Birthdate:</label>
                            <div class="col-md-10">
                                <div class="row">
                                    <div class="col-md-4">
                                        <input type="text" name="regular" class="form-control"><span class="help-block">Month</span>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" name="regular" class="form-control"><span class="help-block align-center">Date</span>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" name="regular" class="form-control"><span class="help-block align-right">Year</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">Reasons:</label>
                            <div class="col-md-10"><textarea rows="3" cols="5" name="textarea" class="auto form-control" style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 68px;"></textarea></div>
                        </div>


                    <div class="form-group">
                        <label class="col-md-2 control-label">Browsers:</label>
                        <div class="col-md-10">

                            @foreach ($poll->answers as $answer)
                                <p>{{Form::radio('answer', $answer->id)}} {{{$answer->answer}}}</p>
                            @endforeach
                        </div>
                    </div>
                    {{ Form::submit(Lang::get('poll.save')) }}
                    {{ Form::close() }}

                    <hr>

                    {{ link_to_route('polls', Lang::get('poll.back')) }}
                @stop

            </div>

        </div>

    </div>

</div>

@stop
