<div class="form-group">
	{!! Form::label('titulo','Titulo del Post') !!}
	{!! Form::text('titulo', null, ['class' =>'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('texto','Texto') !!}
	{!! Form::textarea('texto', null, ['class' =>'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::submit('Enviar', ['class' =>'btn btn-primary']) !!}
</div>