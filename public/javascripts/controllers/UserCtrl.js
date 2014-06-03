MZ.controller("UserCtrl", ['$api','$user','$rootScope','$scope', '$http', function($api, $user, $rootScope, $scope, $http){       

        
        $scope.doLogin = function(){
            $api.ajax("user/login", {
                username: $scope.loginUsername,
                password: $scope.loginPassword
            }, 
            function(data){
                          
            });                        
        };
        
        
        
        $scope.SetLocale = $user.SetLocale;       
        $user.SetLocale($rootScope.langId);
        
}]);


