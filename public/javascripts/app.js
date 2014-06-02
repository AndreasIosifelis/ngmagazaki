var MZdeps = [
    'ngRoute'
],
        MZ = angular.module("MZ", MZdeps);

MZ.config(['$routeProvider', function($routeProvider) {

        $routeProvider.
                when("/", {
                    templateUrl: "page/home"
                }).
                otherwise("/");
    }]);


