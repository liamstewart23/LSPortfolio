var app = angular.module('LSPortfolio', ['ngRoute']);//declare app + import ngRoute
var once = 0;//run menu + logo animation once on homepage
app.config(['$routeProvider', function ($routeProvider) {//Config routes
  $routeProvider
    .when("/", {templateUrl: "includes/home.php"})//Home Page
    .when("/about", {templateUrl: "includes/about.php"})//About Page
    .when("/portfolio", {templateUrl: "includes/portfolio.php"})//Portfolio Page
    .when("/blog", {templateUrl: "includes/blog.php"})//Blog Page
    .when("/post", {templateUrl: "includes/post.php"})//Blog Post Page
    .when("/contact", {templateUrl: "includes/contact.php"})//Contact Page
    .when("/menu", {templateUrl: "includes/menu.php"})//Menu
    .otherwise({redirectTo: '/'});
}]);
//Controller for Home
app.controller('HomeCtrl', [function() {
    angular.element(document).ready(function () {
        document.title = "Liam Stewart - Web Developer from London Ontario";
    	var home = document.querySelector("#home");
    	var menu = document.querySelector("#menu");
    	var logo = document.querySelector("#logo");
    	if (once===0) {
    		TweenMax.to(logo, 0.5, {opacity: 1, x:0, startAt:{opacity:0, x:-100}});
    		TweenMax.to(menu, 0.5, {opacity: 1, x:0, startAt:{opacity:0, x:200}});
    		once++
    	}
        TweenMax.to(home, 0.8, {startAt:{opacity:0, y:200},opacity: 1, y:0});
    });
}]);
//Controller for About
app.controller('AboutCtrl', [function() {
    angular.element(document).ready(function () {
        document.title = "About | Liam Stewart - Web Developer from London Ontario";
    	var about = document.querySelector("#about");
        TweenMax.to(about, 0.5, {startAt:{opacity:0, y:200},opacity: 1, y:0});
    });
}]);
//Controller for Portfolio
app.controller('PortfolioCtrl', [function() {
    angular.element(document).ready(function () {
        document.title = "Portfolio | Liam Stewart - Web Developer from London Ontario";
    	var portfolio = document.querySelector("#portfolio");
        var portfolioItems = document.querySelector("#portfolioItems");
        TweenMax.to(portfolio, 0.5, {startAt:{opacity:0, x:-200},opacity: 1, x:0});
        TweenMax.to(portfolioItems, 0.5, {startAt:{opacity:0, x:-400},opacity: 1, x:0});
    });
}]);
//Controller for Blog
app.controller('BlogCtrl', [function() {
    angular.element(document).ready(function () {
        document.title = "Blog | Liam Stewart - Web Developer from London Ontario";
        var blogHeading = document.querySelector("#blog-heading");
        var blogType = document.querySelector("#blog-type");
        var blogPosts = document.querySelector("#blog-posts");
        TweenMax.to(blogHeading, 1, {text:"Blog"});
        TweenMax.to(blogType, 4, {delay:1.5,text:"My thoughts, ideas and complaints."});
        TweenMax.to(blogPosts, 0.5, {startAt:{opacity:0, y:200},opacity: 1, y:0});
    });
}]);
//Controller for Contact
app.controller('ContactCtrl', [function() {
    angular.element(document).ready(function () {
        document.title = "Contact | Liam Stewart - Web Developer from London Ontario";
    	var contact = document.querySelector("#contact");
        var contactItem = document.querySelector(".contactItem");
        TweenMax.to(contact, 0.5, {startAt:{opacity:0, x:-200},opacity: 1, x:0});
        TweenMax.to(contactItem, 0.5, {startAt:{opacity:0, x:-400},opacity: 1, x:0});
    });
}]);
//Controller for Menu
app.controller('MenuCtrl', [function() {
    angular.element(document).ready(function () {
    	var menu = document.querySelector("#mainMenu");
        TweenMax.to(menu, 0.5, {startAt:{opacity:0, y:-180},opacity: 1, y:0});
    });
}]);