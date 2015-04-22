@extends('master')

@section('title') 
	Overview 
@stop



@section('content')
	
	<h1>TODO-app</h1>

	@if (count($todo)  || count($done) ) 

		<a href="{{ action('TodoController@addpage')}}">Add todo</a>

		<h3>Todo</h3>

		@if(count($todo))

			<ul>

				@foreach ($todo as $todo)

					
						<li>
							{!! Form::open([ 'url' => 'done/edit']) !!}
								{!! Form::hidden('poster', $todo->id) !!}
								{!! Form::submit('done') !!}
							{!! Form::close() !!}
									{{ $todo->content }}
							{!! Form::open([ 'url' => 'todo/delete']) !!}
								{!! Form::hidden('poster', $todo->id) !!}
								{!! Form::submit('remove') !!}
							{!! Form::close() !!}
						</li>
					

				@endforeach

			</ul>
		@else

			<p>All done.</p>

		@endif

		<h3>Done</h3>
		@if(count($done))
			<ul>
				@foreach ($done as $done)
					<li>
							{!! Form::open([ 'url' => 'todo/edit']) !!}
								{!! Form::hidden('poster', $done->id) !!}
								{!! Form::submit('todo') !!}
							{!! Form::close() !!}
									{{ $done->content }}
							{!! Form::open([ 'url' => 'todo/delete']) !!}
								{!! Form::hidden('poster', $done->id) !!}
								{!! Form::submit('remove') !!}
							{!! Form::close() !!}
					</li>
				@endforeach

			</ul>
		@else

			<p>Stuff to do, places to be.</p>

		@endif		

	@else 
		<h2>There are no todo's</h2>
		<a href="{{ action('TodoController@addpage')}}">Add todo</a>
	@endif



@stop