
var commonControllers = angular.module('commonControllers', []);

commonControllers.controller('HomeController', function($scope,$rootScope,$mdDialog)	{
	  console.debug("HomeController");
	  $rootScope.cartItems = [];
});


commonControllers.controller('PopupController', function($scope,$rootScope,$mdDialog,DataFactory)	{
	

	$scope.userForm = {};
	$scope.cancel = function() {
		 $mdDialog.cancel();
	};

	$scope.saveInfo =  function(){
		var data = { name : $scope.userForm.name ,company: $scope.userForm.company ,email:$scope.userForm.email}
	  	DataFactory.saveUserInfo(data).then(function(response){
		  	if(response.status == "success"){
				console.log("request success");
				 $mdDialog.cancel();
				swal("Thanks", "We will get back to you shortly", "success");
				$scope.userForm = {};
			}
	    });
	};
});








