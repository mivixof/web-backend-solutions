@extends('master')

@section('title') 
	dashboard 
@stop


@section('content')


		<h2><a href="{{ action('TodoController@overview')}}">Todo app</a></h2>


@stop