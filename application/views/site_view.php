<!DOCTYPE html>
<html ng-app="MZ">
    <head>
        <meta charset="utf-8">
        <title>JS Bin</title>
        <?= css(base_url("public/stylesheets/main.css")) ?>
        <?= css(base_url("public/stylesheets/media.css")) ?>
        <?=js(base_url("public/javascripts/angular/angular.min.js"))?>
        <?=js(base_url("public/javascripts/angular/angular-route.min.js"))?>
        <?=js(base_url("public/javascripts/app.js"))?>
    </head>
    <body>

        <div class='nav' ng-controller="MainMenuCtrl">
            <div class='nav-wrapper'>
                <ul>
                    <li><a href='#' class='icon'>Home</a></li><li>
                        <a href='#'>About</a></li><li>
                        <a href='#'>Contact</a></li><li>
                        <a href='#'>Social</a>
                    </li>
                    <li><a href='#'>My Account</a></li>

                </ul>

            </div>
            
            <div class="nav-select">
                <select ng-change="">
                    <option>Home</option>
                    <option>About</option>
                    <option>Contact</option>
                    <option>Social</option>
                </select>
            </div>
        </div>

        <div class='container'>
            <form id="searchForm" class="main-search-form">
                <input type="search" placeholder="Search..." />
            </form>
            <div ng-view></div>
        </div>  



    </body>
</html>