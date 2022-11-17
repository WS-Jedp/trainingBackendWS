@extends("Layouts.layout")

@section("Document",'title')


@section('content')

    @foreach($tickets as $ticket)
        <p>{{$ticket->name}}</p>
    @endforeach

@endsection