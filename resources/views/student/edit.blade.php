@extends('...layouts.master')
    @section('content')


        <h2>Write a  new article</h2>
        <hr>

    {!!Form::model($student,[
        'method'=>'PATCH',
        'route'=>['student.update',$student->id]
        ])
     !!}

        @include('student.form',['sumbitButtonText'=>'Update Student']);

    {!!Form::close()!!}



    @include('errors.list')

      @endsection

    @section('fluid')
            <h3>second section</h3>
    @endsection