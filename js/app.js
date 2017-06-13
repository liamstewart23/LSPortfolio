var app = angular.module('LSPortfolio', ['ngRoute']);//declare app + import ngRoute
var once = 0;//run menu + logo animation once on homepage
var siteTitle = "Liam Stewart - Website Developer | London Ontario";//Site Title
app.config(['$routeProvider', '$locationProvider', function($routeProvider, $locationProvider) {//Config routes
  $routeProvider
    .when("/", {templateUrl: "includes/home.php",controller:"HomeCtrl"})//Home Page
    .when("/about", {templateUrl: "includes/about.php",controller:"AboutCtrl"})//About Page
    .when("/portfolio", {templateUrl: "includes/portfolio.php",controller:"PortfolioCtrl"})//Portfolio Page
    .when("/blog", {templateUrl: "includes/blog.php",controller:"BlogCtrl"})//Blog Page
    .when('/blog/:blog_id', {//Blog Post Page
        templateUrl: function(attrs){ 
            return 'includes/blog-post.php?blog_id=' + attrs.blog_id; },controller:"BlogPostCtrl"
    })
    .when("/contact", {templateUrl: "includes/contact.php",controller:"ContactCtrl"})//Contact Page
    .when("/menu", {templateUrl: "includes/menu.php",controller:"MenuCtrl"})//Menu
    .otherwise({redirectTo: '/'});
    //$locationProvider.html5Mode(true);
}]);

	//Global Variables
    var logo = document.querySelector("#logo");
    var menu = document.querySelector("#menu");
    var menuLink = document.querySelector("#menuLink"); 
    var page = document.querySelector("#page");
    var body = document.querySelector("body");

    menuLink.href = "#/menu";//change menu to js enabled version
    logo.href = "#/";//change logo to js enabled version
    
    //Functions
    function expandLogo() {//Expands and animates logo
        TweenMax.to(logo, 1, {width:320,text:"Liam Stewart"});
        logo.removeEventListener("mouseover", expandLogo, false);
        logo.addEventListener("mouseout", contractLogo, false);
    }
    function contractLogo() {//Contracts and does closing animation on logo
        TweenMax.to(logo, 1, {width:80,text:"L"}, "+=0.5");
        logo.addEventListener("mouseover", expandLogo, false);
    }

    //Listeners
    logo.addEventListener("mouseover", expandLogo, false);

    // Easter Eggs and cool additions - Tracks your keystrokes on page (cool library I found - see: cheet.min.js)
    cheet('1 8 0', function () {
        TweenMax.to(body, 1, {rotation:180, transformOrigin:"center 100%"});
    });
    cheet('s t e v e', function () {
        alert('A steve fan eh? Me too. Steve is such a great guy! Did you know he loves Hawaiian pizza?');
    });
    cheet('g i n g e', function () {
        window.location = "https://www.ginge.ca/";
    });
    cheet('c o n n e c t', function () {
        window.location = "https://ca.linkedin.com/in/liamstewart23";
    }); 
    cheet('c o d e', function () {
        window.location = "https://github.com/liamstewart23/";
    });
    cheet('g i t', function () {
        window.location = "https://github.com/liamstewart23/";
    });         
    cheet('t w i t t e r', function () {
        window.location = "https://twitter.com/liam__stewart";
    });     
    cheet('h o m e', function () {
        window.location = "#/home";
    });
    cheet('h', function () {
        window.location = "#/home";
    });     
    cheet('a b o u t', function () {
        window.location = "#/about";
    });
    // cheet('a', function () {
    //     window.location = "#/about";
    // });     
    cheet('p o r t f o l i o', function () {
        window.location = "#/portfolio";
    });
    cheet('w o r k', function () {
        window.location = "#/portfolio";
    });
    cheet('p', function () {
        window.location = "#/portfolio";
    });
    cheet('w', function () {
        window.location = "#/portfolio";
    });             
    cheet('b l o g', function () {
        window.location = "#/blog";
    });
    cheet('b', function () {
        window.location = "#/blog";
    });             
    cheet('c o n t a c t', function () {
        window.location = "#/contact";
    });
    // cheet('c', function () {
    //     window.location = "#/contact";
    // }); 

//Controller for Home
app.controller('HomeCtrl', [function() {
    angular.element(document).ready(function () {
        document.title = siteTitle;
    	var home = document.querySelector("#home");
    	var menu = document.querySelector("#menu");
    	var logo = document.querySelector("#logo");
    	if (once===0) {//logo and menu animation once per session
    		TweenMax.to(logo, 0.5, {opacity: 1, x:0, startAt:{opacity:0, x:-100}});
    		TweenMax.to(menu, 0.5, {opacity: 1, x:0, startAt:{opacity:0, x:200}});
    		once++;
    	}
        TweenMax.to(home, 2, {delay:0.5,opacity: 1});
    });
}]);
//Controller for About
app.controller('AboutCtrl', [function() {
    angular.element(document).ready(function () {
        document.title = "About - "+siteTitle;
    	var about = document.querySelector("#about");
        TweenMax.to(about, 0.5, {startAt:{opacity:0, y:200},opacity: 1, y:0});
    });
}]);
//Controller for Portfolio
app.controller('PortfolioCtrl', [function() {
    angular.element(document).ready(function () {
        document.title = "Portfolio - "+siteTitle;
    	var portfolio = document.querySelector("#portfolio");
        var portfolioItems = document.querySelector("#portfolioItems");
        TweenMax.to(portfolio, 0.5, {startAt:{opacity:0, x:-200},opacity: 1, x:0});
        TweenMax.to(portfolioItems, 0.5, {startAt:{opacity:0, x:-400},opacity: 1, x:0});
    });
}]);
//Controller for Blog
app.controller('BlogCtrl', [function() {
    angular.element(document).ready(function () {
        document.title = "Blog - "+siteTitle;
        var blogHeading = document.querySelector("#blog-heading");
        var blogType = document.querySelector("#blog-type");
        var blogPosts = document.querySelector("#blog-posts");
        TweenMax.to(blogHeading, 1, {text:"Blog"});
        TweenMax.to(blogType, 4, {delay:1.5,text:"My thoughts, ideas and complaints."});
        TweenMax.to(blogPosts, 0.5, {startAt:{opacity:0, y:200},opacity: 1, y:0});
    });
}]);
//Controller for Blog Post
app.controller('BlogPostCtrl', [function() {
    angular.element(document).ready(function () {
        document.title = "Blog - "+siteTitle;
        var blogPost = document.querySelector("#blog");
        TweenMax.to(blogPost, 0.5, {startAt:{opacity:0, y:200},opacity: 1, y:0});
    });
}]);
//Controller for Contact
app.controller('ContactCtrl', [function() {
    angular.element(document).ready(function () {
        document.title = "Contact - "+siteTitle;
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