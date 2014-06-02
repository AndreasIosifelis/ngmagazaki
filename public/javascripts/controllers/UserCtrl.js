MZ.controller("UserCtrl", ['$localizer','$rootScope','$scope', '$http', function($localizer, $rootScope, $scope, $http){
        
        $rootScope.isAdmin = false;
        $rootScope.isLoggedIn = false;
        $rootScope.langId = "gr";
        
        $scope.LOGIN = $localizer.get("LOGIN");
        
        $scope.doLogin = function(){
            alert(44);
        };
        
}]);


