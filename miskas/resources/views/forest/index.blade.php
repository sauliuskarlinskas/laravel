@extends('forest.layout')

@section('content')

<h1>
    Sveiki atvyke visi!
</h1>

@if($yes)
<h2>
    {{$who}}
</h2>
@else
<h2>
    {{$what}}
</h2>
@endif

@endsection

@section('title','Big forest')