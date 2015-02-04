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

                <h4> Results </h4>

            </div>

            <div class="widget-content">

                @section('content')
                    @foreach ($poll->answers as $answer)
                        <p>{{{$answer->answer}}} ({{{$answer->votes}}})</p>
                    @endforeach

                    <hr>
                <table class="table table-striped table-bordered table-hover table-tabletools table-responsive datatable">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Birthdate</th>
                        <th>Browser</th>
                        <th>Reason</th>
                        <th>Time Submitted</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>
                            <a href="#">{{$user->name}}</a>
                        </td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->birthday }}</td>
                        <td>{{  \Answer::find($user->answer_id)->answer}}</td>
                        <td>{{ $user->reasons }}</td>
                        <td>{{ $user->created_at }}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                    {{ link_to_route('polls', Lang::get('poll.to_poll')) }}
                @stop

            </div>

        </div>

    </div>

</div>

@stop
