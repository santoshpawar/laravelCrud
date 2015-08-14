@extends('...layouts.master')
    @section('content')

        <h2>Write a  new article</h2>
        <hr>

        {!!Form::open([
            'route'=>'student.store'
        ])!!}


        @include( 'student.form', ['sumbitButtonText'=>'Add student'] )



       {!!Form::close()!!}



        @include('errors.list')

      @endsection

    @section('fluid')
            <h3>second section</h3>
    @endsection