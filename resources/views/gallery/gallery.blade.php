
@extends('master')
@section('content')
<div class="row">
    <div class="col-md-12">
        <h1>My Galleries</h1>
    </div>
</div>
    <div class="row">
        <div class="col-md-8">
          Listing will come here
            @if($gallery->count() >0)
                <table class="table table-striped table-bordered table-responsive">
                    <thead>
                        <tr class="info">
                            <th>
                                Name of Gallery
                            </th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($gallery as $gallData)

                            <tr>
                                <td>{{$gallData->id}}</td>
                                <td>{{$gallData->name}}</td>
                                <td> <a href="{{url('gallery/view',$gallData->id)}}">View</a></td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif

         </div>


            <div class="col-md-4">
            @if(count($errors)>0)
                <div class="alert alert-danger">
                    <ul>
                        <li>
                            @foreach($errors->all() as $error)
                                {{$error}}
                            @endforeach
                        </li>
                    </ul>
                </div>
            @endif
                <form class="form" method="post" action="{{url('gallery/save')}} name="addImages">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group">
                        <input type="text" name="name" id="name" placeholder="name of gallery" value="{{old('name')}}" class="form-control">
                    </div>

                    <button class="btn btn-primary ">Save</button>

                </form>
            </div>
    </div>
@endsection