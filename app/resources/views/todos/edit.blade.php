@extends('layouts.app')

@section('content')

    <div class="row justify-content-between p-3">
        <h1>Edit Todo {{$todo->id}}</h1>
        <a class="lead" href="/todo/{{$todo->id}}">Go Back </a>
    </div>    
    {!! Form::open(['action' => ['TodosController@update', $todo->id], 'method' => 'POST']) !!}
        {{ Form::bsText('text', $todo->text) }}
        {{ Form::bsText('due', $todo->due) }}    
        {{ Form::hidden('_method', 'PUT')}}    
        {{ Form::bsTextArea('body', $todo->body) }}  

        <div class="row justify-content-center">
            {{ Form::bsSubmit('Submit', ['class'=>'btn btn-primary ']) }}  
        </div>
    {!! Form::close() !!}

@endsection