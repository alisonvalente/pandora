@extends('site::layouts.master')

@section('content')
	<div class="container">
        <div class="row text-center">
		    <h1>Hello World</h1>

		    <p>
		        This view is loaded from module: {!! config('site.name') !!}
		    </p>
		</div>
	</div>
@stop
