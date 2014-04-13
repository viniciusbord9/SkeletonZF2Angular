var phonecatControllers = angular.module('phonecatControllers', []);

	phonecatControllers.controller('PhoneListCtrl', ['$scope', '$http',
	  function($scope, $http) {
	    $http.get(phonesUrl).success(function(data) {
	      $scope.phones = data;
	    });

	    $scope.orderProp = 'age';
	  }]);


    phonecatControllers.controller('PhoneDetailCtrl', ['$scope', '$routeParams', '$http',
	  function($scope, $routeParams, $http) {
	    $http.get(phonesUrl +'/'+ $routeParams.phoneId).success(function(data) {
	      $scope.phone = data;
	    });
	  }]);