$(function(){

	//automatically active the current page
	$("#home a:contains('Home')").parent().addClass('active');
	$("#about a:contains('About')").parent().addClass('active');
	$("#heroes a:contains('Heroes')").parent().addClass('active');


    // automatic show or hide dropdown when cursor hover or leave the dropdown button
    $('ul.nav li.dropdown').hover(function(){
        $('.dropdown-menu', this).fadeIn();
    }, function(){
        $('.dropdown-menu', this).fadeOut('fast');
    });

});