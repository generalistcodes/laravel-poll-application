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
                            <label class="col-md-2 control-label">Info:</label>
                            <div class="col-md-10">
                                <div class="row">
                                    <div class="col-md-4">
                                        {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Full Name']) }}
                                        <span class="help-block">Name</span>
                                    </div>
                                    <div class="col-md-4">
                                        {{ Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'mail@example.com']) }}
                                        <span class="help-block align-center">Email</span>
                                    </div>
                                    <div class="col-md-4">
                                        {{ Form::text('birthday', null, ['class' => 'form-control', 'placeholder' => '01/01/1969']) }}
                                        <span class="help-block align-right">Birthdate</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">Reasons:</label>
                            <div class="col-md-10">
                                {{ Form::textarea('reasons', null, ['size' => '3x5','class' => 'auto form-control','style' => 'overflow: hidden; word-wrap: break-word; resize: horizontal; height: 68px;']) }}
                            </div>
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
