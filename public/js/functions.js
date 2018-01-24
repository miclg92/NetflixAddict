// Message de confirmation avant suppression News/Categorie/Commentaire
function confirm_delete()
{
	return(confirm("Confirmez-vous la suppression ?"));
}

// Initialise le carousel (Main page)
function carousel_init()
{
	var showcase = $("#showcase");
	showcase.Cloud9Carousel( {
		yPos: 42,
		yRadius: 48,
		mirrorOptions: {
			gap: 12,
			height: 0.2
		},
		buttonLeft: $(".nav > .left"),
		buttonRight: $(".nav > .right"),
		autoPlay: true,
		bringToFront: true,
//			onRendered: showcaseUp'<a href="https://www.jqueryscript.net/time-clock/">date</a>',
		onLoaded: function() {
			showcase.css( 'visibility', 'visible' );
			showcase.css( 'display', 'none' );
			showcase.fadeIn( 1500 )
		}
	} );
	
	$('.nav > button').click( function( e ) {
		var b = $(e.target).addClass( 'down' );
		setTimeout( function() { b.removeClass( 'down' ) }, 80 )
	} );
	
	$(document).keydown( function( e ) {
		switch( e.keyCode ) {
			/* left arrow */
			case 37:
				$('.nav > .left').click();
				break;
			/* right arrow */
			case 39:
				$('.nav > .right').click();
		}
	} )
}

// Initialise la pagination des Séries
function pagination_series_init()
{
	var show_per_page = 12;
	var current_page = 0;
	function set_display(first, last) {
		$('#series_list').children().css('display', 'none');
		$('#series_list').children().slice(first, last).css('display', 'block');
	}
	function previous(){
		if($('.active').prev('.page_link').length) go_to_page(current_page - 1);
	}
	function next(){
		if($('.active').next('.page_link').length) go_to_page(current_page + 1);
	}
	function go_to_page(page_num){
		current_page = page_num;
		start_from = current_page * show_per_page;
		end_on = start_from + show_per_page;
		set_display(start_from, end_on);
		$('.active').removeClass('active');
		$('#id' + page_num).addClass('active');
	}
	$(document).ready(function() {
		
		var number_of_pages = Math.ceil($('#series_list').children().length / show_per_page);
		
		var nav = '<ul class="pagination"><li><a href="javascript:previous();">&laquo;</a>';
		
		var i = -1;
		while(number_of_pages > ++i){
			nav += '<li class="page_link'
			if(!i) nav += ' active';
			nav += '" id="id' + i +'">';
			nav += '<a href="javascript:go_to_page(' + i +')">'+ (i + 1) +'</a>';
		}
		nav += '<li><a href="javascript:next();">&raquo;</a></ul>';
		
		$('#pagination').html(nav);
		set_display(0, show_per_page);
	});
}

// Initialise la pagination des News
function pagination_news_init()
{
	var show_per_page = 5;
	var current_page = 0;
	function set_display(first, last) {
		$('#all_news').children().css('display', 'none');
		$('#all_news').children().slice(first, last).css('display', 'block');
	}
	function previous(){
		if($('.active').prev('.page_link').length) go_to_page(current_page - 1);
	}
	function next(){
		if($('.active').next('.page_link').length) go_to_page(current_page + 1);
	}
	function go_to_page(page_num){
		current_page = page_num;
		start_from = current_page * show_per_page;
		end_on = start_from + show_per_page;
		set_display(start_from, end_on);
		$('.active').removeClass('active');
		$('#id' + page_num).addClass('active');
	}
	$(document).ready(function() {

		var number_of_pages = Math.ceil($('#all_news').children().length / show_per_page);

		var nav = '<ul class="pagination"><li><a href="javascript:previous();">&laquo;</a>';

		var i = -1;
		while(number_of_pages > ++i){
			nav += '<li class="page_link'
			if(!i) nav += ' active';
			nav += '" id="id' + i +'">';
			nav += '<a href="javascript:go_to_page(' + i +')">'+ (i + 1) +'</a>';
		}
		nav += '<li><a href="javascript:next();">&raquo;</a></ul>';

		$('#pagination_news').html(nav);
		set_display(0, show_per_page);
	});
}

//Progress bar (Mise à jour des séries)
function progress_bar_init()
{
	function timer(n) {
		$(".progress-bar").css("width", n + "%");
		$("#pourcentage").text(n + "%");
		if(n < 100) {
			setTimeout(function() {
				timer(n + 10);
			}, 200);
		}
	}
	$(function (){
		$("#animer").click(function() {
			timer(0);
		});
	});
}