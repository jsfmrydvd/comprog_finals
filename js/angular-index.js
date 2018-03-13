var myApp = angular.module("myApp",[]);
myApp.controller('loginCtrl', function($scope) {
    $scope.logo = "iteam store";
    $scope.price = "80";
    $scope.title = "Comprog2";
    $scope.itemList = [{
      image: "img/watch-2.jpeg",
      price: "hehehe",
    }];
});
