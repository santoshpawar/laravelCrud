@extends('...layouts.master')
    @section('content')
        <h1>Student<br></h1>

    @foreach($student as $bt)
          <h5>{{$bt->body}}</h5>
         <h3> <a href="{{url('/student',$bt->id)}}"> {{$bt->name  }}</a><br></h3>
          <hr>
    @endforeach


    @endsection

    @section('fluid')
        <h2>Fluid section</h2>
    @endsection
    @section('footer')
    @endsection

























