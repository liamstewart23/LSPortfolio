<!DOCTYPE html>
<html>
    <head>
        <?php include 'includes/meta.php';?>
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,900|Roboto:400,500,700" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/app.css">
    </head>
    <body ng-app="LSPortfolio">
        <?php include 'includes/header.php';?>
        <div ng-view class="container-fluid" id="page">
            <noscript>
            <?php
            if (isset($_GET['partial'])) {//If partial is in url
                $link =  $_GET['partial'];//set variable of of partial
                // echo $_GET['partial']; // Checking if it is getting partial from URL
                include 'includes/'.$link.'.php';//include
            }
            else {
                include 'includes/home.php';//otherwise include
            }?>
            </noscript>
        </div>
        <script src="js/vendor/angular.min.js"></script>
        <script src="js/vendor/angular-route.min.js"></script>
        <script src="js/vendor/angular-animate.min.js"></script>
        <script src="js/vendor/TweenMax.min.js"></script>
        <script src="js/vendor/TextPlugin.min.js"></script>
        <script src="js/app.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>