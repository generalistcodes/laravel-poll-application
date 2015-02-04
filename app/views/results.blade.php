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
                    @foreach ($poll->answers as $answer)
                        <p>{{{$answer->answer}}} ({{{$answer->votes}}})</p>
                    @endforeach

                    <hr>

                    {{ link_to_route('polls', Lang::get('poll.to_poll')) }}
                @stop

            </div>

        </div>

    </div>

</div>

@stop
