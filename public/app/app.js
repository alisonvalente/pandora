'use strict';
var app = angular.module('pandora',[], function($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});

// Service
app.factory('siteService',function($http) {
	return {
		get: function(){
			return $http.get('/api/site');
		},
		put: function(data){
			var id = data.id;
			delete data.id;
			return $http.put('/api/site/'+id, data);
		},
		delete: function(id){
			return $http.delete('/api/site/'+id)
		}
	}
});

// Controller
app.controller('siteController', function($scope, siteService) {
	$scope.list = function(){
		siteService.get().then(function(response){
			console.log(response.data);
			$scope.site = response.data;
		});
	}

	$scope.update = function(){
		siteService.put($scope.site).then(function(response){
			$scope.list();
		});
	}

	$scope.destroy = function(data){
		if(confirm("Tem certeza que deseja excluir?")){
			siteService.delete(data.id).then(function(response){
				$scope.list();
			});
		}
	}
});