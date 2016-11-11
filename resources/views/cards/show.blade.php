@extends('layout')

@section('header')

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
@stop

@section('content')

<div class="row">
    <div class="col-md-6 col-md-offset-3">
    <h1>{{$card->title}}</h1>

    <ul class="list-group">
        @foreach($card->notes as $note)
        <li class="list-group-item">{{$note->body}}  <span class="pull-right"><a href="#">{{ $note->user->username }}</a></span><span class="pull-right"><a href="/notes/{{$note->id}}/edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></span></li>
        @endforeach
    </ul>

        <hr>
        <h3>Add a New Note</h3>
        <form method="POST" action="/cards/{{$card->id}}/notes">
            {{ csrf_field() }}
            <div class="form-group">
            <textarea name="body" class="form-control" >{{ old('body') }}</textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Add Note</button>
            </div>

        </form>
   @if (count($errors))
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }} </li>
                @endforeach
            </ul>
   @endif
    </div>
</div>
@stop