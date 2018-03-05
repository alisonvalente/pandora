@extends('panel::layouts.master')

@section('head-includes')
    @include('core::layouts.angular.includes')
    <style>
        .square {
            margin: 10px;
            height: 60px;
            width: 60px;
            border-radius: 10px;
            border: 3px solid white;
            cursor: pointer;
        }
        .theme1 {background-color: #ffffff;}
        .theme2 {background-color: #33FFBD;}
        .theme3 {background-color: #FF5733;}
        .theme4 {background-color: #DBFF33;}
        .theme5 {background-color: #FFBD33;}
        .chosenTheme {border: 5px inset white;}
    </style>
@stop

@section('content')
    <div class="container" ng-app="pandora" ng-controller="siteController">
        <div class="row" ng-init="list()">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default" ng-class="site.theme">
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
                        <div class="form-group">
                            <label>Cor de fundo: <% site.theme %></label>
                            <div class="container">
                                <div class="row">
                                    <div ng-repeat="theme in ['theme1','theme2','theme3','theme4','theme5']" 
                                        class="col-md-1 square <% theme %>" 
                                        ng-class="{'chosenTheme': isTheme(theme)}" 
                                        ng-click="changeTheme(theme)"></div>
                                </div>
                            </div>
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
