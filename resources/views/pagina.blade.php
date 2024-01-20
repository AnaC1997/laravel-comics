@extends('layouts.app')

@section('content')
<section class="sectionJumbotron">
    <div class="container">
        <img class="imgJumbotrom" src="{{ asset('images/jumbotron.jpg')}}" alt="jumbotron">
        <button class="bCurrent btn">CURRENT SERIES</button>
        @section('button')
        <button class="btn">LOAD MORE</button>
        @endsection
    </div>
</section>

@endsection