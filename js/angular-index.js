var myApp = angular.module("myApp",[]);
myApp.controller('loginCtrl', function($scope) {
    $scope.logo = "iteam store";
    $scope.price = "80";
    $scope.title = "Comprog2";
    $scope.logOut = function(){
      alert();
      console.log('tangina');
    }

});
