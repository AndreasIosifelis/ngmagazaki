MZ.controller("UserCtrl", ['$rootScope','$scope', '$http', function($rootScope, $scope, $http){
        
        $rootScope.isAdmin = false;
        $rootScope.isLoggedIn = false;
        
        
        $scope.LOGIN = "Σύνδεση";
        
        $scope.doLogin = function(){
            alert(44);
        };
        
}]);


