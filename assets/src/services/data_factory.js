
var dataFactory = angular.module('dataFactory', ['ngResource']);

var usersFactory = dataFactory.factory('DataFactory',function ($resource, $rootScope, $http, $q) {
	
	var dataObj = {};


	dataObj.saveUserInfo = function(postdata)	{
		
		var url = "/ddd";
		console.debug(postdata); 
		return new Promise(function(resolve, reject)	{
			$http.post(url,postdata,{}).success(function(data, status, headers, config) { 
				if(data.status == "success"){
					console.log("request success");
				}
				resolve( data );
			}).
			error(function(data, status, headers, config) {
				resolve( data ); console.warn('request failure : '+url);
			});
		});	
	};



	return dataObj;
	
});

