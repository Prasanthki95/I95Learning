console.log("Document Loaded");

//document.querySelector(".product-image-photo").addEventListener("click", display);

// function display(){
//     alert("Hello You hovered on the product");
// }

define([
    'jquery'
], function ($) {
    'use strict';
    /* for check in this file we only add jquery code that display(in console) class of element which selector used */
    //console.log($('#my-orders-table').attr('class'));

   // alert("Document Loaded from query");

    $('.product-item-info').hover(function (){
        alert("Document Loaded from query");
    })

});
