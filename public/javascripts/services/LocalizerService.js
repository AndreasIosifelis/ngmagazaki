MZ.factory('$localizer', ['$rootScope', function($rootScope){
    
    return {
        get: function(val){
            return this[$rootScope.langId][val];
        },
        "en": {
            LOGIN: "Login"
        },
        "gr": {
            LOGIN: "Σύνδεση"
        }
    };
    
}]);


