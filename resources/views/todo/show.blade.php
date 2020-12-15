@extends('layouts.app')

@section('content')
    <a href="/" class="btn btn-default">Go Back</a>
<h1><a href="/todo/{{$todo->id}}">{{$todo->text}}</a></h1>
<div class="label label-danger">{{$todo->due}}</div>
<hr>
<p>{{$todo->body}}</p>
<br><br>
<a href="{{ route('todo.edit',$todo->id) }}" class="btn btn-default">Edit</a>
<form action="{{ route('todo.destroy', $todo->id) }}" method="post">{{ method_field('delete') }}
    <div>
    <button class="btn btn-danger">Delete</button>
    </div>{{ csrf_field() }}
</form>
@endsection
