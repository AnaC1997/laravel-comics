@extends('layouts.app')

@section('content')
<section class="sectionJumbotron">
    <div>
        <img class="imgJumbotrom" src="{{ asset('images/jumbotron.jpg')}}" alt="jumbotron">
        <button class="bCurrent btn">CURRENT SERIES</button>
        @section('button')
        <span class="btn_loadM">
            <button class="btn">LOAD MORE</button>
        </span>
        @endsection
    </div>
</section>

@endsection