@extends('layouts.blog')
@section('content')
<h1>Home Page For Blog Display</h1>


<hr>


      {!! Form::open([
            'route'=>'blog.store',
            'method'=>'Post'
        ]) !!}

            @include('blog.form',['submitButton'=>'Add Blog'])


    {!! Form::close() !!}

@if($errors->any())
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
@endif


