


var itemHolder = videoplayer.directive('itemHeader', function  ($rootScope,$mdDialog,$timeout) {
	return {
		templateUrl: window.onetoten.base_url+'assets/src/views/header.html',
		restrict : 'E',
		controller : function($scope)	{

			$scope.ui = { showcart:false }

		$scope.showCart =  function(){
				$scope.ui.showcart =  !$scope.ui.showcart;
		};

		$scope.login =  function(e){
			$scope.ui.showcart = false; 
			$timeout(function() {
					$mdDialog.show({
					controller: 'PopupController',
					templateUrl: window.onetoten.base_url+'assets/src/views/login.html',
					parent: angular.element(document.body),
					targetEvent: e,
					clickOutsideToClose:false,
					escapeToClose:false
				});
			},200)
			

			
		};

		$scope.register =  function(e){
			$scope.ui.showcart = false;
			$timeout(function() {
				
				$mdDialog.show({
					controller: 'PopupController',
					templateUrl: window.onetoten.base_url+'assets/src/views/register.html',
					parent: angular.element(document.body),
					targetEvent: e,
					// clickOutsideToClose:false,
					// escapeToClose:false
				}); 
			},200)
			 
				
		};

		$scope.addTocart =  function(item) {
			var items = $rootScope.cartItems;
			var isExist =  items.filter(function(item,index) {
				if(item.itemId == item.itemId){
					return item;
				}
			});

			if(isExist.length == 0){
				$rootScope.cartItems.push(isExist[0]);
			}
		};
			

		},
		link : function() {
			console.debug("itemHeader");
			
		}
	}
});
		


var itemHolder = videoplayer.directive('itemHolder', function  ($rootScope,$mdDialog) {
	return {
		templateUrl: window.onetoten.base_url+'assets/src/views/item_holder.html',
		restrict : 'E',
		controller : function($scope)	{

		$scope.itemList = [
  {
    "name": "std1",
    "price": 2000,
    "items": [
      "pen",
      "books"
    ],
    "img_path": "std1.jpg"
  },
  {
    "name": "std2",
    "price": 4000,
    "items": [
      "pen",
      "books"
    ],
    "img_path": "std1.jpg"
  },
  {
    "name": "std3",
    "price": 6000,
    "items": [
      "pen",
      "books"
    ],
    "img_path": "std1.jpg"
  },
  {
    "name": "std4",
    "price": 8000,
    "items": [
      "pen",
      "books"
    ],
    "img_path": "std1.jpg"
  },{
    "name": "std2",
    "price": 4000,
    "items": [
      "pen",
      "books"
    ],
    "img_path": "std1.jpg"
  },
  {
    "name": "std3",
    "price": 6000,
    "items": [
      "pen",
      "books"
    ],
    "img_path": "std1.jpg"
  },
  {
    "name": "std4",
    "price": 8000,
    "items": [
      "pen",
      "books"
    ],
    "img_path": "std1.jpg"
  },{
    "name": "std2",
    "price": 4000,
    "items": [
      "pen",
      "books"
    ],
    "img_path": "std1.jpg"
  },
  {
    "name": "std3",
    "price": 6000,
    "items": [
      "pen",
      "books"
    ],
    "img_path": "std1.jpg"
  },
  {
    "name": "std4",
    "price": 8000,
    "items": [
      "pen",
      "books"
    ],
    "img_path": "std1.jpg"
  }
]


		$scope.itemsPerPage = 6;
		$scope.currentPage = 0;

		  $scope.range = function() {
		    var rangeSize = 3;
		    var ret = [];
		    var start;

		    start = $scope.currentPage;
		    if ( start > $scope.pageCount()-rangeSize ) {
		      start = $scope.pageCount()-rangeSize+1;
		    }

		    for (var i=start; i<start+rangeSize; i++) {
		      ret.push(i);
		    }
		    return ret;
		  };

		$scope.prevPage = function() {
			if ($scope.currentPage > 0) {
				$scope.currentPage--;
			}
		};

		$scope.prevPageDisabled = function() {
			return $scope.currentPage === 0 ? "disabled" : "";
		};

		$scope.pageCount = function() {
			return Math.ceil($scope.itemList.length/$scope.itemsPerPage)-1;
		};

		$scope.nextPage = function() {
			if ($scope.currentPage < $scope.pageCount()) {
				$scope.currentPage++;
			}
		};

		$scope.nextPageDisabled = function() {
			return $scope.currentPage === $scope.pageCount() ? "disabled" : "";
		};

		$scope.setPage = function(n) {
    $scope.currentPage = n;
  };

	
		},
		link : function() {
		}
	}
});


