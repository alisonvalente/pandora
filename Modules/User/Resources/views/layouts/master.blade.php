@extends('core::layouts.master')

@section('branding')
	{{ config('core.name', 'Laravel') }} # {{ config('user.name') }}
@stop

@section('nav')
	@include('core::layouts.nav')
@stop