


{!! Form::label('Name') !!}
{!! Form::text('name',null,'') !!}

{!! Form::label('Description') !!}
{!! Form::text('description',null,'') !!}

{!! Form::label('text') !!}
{!! Form::text('text',null,'') !!}

{!! Form::label('blogNo') !!}
{!! Form::text('blogNo',null,'') !!}


{!! Form::label('Published At') !!}
{!! Form::input('date','publishedAt',date('Y-m-d')) !!}

{!!Form::submit($submitButton)   !!}