@extends('layouts.app')

@section('content')
    <h1>My Messages</h1>
    @if (count($messages)>0)
        @foreach ($messages as $message)
            <ul class="list-group mt-2">
                <li class="list-group-item">Name: {{$message->name}}</li>
                <li class="list-group-item">Email: {{$message->email}}</li>
                <li class="list-group-item">Message: {{$message->message}}</li>                               
            </ul>
        @endforeach

    @endif
@endsection

