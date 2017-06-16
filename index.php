<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="IE=edge,IE=9,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>Liam Stewart - Website Developer | London Ontario</title>
        <link rel="icon" type="image/x-icon" href="favicon.ico" />
        <meta name="author" content="Liam Stewart">
        <meta name="description" content="Hello! I am Liam Stewart, a Website Developer living in London Ontario. I develop websites, design logos, and dabble in some seo!">
        <meta name="HandheldFriendly" content="True" />
        <link rel="canonical" href="https://lstew.com" />
        <meta property="og:title" content="Liam Stewart - Web Developer from London Ontario">
        <meta property="og:type" content="website">
        <meta property="og:locale" content="en_US"/>
        <meta property="og:image" content="img/social-logo.png">
        <meta property="og:url" content="https://lstew.com">
        <meta property="og:description" content="Hello! I am Liam Stewart, a Website Developer living in London Ontario. I develop websites, design logos, and dabble in some seo!">
        <meta name="twitter:card" content="summary">
        <meta name="twitter:url" content="https://www.ltew.com">
        <meta name="twitter:title" content="Liam Stewart - Web Developer from London Ontario">
        <meta name="twitter:description" content="Hello! I am Liam Stewart, a Website Developer living in London Ontario. I develop websites, design logos, and dabble in some seo!">
        <meta name="twitter:image" content="img/social-logo.png">
        <meta name="rating" content="General" />
        <meta name="distribution" content="Global" />
        <meta name="revisit-after" content="1 days">
        <meta name="language" content="english">
        <meta name="googlebot" content="noodp">
        <meta name="fragment" content="!">
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,900|Roboto:400,500,700" rel="stylesheet">
        <link rel="stylesheet" href="css/app.css">
        <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
    </head>
    <body ng-app="LSPortfolio">
        <h1 class="hidden">Liam Stewart - Web Developer from London Ontario</h1>
        <?php include 'includes/header.php';?>
        <div ng-view class="container-fluid" id="page">
            <noscript>
            <link rel="stylesheet" href="css/no-js.css">
            <?php
            if (isset($_GET['partial'])) {//If partial is in url
            $partial =  $_GET['partial'];//Set variable of of partial
            // echo $_GET['partial']; //Checking for getting partial in route
            include 'includes/'.$partial.'.php';//Include Page Partial
            }
            else {
            include 'includes/home.php';//Otherwise
            }?>
            </noscript>
        </div>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-69408528-6', 'auto');
  ga('send', 'pageview');
  
</script>
        <script src="js/vendor/angular.min.js"></script>
        <script src="js/vendor/angular-route.min.js"></script>
        <script src="js/vendor/jquery.min.js"></script>
        <script src="js/vendor/TweenMax.min.js"></script>
        <script src="js/vendor/TextPlugin.min.js"></script>
        <script src="js/app.js"></script>
         <script src="js/portfolio-controllers.js"></script>
    </body>
</html>