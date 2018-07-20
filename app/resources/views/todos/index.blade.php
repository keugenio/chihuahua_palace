@extends('layouts.app')

@section('content')
    <h1>Todos</h1>

    @if(count($todos)>0)
        @foreach ($todos as $todo)
        <div class="card">
            <div class="card-body row justify-content-between">
                <h4><a href="todo/{{$todo->id}}">{{$todo->text}}</a></h4>
                <span class="badge badge-danger mb-2 text-white pull-right">Due: {{ $todo->due}}</span>
            </div>
        </div>
        @endforeach
    @endif
@endsection