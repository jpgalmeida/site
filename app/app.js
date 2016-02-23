//Define an angular module for our app
var app = angular.module('silabasApp', []);

app.controller('silabasController', function($scope, $http) {
	
  getItem(); // Load all available items 
  function getItem(){  
  $http.post("ajax/getItem.php").success(function(data){
        $scope.items = data;
      
      console.log(data);
       });
  };
});