@extends('...layouts.master')
    @section('content')
    <h1>
@if(Session::has('flash message'))
    <div class="alert alert-success">
        {{ Session::get('flash_message') }}
    </div>
@endif
@foreach($student as $bt)


      <a href="{{ route('student.show', $bt->id) }}"> {{$bt->city  }}</a><br>

@endforeach
    </h1>