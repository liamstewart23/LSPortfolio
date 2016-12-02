var app = angular.module('LSPortfolio', ['ngRoute']);//declare app + import ngRoute
app.config(['$routeProvider', function ($routeProvider) {//Config routes
  $routeProvider
    .when("/", {templateUrl: "includes/home.php"})//Home Page
    .when("/about", {templateUrl: "includes/about.php"})//About Page
    .when("/portfolio", {templateUrl: "includes/portfolio.php"})//Portfolio Page
    .when("/blog", {templateUrl: "includes/blog.php"})//Blog Page
    .when("/post", {templateUrl: "includes/post.php"})//Blog Page
    .when("/contact", {templateUrl: "includes/contact.php"})//Contact Page
    .when("/menu", {templateUrl: "includes/menu.php"})//Menu
    .otherwise({redirectTo: '/'});
}]);