var menuList = videoplayer.directive('offerList', function  ($rootScope,$mdDialog) {
	return {
		templateUrl: window.onetoten.base_url+'assets/src/views/offer_list.html',
		restrict : 'E',
		controller : function($scope)	{
	
		},
		link : function() {
			console.debug("offerlist");
		}
	}
});

var menuList = videoplayer.directive('menuList', function  ($rootScope,$mdDialog) {
	return {
		templateUrl: window.onetoten.base_url+'assets/src/views/menu_list.html',
		restrict : 'E',
		controller : function($scope)	{
		
		},
		link : function() {
			
		}
	}
});

var itemCarousel = videoplayer.directive('itemCarousel', function  ($rootScope,$mdDialog,$timeout) {
	return {
		templateUrl: window.onetoten.base_url+'assets/src/views/carousel.html',
		restrict : 'E',
		controller : function($scope)	{
	
		},
		link : function() {
		$('.car_items').slick({
		  infinite: true,
		  slidesToShow: 5,
		  slidesToScroll: 1,
		   nextArrow: '<i class="material-icons icon_slick_prev">arrow_back</i>',
		   prevArrow: '<i class="material-icons icon_slick_next">arrow_forward</i>'
		  });
			console.debug("carousel");
		}
	}
});




var cartItems = videoplayer.directive('cartItem', function  ($rootScope,$mdDialog) {
	return {
		templateUrl: window.onetoten.base_url+'assets/src/views/cart.html',
		restrict : 'E',
		controller : function($scope)	{
			$rootScope.cartItems = [
			{
			"name": "std1",
			"price": 2000,
			"items": [
			"pen",
			"books"
			],
			"img_path": "std1.jpg"
			},
			{
			"name": "std2",
			"price": 4000,
			"items": [
			"pen",
			"books"
			],
			"img_path": "std1.jpg"
			},
			{
			"name": "std3",
			"price": 6000,
			"items": [
			"pen",
			"books"
			],
			"img_path": "std1.jpg"
			},
			{
			"name": "std4",
			"price": 8000,
			"items": [
			"pen",
			"books"
			],
			"img_path": "std1.jpg"
			},{
			"name": "std2",
			"price": 4000,
			"items": [
			"pen",
			"books"
			],
			"img_path": "std1.jpg"
			},
			{
			"name": "std3",
			"price": 6000,
			"items": [
			"pen",
			"books"
			],
			"img_path": "std1.jpg"
			}]
			console.debug($rootScope.cartItems)
	
		},
		link : function() {
			
		}
	}
});



var cartItems = videoplayer.directive('itemFooter', function  ($rootScope,$mdDialog) {
	return {
		templateUrl: window.onetoten.base_url+'assets/src/views/footer.html',
		restrict : 'E',
		controller : function($scope)	{


	
		},
		link : function() {
			
		}
	}
});


// admin related directives




var kitArea = videoplayer.directive('dashboardContainer', function  ($rootScope,$mdDialog) {
	return {
		templateUrl: window.onetoten.base_url+'assets/src/views/dashboard_container.html',
		restrict : 'E',
		controller : function($scope)	{


	
		},
		link : function() {
			console.debug("dashboardContainer")
			$('.collapsible').collapsible();
		}
	}
});


var totalprogress = videoplayer.directive('totalProgress', function  ($rootScope,$mdDialog) {
	return {
		templateUrl: window.onetoten.base_url+'assets/src/views/total_progress.html',
		restrict : 'E',
		controller : function($scope)	{


	
		},
		link : function() {
			console.debug("total_progress")
		}
	}
});

var kitArea = videoplayer.directive('kitArea', function  ($rootScope,$mdDialog) {
	return {
		templateUrl: window.onetoten.base_url+'assets/src/views/drag_drop.html',
		restrict : 'E',
		controller : function($scope)	{

		$scope.itemList =[
		  {
		    "item": "1",
		    "name": "one_2"
		  },
		  {
		    "item": "2",
		    "name": "one_22"
		  },
		  {
		    "item": "1",
		    "name": "one_eee"
		  },
		  {
		    "item": "1",
		    "name": "one_ewwwe"
		  },
		  {
		    "item": "1",
		    "name": "one_2www"
		  },
		  {
		    "item": "1",
		    "name": "one_2"
		  },
		  {
		    "item": "1",
		    "name": "one_2"
		  }
		]
		$scope.dropedList = [];

	
		},
		link : function() {
			console.debug("drag_drop")
		}
	}
});


