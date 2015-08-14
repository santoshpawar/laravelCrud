@extends('...layouts.master')
    @section('content')


        <h2>Write a  new article</h2>
        <hr>
    {!!Form::open(['url'=>'batch'])!!}

    <div class="form-group">
        {!!Form::label('name','Name:') !!}
        {!!Form::text('name',NULL,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
    {!!Form::label('city','City:')!!}
    {!!Form::text('city',NULL,['class' =>'form-control'])!!}
    </div>

    <div class="form-group">
    {!!Form::label('phoneno','Phone no:')!!}

    {!!Form::text('phoneno',NULL,['class' =>'form-control'])!!}
    </div>

    <div class="form-group">
    {!!Form::submit('Add batch',['class'=>'btn btn-primary form-control'])!!}
    </div>

    {!!Form::close()!!}


      @endsection

    @section('fluid')
            <h3>second section</h3>
    @endsection