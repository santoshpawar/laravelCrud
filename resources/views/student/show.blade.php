@extends('...layouts.master')
    @section('content')
        <h1>Student<br></h1>
<hr>

         <h5> Name:   {{$student->name}}</h5>
         <h5> Name:   {{$student->city}}</h5>
         <h5> Name:   {{$student->body}}</h5>
         <h5> Name:   {{$student->phoneno}}</h5>

    @endsection

