var phonecatControllers = angular.module('phonecatControllers', []);

phonecatControllers.controller('PhoneListCtrl', ['$scope', '$http', 
	function($scope, $http) {
		$http.get(phonesUrl).success(function(result) {
		    $scope.phones = result.data;
		});

		$scope.orderProp = 'age';
	}
]);

phonecatControllers.controller('PhoneDetailCtrl', ['$scope', '$routeParams', '$http', 
	function($scope, $routeParams, $http) {
	    $http.get(phonesUrl +'/'+ $routeParams.phoneId).success(function(result) {
	      	$scope.phone = result.data;
	    });
	}
]);