@extends('core::layouts.master')

@section('branding')
	{{ config('core.name', 'Laravel') }} # {{ config('panel.name') }}
@stop

@section('nav')
	@include('core::layouts.nav')
@stop