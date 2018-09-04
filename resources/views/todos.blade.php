@extends('layout')

@section('content')

    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <form action="/create/todo" method="post">
                {{ csrf_field() }}
                <input type="text" name="todo" class="form-control input-lg" placeholder="create a new todo">
            </form>
        </div>
    </div>

    <hr>

    @foreach ($todos as $todo)
        @if(!$todo->completed)
            {{ $todo->todo }} <a href="{{ route('todo.delete', ['id' => $todo->id]) }}" class="btn btn-danger"> x </a>
            <a href="{{ route('todo.update', ['id' => $todo->id]) }}" class="btn btn-primary btn-xs"> update </a>
            <a href="{{ route('todos.completed', ['id' => $todo->id]) }}" class="btn btn-xs btn-success"> Mark as completed</a>
        @else
            <strike>{{ $todo->todo }}</strike> <span class="text-success"><p style="color:#31470a;">Completed &#9989;</p></span>
        @endif
        <hr>
    @endforeach

@endsection