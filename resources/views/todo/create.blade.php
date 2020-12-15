@extends('layouts.app')

@section('content')
<h1>Create Todo</h1>

<form action="{{ route('todo.store') }}" method="post">
    <div class="form-group">
        <label for="text">Text</label>
        <input type="text" name="text" value="" class="form-control">
    </div>
    <div class="form-group">
        <label for="body">Body</label>
        <input type="text" name="body" value="" class="form-control">
    </div>
    <div class="form-group">
        <label for="due">Due</label>
        <input type="text" name="due" value="" class="form-control">
    </div>
    <div>
    <button class="btn btn-primary">Create a new ToDo</button>
    </div>{{ csrf_field() }}
</form>

@endsection
