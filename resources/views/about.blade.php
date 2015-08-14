@extends('layouts.master')
    @section('content')
        <h1>Laravel self tutorials Foreach trimmed in laravel op is<br></h1>
        @foreach($student as $santo)
        <h2> {{$student->name}}</h2>
        @endforeach
    @endsection

    @section('fluid')
        <h2>Fluid section</h2>
    @endsection