@extends('master')

@section('title') 
	Add todo 
@stop


@section('content')

	@if ($errors->any())

		<ul class="alert alert-danger">
			@foreach($errors->all() as $error)
				<li>
					{{$error}}
				</li>
			@endforeach
		</ul>

	@endif


		{!! Form::open([ 'url' => 'todo']) !!}

			<div class="form-group">
				{!! Form::label('title' , 'Todo:' ) !!}
			</div>	

			<div class="form-group">
				{!! Form::text('content' , null , ['class'=>'formcontrol' ,'autofocus' => 'autofocus']) !!}
			</div>

			<div class="form-group">
				{!! Form::submit('Add', ['class'=>'formcontrol btn btn-primary']) !!}
			</div>

		{!! Form::close() !!}

@stop