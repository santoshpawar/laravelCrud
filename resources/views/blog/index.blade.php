@extends('layouts.blog')
@section('content')
<h1>Home Page For Blog Display</h1>

<a href="{{url('blog/create')}}">Create</a>
<hr>
@foreach($show as $sh)
Name:{{$sh->name }}<br>
Description: {{$sh->description }}<br>
Blog No:{{$sh->blogNo }}<br>
Blog No:{{$sh->publishedAt  }}<br>
<hr>
@endforeach


