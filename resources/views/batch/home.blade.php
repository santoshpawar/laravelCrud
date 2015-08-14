@extends('...layouts.master')
    @section('content')
    <h1>

@foreach($batch as $bt)


      <a href="{{url('/batch',$bt->id)}}"> {{$bt->name  }}</a><br>

@endforeach
    </h1>