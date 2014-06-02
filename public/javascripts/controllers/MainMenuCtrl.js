MZ.controller("MainMenuCtrl", ['$scope', '$http', function($scope, $http){
        
        $scope.menuItems = [{
                label: "Home",
                link: "#/page/home"
        }, {
            label: "About",
            link: "#/page/about"
        }, {
            label: "Terms",
            link: "#/page/terms"
        }, {
            label: "Contact",
            link: "#/page/contact"
        }, {
            label: "Cart",
            link: "#/cart"
        }, {
            label:"My account",
            link: "#",
            children:[{
                    label:"Login",
                    link: "#/user/login"
            }, {
                label: "Register",
                link: "#/user/register"
            }, {
                label: "Profile",
                link: "#/user/profile"
            }, {
                label: "Logout",
                link: "#/user/logout"
            }]
        }];
        
}]);


