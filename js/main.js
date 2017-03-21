(function() {
	"use strict";
	//Variables
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
})();