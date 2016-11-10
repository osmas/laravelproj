@extends('layout')

@section('content')

    <h1>Edit Note</h1>

    <form method="POST" action="/notes/{{$note->id}}">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}
        <div class="form-group">
            <textarea name="body" class="form-control" >{{$note->body}}</textarea>
        </div>
        <div class="form-group">
            <button class="btn btn-primary">Update Note</button>
        </div>

    </form>
@stop