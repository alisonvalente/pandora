@extends('panel::layouts.master')

@section('head-includes')
    @include('core::layouts.angular.includes')
@stop

@section('content')
    <div class="container" ng-app="pandora" ng-controller="siteController">
        <div class="row" ng-init="list()">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><% site.name %></div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="form-group">
                            <label>Nome:</label>
                            <input type="text" class="form-control" ng-model="site.name">
                        </div>
                        <div class="form-group">
                            <label>E-mail:</label>
                            <input type="text" class="form-control" ng-model="site.description">
                        </div>
                        <div class="form-group text-center">
                            <button type="button" class="btn btn-primary" ng-click="update()">Salvar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
