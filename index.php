<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="IE=edge,IE=9,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>Liam Stewart - Web Developer from London Ontario</title>
        <link rel="icon" type="image/x-icon" href="favicon.ico" />
        <meta name="author" content="Liam Stewart">
        <meta name="description" content="Hello! I am Liam Stewart, a Website Developer living in London Ontario. I develop websites, design logos, do some killer SEO campaigns!">
        <meta name="HandheldFriendly" content="True" />
        <link rel="canonical" href="https://lstew.com" />
        <meta property="og:title" content="Liam Stewart - Web Developer from London Ontario">
        <meta property="og:type" content="website">
        <meta property="og:locale" content="en_US"/>
        <meta property="og:image" content="img/social-logo.png">
        <meta property="og:url" content="https://lstew.com">
        <meta property="og:description" content="Hello! I am Liam Stewart, a Website Developer living in London Ontario. I develop websites, design logos, do some killer SEO campaigns!">
        <meta name="twitter:card" content="summary">
        <meta name="twitter:url" content="https://lstew.com">
        <meta name="twitter:title" content="Liam Stewart - Web Developer from London Ontario">
        <meta name="twitter:description" content="Hello! I am Liam Stewart, a Website Developer living in London Ontario. I develop websites, design logos, do some killer SEO campaigns!">
        <meta name="twitter:image" content="img/social-logo.png">
        <meta name="rating" content="General" />
        <meta name="distribution" content="Global" />
        <meta name="revisit-after" content="1 days">
        <meta name="language" content="english">
        <meta name="googlebot" content="noodp">
        <meta name="fragment" content="!">
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,900|Roboto:400,500,700" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/app.css">
    </head>
    <body ng-app="LSPortfolio">
        <h1 class="hidden">Liam Stewart - Web Developer from London Ontario</h1>
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
        <script src="js/vendor/TweenMax.min.js"></script>
        <script src="js/vendor/TextPlugin.min.js"></script>
        <script src="js/vendor/cheet.min.js"></script>
        <script src="js/app.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>