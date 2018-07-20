@extends('layouts.app')

@section('content')
    <a clas="btn btn-default" href="/todo">Back</a>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">{{$todo->text}}</h4>
            <span class="badge badge-danger mb-2 text-white">Due: {{$todo->due}}</span>
            <hr />
            <p class="card-text">{{$todo->body}}</p>
            <br /><br />
            <div class="row justify-content-around">
                <a class="btn btn-warning" href="/todo/{{$todo->id}}/edit">Edit</a>
                {!! Form::open(['action' => ['TodosController@destroy', $todo->id], 'method' => 'POST']) !!} 
                    {{ Form::hidden('_method', 'DELETE')}}        
                    {{ Form::bsSubmit('Delete', ['class'=>'btn btn-dark']) }}                
                {!! Form::close() !!} 
            </div>            
        </div>      
    </div>

@endsection