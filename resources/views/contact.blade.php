@extends('layouts.master')
    @section('content')
    @foreach($data as $d)
    <h1>another page for contact {{$d}}</h1>
    @endforeach
    @endsection