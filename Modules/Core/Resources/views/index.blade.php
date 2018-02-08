@extends('core::layouts.master')

@section('nav')
    @include('core::layouts.nav')
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="text-center">
                <h1>{{ config('core.name', 'Laravel') }}</h1>
            </div>
        </div>
    </div>
@stop