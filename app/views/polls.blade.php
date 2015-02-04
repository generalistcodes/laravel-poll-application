@extends('layouts/master')

@section('title')
{{{ Lang::get('poll.list_of_polls') }}}
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

                <h4>{{{ Lang::get('poll.list_of_polls') }}}</h4>

            </div>

            <div class="widget-content">

                @section('content')
                    <ul>
                        @foreach ($polls as $poll)
                            <li><a href="{{{ route('poll_detail', array( 'id' => $poll->id, )) }}}">{{{$poll->question}}}</a></li>
                        @endforeach
                    </ul>
                @stop


            </div>

        </div>

    </div>

</div>

@stop
