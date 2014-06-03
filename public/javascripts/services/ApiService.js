MZ.factory("$api", ["$http", function($http){
    
    
    return {
        ajax: function(url, json, callBack){
            
            url = url.split("/");

            var path = window.location.href;
            path = path.split("#")[0];
            path = path + "?c={ctrl}&m={fnc}";
            path = path.replace(/{ctrl}/, url[0]);
            path = path.replace(/{fnc}/, url[1]);
            
            
            var xhr = $http({
                method: "POST",
                url: path,
                data: json,
                responseType: "json",
                headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'}
            });
            
            xhr.success(callBack);
            
            xhr.error(function(){
                console.log("Server Error!");
            });
            
            return xhr;
            
        }
    };
    
    
}]);


