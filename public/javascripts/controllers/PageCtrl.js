MZ.controller("PageCtrl", ['ApiService', '$scope', '$rootScope', '$routeParams', function(ApiService, $scope, $rootScope, $routeParams) {

        
        var data ={
            page : $routeParams.page == undefined ? "home" : $routeParams.page
        };
        
        console.log(data);
        
        ApiService.ajax(
                "site/page",
                data, function(data) {
            $rootScope.selectedPage = $routeParams.page == undefined ? "home" : $routeParams.page;
            $rootScope.pageTitle = data.page.pageTitle;
            $rootScope.pageContent = data.page.pageContent;
            console.log(data);
        });




    }]);


