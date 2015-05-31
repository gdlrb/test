@extends('app')

@section('content')

<h1>About</h1>


@if (count($people))
<h3>People I Like:</h3>
<ul>
    @foreach ($people as $person)
    <li>{{$person}}</li>
    @endforeach
</ul>
@endif

    <p>
    So you've learned a bit about registering routes, and dispatching to controller methods, but how exactly do we pass data to our views? Let me show you!
    </p>
@stop