// Quiz result options in a separate object for flexibility
var resultOptions = [
	{   title: 'Tu es.... Onze (Elfe) "La Bizarre" !',
		desc: '<p>La personne bizarre de ton cercle d\'amis mais ceux qui te connaissent bien savent que tu caches de lourds secrets... Cela explique tout ! Malgré ton passé mystérieux, tu donnerais tout pour être une personne "normale" et tu cherches simplement à tisser des liens forts avec les gens. Il vaut mieux être ton ami que ton ennemi !</p><img src="img/stranger_things_eleven.jpg"/>'},
	{   title: 'Tu es.... Mike "Le Sage" !',
		desc: '<p>Le sage du groupe ! Quand tout va bien, tu sais être à l\'écoute des autres et tu donnes souvent de bons conseils à ton entourage. Par contre, quand le mode "Emo Mike" est activé, plus rien n\'a d\'importance pour toi sauf ton obsession du moment (Eleven). Tu peux vite perdre la raison par amour pour les autres !</p><img src="img/stranger_things_mike.jpg"/>'},
	{   title: 'Tu es.... Dustin "Le Clown" !',
		desc: '<p>Le clown de la bande, c\'est toi ! Quand tout va bien ou que la fin du monde est proche, tu sais garder une once d\'humour en toi. Heureusement que tu es là pour apporter tes ondes positives ! Ton seul défaut, c\'est que tu peux être maladroit(e) à certains moments et provoquer sans le savoir quelque chose de mauvais (En gardant Dart par exemple comme animal de compagnie). Mais on te pardonne tout !</p><img src="img/stranger_things_dustin.jpg"/>'},
	{   title: 'Tu es.... Will "Le Calme" !',
		desc: '<p>La personne discrète et calme de la bande, c\'est toi ! Si des fois on se demande où tu es passé(e) (l\'Upside Down ça te dit quelque chose ?), tu es surtout très rêveur(se). Tout le monde t\'aime et s\'inquiète pour ton bien et malgré ta discrétion, tes proches connaissent ta valeur et savent ce dont tu es vraiment capable.</p><img src="img/stranger_things_will.jpg"/>'},
	{   title: 'Tu es.... Lucas "L Aventurier" !',
		desc: '<p>L\'aventurier(e) de la bande ! En plus d\'être toujours partant(e) pour quoi que ce soit, tu sais te montrer utile dans les bons moments qu\'en cas d\'extrême urgence. Ton assurance et ta sympathie te permettent de nouer des relations rapidement et il est facile de succomber à tes charmes.</p><img src="img/stranger_things_lucas.jpg"/>'}
];

// global variables
var quizSteps = $('#quizzie .quiz-step'),
	totalScore = 0;

// for each step in the quiz, add the selected answer value to the total score
// if an answer has already been selected, subtract the previous value and update total score with the new selected answer value
// toggle a visual active state to show which option has been selected
quizSteps.each(function () {
	var currentStep = $(this),
		ansOpts = currentStep.children('.quiz-answer');
	// for each option per step, add a click listener
	// apply active class and calculate the total score
	ansOpts.each(function () {
		var eachOpt = $(this);
		eachOpt[0].addEventListener('click', check, false);
		function check() {
			var $this = $(this),
				value = $this.attr('data-quizIndex'),
				answerScore = parseInt(value);
			// check to see if an answer was previously selected
			if (currentStep.children('.active').length > 0) {
				var wasActive = currentStep.children('.active'),
					oldScoreValue = wasActive.attr('data-quizIndex'),
					oldScore = parseInt(oldScoreValue);
				// handle visual active state
				currentStep.children('.active').removeClass('active');
				$this.addClass('active');
				// handle the score calculation
				totalScore -= oldScoreValue;
				totalScore += answerScore;
				calcResults(totalScore);
			} else {
				// handle visual active state
				$this.addClass('active');
				// handle score calculation
				totalScore += answerScore;
				calcResults(totalScore);
				// handle current step
				updateStep(currentStep);
			}
		}
	});
});

// show current step/hide other steps
function updateStep(currentStep) {
	if(currentStep.hasClass('current')){
		currentStep.removeClass('current');
		currentStep.next().addClass('current');
	}
}

// display scoring results
function calcResults(totalScore) {
	// only update the results div if all questions have been answered
	if (quizSteps.find('.active').length == quizSteps.length){
		var resultsTitle = $('#results h1'),
			resultsDesc = $('#results .desc');
		
		// calc lowest possible score
		var lowestScoreArray = $('#quizzie .low-value').map(function() {
			return $(this).attr('data-quizIndex');
		});
		var minScore = 0;
		for (var i = 0; i < lowestScoreArray.length; i++) {
			minScore += lowestScoreArray[i] << 0;
		}
		// calculate highest possible score
		var highestScoreArray = $('#quizzie .high-value').map(function() {
			return $(this).attr('data-quizIndex');
		});
		var maxScore = 0;
		for (var i = 0; i < highestScoreArray.length; i++) {
			maxScore += highestScoreArray[i] << 0;
		}
		// calc range, number of possible results, and intervals between results
		var range = maxScore - minScore,
			numResults = resultOptions.length,
			interval = range / (numResults - 1),
			increment = '',
			n = 0; //increment index
		// incrementally increase the possible score, starting at the minScore, until totalScore falls into range. then match that increment index (number of times it took to get totalScore into range) and return the corresponding index results from resultOptions object
		while (n < numResults) {
			increment = minScore + (interval * n);
			if (totalScore <= increment) {
				// populate results
				resultsTitle.replaceWith("<h1>" + resultOptions[n].title + "</h1>");
				resultsDesc.replaceWith("<p class='desc'>" + resultOptions[n].desc + "</p>");
				return;
			} else {
				n++;
			}
		}
	}
}