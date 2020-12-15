@extends('layouts.app')

@section('content')
<a href="/todo/{{ $todo->id }}" class="btn btn-default">Go Back</a>
<h1>Edit Todo</h1>

<form action="{{ route('todo.update', $todo->id) }}" method="post">{{ method_field('put') }}
    <div class="form-group">
        <label for="text">Text</label>
    <input type="text" name="text" value="{{ $todo->text }}" class="form-control">
    </div>
    <div class="form-group">
        <label for="body">Body</label>
        <input type="text" name="body" value="{{ $todo->body }}" class="form-control">
    </div>
    <div class="form-group">
        <label for="due">Due</label>
        <input type="text" name="due" value="{{ $todo->due }}" class="form-control">
    </div>
    <div>
    <button class="btn btn-primary">Create a new ToDo</button>
    </div>{{ csrf_field() }}
</form>

@endsection
