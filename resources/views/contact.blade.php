@extends('layouts.app')

@section('content')
    <h1>Contact The Chihuahua Palace</h1>

    {!! Form::open(['url' => 'contact/submit']) !!}
    <div class="container mt-4 card p-2">
        <form>
            <div class="form-group">
                <div class="col">
                    {{Form::label('name', 'Name')}}
                    {{Form::text('name', '', ['class'=>'form-control', 'placeholder'=>'enter name'])}}
                </div>
            </div>

            <div class="form-group">
                <div class="col">
                    {!! Form::label('email', 'E-Mail') !!}
                    {{ Form::text('email', '', ['class'=>'form-control', 'placeholder'=>'example@gmail.com']) }}
                </div>
            </div>
            <div class="d-inline align-items-start justify-content-start">
                <div class="col">
                    {{ Form::label('message', 'Message') }}
                    {{ Form::textarea('message', '', ['class'=>'form-control']) }}
                </div>
            </div> 
            <div class="row flex-row justify-content-center mt-2">
                {{ Form::submit('Submit', ['class'=>'btn btn-primary'])}}
            </div>               
        </form>
    </div>
        
    {!! Form::close() !!}

@endsection