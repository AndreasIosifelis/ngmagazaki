<!DOCTYPE html>
<html ng-app="MZ">
    <head>
        <meta charset="utf-8">
        <title>JS Bin</title>
        <?= css(base_url("public/stylesheets/bootstrap.min.css")) ?>
        <?= css(base_url("public/stylesheets/bootstrap-theme.min.css")) ?>
        <?= css(base_url("public/stylesheets/main.css")) ?>
        
        
        <?= js("http://code.jquery.com/jquery-2.1.0.min.js") ?>
        <?= js(base_url("public/javascripts/bootstrap/bootstrap.min.js")) ?>
        
        <?= js(base_url("public/javascripts/angular/angular.min.js")) ?>
        <?= js(base_url("public/javascripts/angular/angular-route.min.js")) ?>
        <?= js(base_url("public/javascripts/app.js")) ?>
        
        <!-- Services -->
        <?= js(base_url("public/javascripts/services/ApiService.js")) ?>
        <!-- Services -->
        
        <!-- Controllers -->
        <?= js(base_url("public/javascripts/controllers/UserCtrl.js")) ?>
        <?= js(base_url("public/javascripts/controllers/PageCtrl.js")) ?>
        <?= js(base_url("public/javascripts/controllers/ProductCtrl.js")) ?>
        <!-- Controllers -->
        

        
        </head>
    <body>

        <nav class="navbar navbar-inverse" role="navigation" ng-controller="UserCtrl">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">MZ</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li ng-class="(selectedPage=='home') ? 'active' : ''"><a href="#page/home">Home</a></li>
                        <li ng-class="(selectedPage == 'blog' ? 'active': '')"><a href="#/blog">Blog</a></li>
                        <li ng-class="(selectedPage == 'products' ? 'active': 'dropdown')" class="dropdown">
                            <a href="#/products" class='dropdown-toggle' data-toggle='dropdown'>Products<b class="caret"></b></a>
                            <ul class="dropdown-menu sub-menu">                                
                                <li><a href="#/products/45">Cat 45</a></li>
                                <li><a href="#/products/46">Cat 46</a></li>
                                <li><a href="#/products/47">Cat 47</a></li>
                                <li><a href="#/products/48">Cat 48</a></li>
                                
                            </ul>
                        </li>
                        <li ng-class="(selectedPage=='about') ? 'active' : ''"><a href="#/page/about">About</a></li>
                        <li ng-class="(selectedPage=='terms') ? 'active' : ''"><a href="#/page/terms">Terms</a></li>
                        <li ng-class="(selectedPage=='contact') ? 'active' : ''"><a href="#/page/contact">Contact</a></li>
                        
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#/cart">Cart</a></li>
                        <li ng-show="isLoggedIn && isAdmin"><a href="#">Administration</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account <b class="caret"></b></a>
                            <ul class="dropdown-menu">                                
                                <li><a href="#/user/login" ng-show="!isLoggedIn">Login</a></li>
                                <li><a href="#/user/register" ng-show="!isLoggedIn">Register</a></li>
                                <li><a href="#/user/profile" ng-show="isLoggedIn">Profile</a></li>
                                <li><a href="#/user/changePassword" ng-show="isLoggedIn">Change Password</a></li>
                                <li><a href="#/user/logout" ng-show="isLoggedIn">Logout</a></li>
                            </ul>
                        </li>                        
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>    
        
        
        <div class="container">
            <div class="row">
                <div class="col-md-12" ng-view></div>
            </div>
        </div>
    
    </body>
</html>