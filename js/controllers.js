var portfolioControllers = angular.module('portfolioControllers', []);

portfolioControllers.controller('PortfolioController', ['$scope', '$http', function($scope, $http) {
    $http.get('works.json').success(function(data) {
        $scope.works = data;
        $scope.workOrder = 'title';
    });
}]);

portfolioControllers.controller('DetailsController', ['$scope', '$http', '$routeParams', function($scope, $http, $routeParams) {
    $http.get('works.json').success(function(data) {
        $scope.works = data;
        $scope.whichWork = $routeParams.itemId;
        
        if($routeParams.itemId > 0) {
          $scope.prevItem = Number($routeParams.itemId)-1;
        } else {
          $scope.prevItem = $scope.works.length-1;
        }
        if($routeParams.itemId < $scope.works.length-1) {
          $scope.nextItem = Number($routeParams.itemId)+1;
        } else {
          $scope.nextItem = 0;
        }
    });
}]);