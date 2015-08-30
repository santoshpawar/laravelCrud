
@extends('layouts.blog')
@section('content')
<h1>Home Page For Blog Display</h1>


<hr>

Name:{{$edit->name }}<br>
Name:{{$edit->id }}<br>
Description: {{$edit->description }}<br>
Blog No:{{$edit->blogNo }}<br>
Blog No:{{$edit->publishedAt  }}<br>
<hr>

    {!! Form::model($edit,[

'method'=>'PATCH',
'route'=>['blog.update',$edit->id]


]) !!}


  @include('blog.form',['submitButton'=>'Update Form'])



{!! Form::close() !!}

@if($errors->any())
    @foreach($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
@endif



