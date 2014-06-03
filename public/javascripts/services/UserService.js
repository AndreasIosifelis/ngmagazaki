MZ.factory("$user", ['$rootScope','$localizer', function($rootScope, $localizer){
        
        $rootScope.isAdmin = false;
        $rootScope.isLoggedIn = false;
        
        return {
            SetLocale: function(langId){
                $rootScope.langId = langId;
                $rootScope.LOGIN = $localizer.get("LOGIN");
                $rootScope.USERNAME = $localizer.get("USERNAME");
                $rootScope.PASSWORD = $localizer.get("PASSWORD");
                $rootScope.ABOUT = $localizer.get("ABOUT");
                $rootScope.HOME = $localizer.get("HOME");
                $rootScope.BLOG = $localizer.get("BLOG");
                $rootScope.PROFILE = $localizer.get("PROFILE");
                $rootScope.TERMS = $localizer.get("TERMS");
                $rootScope.PRODUCTS = $localizer.get("PRODUCTS");
                $rootScope.CART = $localizer.get("CART");
                $rootScope.ADMINISTRATION = $localizer.get("ADMINISTRATION");
                $rootScope.CONTACT = $localizer.get("CONTACT");
                $rootScope.MY_ACCOUNT = $localizer.get("MY_ACCOUNT");
                $rootScope.REGISTER = $localizer.get("REGISTER");
            }
        };        
}]);


