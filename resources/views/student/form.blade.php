
   <div class="form-group">
        {!! Form::label('name','Name:') !!}
        {!! Form::text('name',NULL,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('city','City:')!!}
        {!! Form::text('city','sasa',['class' =>'form-control'])!!}
    </div>

    <div class="form-group">
        {!! Form::label('phoneno','Phone no:')!!}

        {!! Form::text('phoneno',NULL,['class' =>'form-control'])!!}
    </div>


     <div class="form-group">
        {!! Form::label('body','Body:')!!}

        {!! Form::textarea('body',null,['class' =>'form-control']) !!}
     </div>

        <div class="form-group">
        {!! Form::label('published at','Published On:')!!}

        {!! Form::input('date','publichedAt',date('Y-m-d'),['class' =>'form-control']) !!}
        </div>
 <div class="form-group">
        {!! Form::submit($sumbitButtonText,['class'=>'btn btn-primary form-control'])!!}
    </div>