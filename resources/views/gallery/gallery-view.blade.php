@extends('master')
@section('content')
    <div class="row">
        <div class="col-md12">
            <h1>{{$gallery->name}}</h1>
        </div>
    </div>

    <div class="row">
            <div class="col-md12">
                <a href="{{url('gallery/list')}}" class="btn btn-primary">Back</a>
            </div>
        </div>

@endsection