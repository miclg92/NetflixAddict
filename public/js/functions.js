// Message de confirmation avant suppression News/Categorie/Commentaire
function confirm_delete() {
	return (confirm("Confirmez-vous la suppression ?"));
}

// Initialise le carousel (Main page)
function carousel_init() {
	var showcase = $("#showcase");
	showcase.Cloud9Carousel({
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
		onLoaded: function () {
			showcase.css('visibility', 'visible');
			showcase.css('display', 'none');
			showcase.fadeIn(1500)
		}
	});
	
	$('.nav > button').click(function (e) {
		var b = $(e.target).addClass('down');
		setTimeout(function () {
			b.removeClass('down')
		}, 80)
	});
	
	$(document).keydown(function (e) {
		switch (e.keyCode) {
			/* left arrow */
			case 37:
				$('.nav > .left').click();
				break;
			/* right arrow */
			case 39:
				$('.nav > .right').click();
		}
	});
	
	// $(window).resize(function () {
	// 	window.location.reload();
	// });
}

//Progress bar (Mise à jour des séries)
function progress_bar_init() {
	function timer(n) {
		$(".progress-bar").css("width", n + "%");
		$("#pourcentage").text(n + "%");
		if (n < 100) {
			setTimeout(function () {
				timer(n + 10);
			}, 200);
		}
	}
	
	$(function () {
		$("#animer").click(function () {
			timer(0);
		});
	});
}

// Onglets du menu actifs
function setActive() {
	if ($("#bloc_content").hasClass("accueil")) {
		$("#accueil").addClass('active');
	} else if ($("#bloc_content").hasClass("actus")) {
		$("#actus").addClass('active');
	} else if ($("#bloc_content").hasClass("quiz")) {
		$("#quiz").addClass('active');
	} else if ($("#bloc_content").hasClass("quiEsTu")) {
		$("#quiEsTu").addClass('active');
	} else if ($("#bloc_content").hasClass("mesSeries")) {
		$("#mesSeries").addClass('active');
	} else if ($("#bloc_content").hasClass("compte")) {
		$("#compte").addClass('active');
	} else if ($("#bloc_content").hasClass("contact")) {
		$("#contact").addClass('active');
	}
}