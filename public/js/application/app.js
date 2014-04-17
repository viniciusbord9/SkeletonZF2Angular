var phonecatApp = angular.module('phonecatApp', ['ngRoute',  'phonecatControllers']);

phonecatApp.config(['$routeProvider',
 	function($routeProvider) {
    $routeProvider.
      	when('/', {
        	templateUrl: templateUrlPhoneListCtrl,
        	controller: 'PhoneListCtrl'
      	}).
      	when('/edit/:phoneId', {
	        templateUrl: templateUrlPhoneDetailCtrl,
	        controller: 'PhoneDetailCtrl'
      	}).
      	otherwise({
        	redirectTo: '/'
    	});	     
	}
]);
