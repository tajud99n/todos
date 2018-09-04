@extends('layout')

@section('content')

    <div class="row">
          <div class="col-lg-12">
               <form action="{{ route('todo.edit', ['id' => $todo->id]) }}" method="post">
                    {{ csrf_field() }}
                    <input type="text" name="todo" class="form-control input-lg" value="{{ $todo->todo }}" placeholder="create a new todo">
               </form>
          </div>
    </div>

@endsection