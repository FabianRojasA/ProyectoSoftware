<div class="form-group">
    {!! Form::label('nombre', 'Nombre del grupo')!!}
    {!! Form::text('nombre', null, ['class'=> 'form-control'])!!}
</div>

<div class="form-group">
    {{ Form::label('file', 'Logo del grupo')}}
    {{ Form::file('file')}}
</div>

<div class="form-group">
    
    {!! Form::submit('ENVIAR', ['class'=> 'btn btn-primary'])!!}
</div>