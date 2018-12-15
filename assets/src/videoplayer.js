
var videoplayer = angular.module('videoplayer',['ngResource','ngSanitize','ngMaterial','ngAnimate',	'commonControllers'	,'dataFactory',]);



videoplayer.run(['$rootScope','$location',function($rootScope,$location) {
	// console.log('Run  ');
}]);

videoplayer.config(['$httpProvider','$mdThemingProvider',function($httpProvider,$mdThemingProvider) {

$httpProvider.defaults.headers.post = {  
        	'Content-Type': 'application/x-www-form-urlencoded'
      	};

}]);


videoplayer.filter('offset', function() {
  return function(input, start) {
    start = parseInt(start, 10);
    return input.slice(start);
  };
});