var app = angular.module('LSPortfolio', ['ngRoute', 'portfolioControllers']); //declare app + dependencies
var siteTitle = "Liam Stewart - Website Developer | London Ontario"; //Site Title
app.config(['$routeProvider', '$locationProvider', function ($routeProvider, $locationProvider) { //Config routes
    $routeProvider
        .when("/", {//Home Page
            templateUrl: "includes/home.php",
            controller: "HomeCtrl"
        })
        .when("/about", {//About Page
            templateUrl: "includes/about.php",
            controller: "AboutCtrl"
        })
        .when("/portfolio", {//Portfolio Page
            templateUrl: "includes/portfolio.php",
            controller: "PortfolioCtrl"
        })
        .when("/portfolio-item/:itemId", {//Portfolio Item Page
            templateUrl: "includes/portfolio-item.php",
            controller: "PortfolioItemCtrl"
        })
        .when("/blog", {//Blog Page
            templateUrl: "includes/blog.php",
            controller: "BlogCtrl"
        })
        .when('/blog/:blog_id', {//Blog Post Page
            templateUrl: function (attrs) {
                return 'includes/blog-post.php?blog_id=' + attrs.blog_id;
            },
            controller: "BlogPostCtrl"
        })
        .when("/contact", {//Contact Page
            templateUrl: "includes/contact.php",
            controller: "ContactCtrl"
        })
        .when("/menu", {//Menu
            templateUrl: "includes/menu.php",
            controller: "MenuCtrl"
        })
        .otherwise({
            redirectTo: '/'
        });

    //$locationProvider.html5Mode(true);
}]);
//Global Variables
var once = 0; //run menu + logo animation once on homepage
var logo = document.querySelector("#logo");
var menu = document.querySelector("#menu");
var menuLink = document.querySelector(".menu");
var page = document.querySelector("#page");
var body = document.querySelector("body");

menuLink.href = "#/menu"; //change menu to js enabled version
logo.href = "#/"; //change logo to js enabled version

//Functions
function expandLogo() { //Expands and animates logo
    TweenMax.to(logo, 1, {
        width: 320,
        text: "Liam Stewart"
    });
    logo.removeEventListener("mouseover", expandLogo, false);
    logo.addEventListener("mouseout", contractLogo, false);
}

function contractLogo() { //Contracts and does closing animation on logo
    TweenMax.to(logo, 1, {
        width: 80,
        text: "L"
    }, "+=0.5");
    logo.addEventListener("mouseover", expandLogo, false);
}

//Listeners
logo.addEventListener("mouseover", expandLogo, false);

//Controller for Home
app.controller('HomeCtrl', [function () {
    angular.element(document).ready(function () {
        document.title = siteTitle;
        var home = document.querySelector("#home");
        var menu = document.querySelector("#menu");
        var logo = document.querySelector("#logo");
        if (once === 0) { //logo and menu animation once per session
            TweenMax.to(logo, 0.5, {
                opacity: 1,
                x: 0,
                startAt: {
                    opacity: 0,
                    x: -100
                }
            });
            TweenMax.to(menu, 0.5, {
                opacity: 1,
                x: 0,
                startAt: {
                    opacity: 0,
                    x: 200
                }
            });
            once++;
        }
        TweenMax.to(home, 2, {
            delay: 0.5,
            opacity: 1
        });
    });
}]);
//Controller for About
app.controller('AboutCtrl', [function () {
    angular.element(document).ready(function () {
        document.title = "About - " + siteTitle;
        var about = document.querySelector("#about");
        TweenMax.to(about, 0.5, {
            startAt: {
                opacity: 0,
                y: 200
            },
            opacity: 1,
            y: 0
        });
    });
}]);
//Controller for Portfolio
app.controller('PortfolioCtrl', [function () {
    angular.element(document).ready(function () {
        document.title = "Portfolio - " + siteTitle;
        var portfolio = document.querySelector(".portfolio-title");
        var portfolioFilter = document.querySelector(".portfolioFilter");
        var portfolioSTitle = document.querySelector(".portfolio-stitle");
        TweenMax.to(portfolio, 0.5, {
            startAt: {
                opacity: 0,
                x: -200
            },
            opacity: 1,
            x: 0
        });
        TweenMax.to(portfolioSTitle, 1, {
            startAt: {
                opacity: 0
            },
            delay:1,
            opacity: 1
        });
        TweenMax.to(portfolioFilter, 1, {
            startAt: {
                opacity: 0,
                y: 400
            },
            opacity: 1,
            y: 0
        });
        //Portfolio Item Type
        $(".filter-button").click(function () {
            var value = $(this).attr('data-filter');
            if (value == "all") {
                $('.filter').show('1000');
            }
            else {
                $(".filter").not('.' + value).hide('3000');
                $('.filter').filter('.' + value).show('3000');

            }
        });
        if ($(".filter-button").removeClass("active")) {
            $(this).removeClass("active");
        }
        $(this).addClass("active");
    });
}]);
//Controller for Portfolio Item
app.controller('PortfolioItemCtrl', [function () {
    angular.element(document).ready(function () {
        
    });
}]);
//Controller for Blog
app.controller('BlogCtrl', [function () {
    angular.element(document).ready(function () {
        document.title = "Blog - " + siteTitle;
        var blogHeading = document.querySelector("#blog-heading");
        var blogType = document.querySelector("#blog-type");
        var blogPosts = document.querySelector("#blog-posts");
        TweenMax.to(blogHeading, 1, {
            text: "Blog"
        });
        TweenMax.to(blogType, 4, {
            delay: 1.5,
            text: "My thoughts, ideas and complaints."
        });
        TweenMax.to(blogPosts, 0.5, {
            startAt: {
                opacity: 0,
                y: 200
            },
            opacity: 1,
            y: 0
        });
    });
}]);
//Controller for Blog Post
app.controller('BlogPostCtrl', [function () {
    angular.element(document).ready(function () {
        document.title = "Blog - " + siteTitle;
        var blogPost = document.querySelector("#blog");
        TweenMax.to(blogPost, 0.5, {
            startAt: {
                opacity: 0,
                y: 200
            },
            opacity: 1,
            y: 0
        });
    });
}]);
//Controller for Contact
app.controller('ContactCtrl', [function () {
    angular.element(document).ready(function () {
        document.title = "Contact - " + siteTitle;
        var contact = document.querySelector("#contact");
        var contactItem = document.querySelector(".contactItem");
        TweenMax.to(contact, 0.5, {
            startAt: {
                opacity: 0,
                x: -200
            },
            opacity: 1,
            x: 0
        });
        TweenMax.to(contactItem, 0.5, {
            startAt: {
                opacity: 0,
                x: -400
            },
            opacity: 1,
            x: 0
        });
    });
}]);
//Controller for Menu
app.controller('MenuCtrl', ['$scope', function $scope() {
    angular.element(document).ready(function () {
        var menu = document.querySelector("#menuPage");
        TweenMax.to(menu, 0.5, {
            startAt: {
                opacity: 0,
                y: -180
            },
            opacity: 1,
            y: 0
        });        
    });
}]);
