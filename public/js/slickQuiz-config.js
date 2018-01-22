// Setup your quiz text and questions here

// NOTE: pay attention to commas, IE struggles with those bad boys
	
	var quizJSON = {
		"info": {
			"name":    "",
			"main":    "",
			// "results": "<h5>Résultats</h5><p></p>",
			"level1":  "100% Netflix'Addict",
			"level2":  "75% Netflix'Addict",
			"level3":  "50% Netflix'Addict",
			"level4":  "25% Netflix'Addict",
			"level5":  "0% Netflix'Addict"
		},
		"questions": [
			{ // Question 1 - Multiple Choice, Single True Answer
				"q": "Questions d'ordre général sur Netflix : En quelle année a été fondé Netflix ?",
				"a": [
					{"option": "1993",      "correct": false},
					{"option": "1997",     "correct": true},
					{"option": "2001",      "correct": false} // no comma here
				],
				"correct": "<p><span>Bien joué ! Ca commence très bien... Quelle culture Netflix !</span></p>",
				"incorrect": "<p><span>Oups, c'est raté pour cette fois ! Netflix a été fondé en 1997 (et oui, déja...)</span></p>" // no comma here
			}
			// { // Question 2 - Multiple Choice, Single True Answer
			// 	"q": "Quels sont les noms des deux fondateurs ?",
			// 	"a": [
			// 		{"option": "Reed Hastings et Marc Randolph",      "correct": true},
			// 		{"option": "Marc Randolph et John Smith",     "correct": false},
			// 		{"option": "Jordan Blanc et Rae Darkef",      "correct": false} // no comma here
			// 	],
			// 	"correct": "<p><span>Bravo ! On continue...</span></p>",
			// 	"incorrect": "<p><span>Oups, c'est raté pour cette fois ! Netflix a été fondé par Reed Hastings et Marc Randolph.</span></p>" // no comma here
			// },
			// { // Question 3 - Multiple Choice, Single True Answer
			// 	"q": "Les \"Créations originales Netflix\" sont elles...",
			// 	"a": [
			// 		{"option": "Des séries uniquement",      "correct": false},
			// 		{"option": "Des films uniquement",     "correct": false},
			// 		{"option": "Les deux : films et séries",      "correct": true} // no comma here
			// 	],
			// 	"correct": "<p><span>Bravo ! On continue...</span></p>",
			// 	"incorrect": "<p><span>Oups, c'est raté pour cette fois ! Films et séries font l'objet de \"Créations originales Netflix\".</span></p>" // no comma here
			// },
			// { // Question 4 - Multiple Choice, Single True Answer
			// 	"q": "Nouveau thème : Netflix ou pas ? original ou pas ? \"Orange Is the New Black\" est une série...",
			// 	"a": [
			// 		{"option": "Création originale Netflix",      "correct": true},
			// 		{"option": "Diffusée sur Netflix, mais pas une Création originale Netflix",     "correct": false},
			// 		{"option": "Non diffusée sur Netflix",      "correct": false} // no comma here
			// 	],
			// 	"correct": "<p><span>Bien joué ! Ce nouveau thème te convient bien on dirait...</span></p>",
			// 	"incorrect": "<p><span>Oups, ca commence mal ! \"Orange Is the New Black\" est une Création originale Netflix.</span></p>" // no comma here
			// },
			// { // Question 5 - Multiple Choice, Single True Answer
			// 	"q": "\"Friends\" est une série...",
			// 	"a": [
			// 		{"option": "Création originale Netflix",      "correct": false},
			// 		{"option": "Diffusée sur Netflix, mais pas une Création originale Netflix",     "correct": true},
			// 		{"option": "Non diffusée sur Netflix",      "correct": false} // no comma here
			// 	],
			// 	"correct": "<p><span>Bravo ! On continue...</span></p>",
			// 	"incorrect": "<p><span>Oups, c'est raté pour cette fois ! \"Friends\" est diffusée sur Netflix, mais pas une Création originale Netflix. Désolé !</span></p>" // no comma here
			// },
			// { // Question 6 - Multiple Choice, Single True Answer
			// 	"q": "\"Scream, la série\" est une série...",
			// 	"a": [
			// 		{"option": "Création originale Netflix",      "correct": true},
			// 		{"option": "Diffusée sur Netflix, mais pas une Création originale Netflix",     "correct": false},
			// 		{"option": "Non diffusée sur Netflix",      "correct": false} // no comma here
			// 	],
			// 	"correct": "<p><span>Bravo ! On continue...</span></p>",
			// 	"incorrect": "<p><span>Oups, c'est raté pour cette fois ! \"Scream, la série\" est une Création originale Netflix.</span></p>" // no comma here
			// },
			// { // Question 7 - Multiple Choice, Single True Answer
			// 	"q": "\"American Horror Story\" est une série...",
			// 	"a": [
			// 		{"option": "Création originale Netflix",      "correct": false},
			// 		{"option": "Diffusée sur Netflix, mais pas une Création originale Netflix",     "correct": true},
			// 		{"option": "Non diffusée sur Netflix",      "correct": false} // no comma here
			// 	],
			// 	"correct": "<p><span>Bravo ! On continue...</span></p>",
			// 	"incorrect": "<p><span>Oups, c'est raté pour cette fois ! \"American Horror Story\" est diffusée sur Netflix, mais pas une Création originale Netflix. Désolé !</span></p>" // no comma here
			// },
			// { // Question 8 - Multiple Choice, Single True Answer
			// 	"q": "\"Grey's Anatomy\" est une série...",
			// 	"a": [
			// 		{"option": "Création originale Netflix",      "correct": false},
			// 		{"option": "Diffusée sur Netflix, mais pas une Création originale Netflix",     "correct": false},
			// 		{"option": "Non diffusée sur Netflix",      "correct": true} // no comma here
			// 	],
			// 	"correct": "<p><span>Bravo ! On continue...</span></p>",
			// 	"incorrect": "<p><span>Oups, c'est raté pour cette fois ! \"Grey's Anatomy\" n'est pas diffusée du tout sur Netflix. Désolé !</span></p>" // no comma here
			// },
			// { // Question 9 - Multiple Choice, Single True Answer
			// 	"q": "\"Dexter\" est une série...",
			// 	"a": [
			// 		{"option": "Création originale Netflix",      "correct": false},
			// 		{"option": "Diffusée sur Netflix, mais pas une Création originale Netflix",     "correct": true},
			// 		{"option": "Non diffusée sur Netflix",      "correct": false} // no comma here
			// 	],
			// 	"correct": "<p><span>Bravo ! On continue...</span></p>",
			// 	"incorrect": "<p><span>Oups, c'est raté pour cette fois ! \"Dexter\" est diffusée sur Netflix, mais pas une Création originale Netflix. Désolé !</span></p>" // no comma here
			// },
			// { // Question 10 - Multiple Choice, Single True Answer
			// 	"q": "\"Pretty Little Liars\" est une série...",
			// 	"a": [
			// 		{"option": "Création originale Netflix",      "correct": false},
			// 		{"option": "Diffusée sur Netflix, mais pas une Création originale Netflix",     "correct": true},
			// 		{"option": "Non diffusée sur Netflix",      "correct": false} // no comma here
			// 	],
			// 	"correct": "<p><span>Bravo ! On continue...</span></p>",
			// 	"incorrect": "<p><span>Oups, c'est raté pour cette fois ! \"Pretty Little Liars\" est diffusée sur Netflix, mais pas une Création originale Netflix. Désolé !</span></p>" // no comma here
			// },
			// { // Question 11 - Multiple Choice, Single True Answer
			// 	"q": "\"Stranger Things\" est une série...",
			// 	"a": [
			// 		{"option": "Création originale Netflix",      "correct": true},
			// 		{"option": "Diffusée sur Netflix, mais pas une Création originale Netflix",     "correct": false},
			// 		{"option": "Non diffusée sur Netflix",      "correct": false} // no comma here
			// 	],
			// 	"correct": "<p><span>Bravo ! On continue...</span></p>",
			// 	"incorrect": "<p><span>Oups, c'est raté pour cette fois ! \"Stranger Things\" est une Création originale Netflix.</span></p>" // no comma here
			// },
			// { // Question 12 - Multiple Choice, Single True Answer
			// 	"q": "\"Gossip Girl\" est une série...",
			// 	"a": [
			// 		{"option": "Création originale Netflix",      "correct": false},
			// 		{"option": "Diffusée sur Netflix, mais pas une Création originale Netflix",     "correct": true},
			// 		{"option": "Non diffusée sur Netflix",      "correct": false} // no comma here
			// 	],
			// 	"correct": "<p><span>Bravo ! On continue...</span></p>",
			// 	"incorrect": "<p><span>Oups, c'est raté pour cette fois ! \"Gossip Girl\" est diffusée sur Netflix, mais pas une Création originale Netflix. Désolé !</span></p>" // no comma here
			// },
			// { // Question 13 - Multiple Choice, Single True Answer
             //    "q": "\"Blindspot\" est une série...",
             //    "a": [
             //        {"option": "Création originale Netflix",      "correct": false},
             //        {"option": "Diffusée sur Netflix, mais pas une Création originale Netflix",     "correct": false},
             //        {"option": "Non diffusée sur Netflix",      "correct": true} // no comma here
             //    ],
             //    "correct": "<p><span>Bravo ! On continue...</span></p>",
             //    "incorrect": "<p><span>Oups, c'est raté pour cette fois ! \"Blindspot\" n'est pas diffusée du tout sur Netflix. Désolé !</span></p>" // no comma here
			// },
			// { // Question 14 - Multiple Choice, Single True Answer
			// 	"q": "Nouveau thème : \"Création originale Netflix\"... Quelle fut la 1ère ?",
			// 	"a": [
			// 		{"option": "Orange is The New Black",      "correct": false},
			// 		{"option": "Stranger Things",     "correct": false},
			// 		{"option": "House of Cards",      "correct": true} // no comma here
			// 	],
			// 	"correct": "<p><span>Bien joué ! Ce nouveau thème te convient bien on dirait...</span></p>",
			// 	"incorrect": "<p><span>Oups, c'est raté pour cette fois ! \"House of Cards\", sorti en 2013, fut la 1ère \"Création originale Netflix\".</span></p>" // no comma here
			// },
			// { // Question 15 - Multiple Choice, Single True Answer
			// 	"q": "Quelle \"Création originale Netflix\" produite par Séléna Gomez, a créé la polémique dernièrement ?",
			// 	"a": [
			// 		{"option": "New Girl",      "correct": false},
			// 		{"option": "13 Reasons Why",     "correct": true},
			// 		{"option": "Hannah Jones",      "correct": false} // no comma here
			// 	],
			// 	"correct": "<p><span>Bravo ! On continue...</span></p>",
			// 	"incorrect": "<p><span>Oups, c'est raté pour cette fois ! \"13 Reasons Why\", sorti en Février 2017, a créé la polémique car beaucoup considèrent que la série montre, de façon trop réaliste, le suicide d'adolescents.</span></p>" // no comma here
			// },
			// { // Question 16 - Multiple Choice, Single True Answer
			// 	"q": "Quelle \"Création originale Netflix\" raconte la vie d'ados après un meurtre dans leur village ?",
			// 	"a": [
			// 		{"option": "Riverdale",      "correct": true},
			// 		{"option": "Missipi Outs",     "correct": false},
			// 		{"option": "San Francisco Diet",      "correct": false} // no comma here
			// 	],
			// 	"correct": "<p><span>Bravo ! On continue...</span></p>",
			// 	"incorrect": "<p><span>Oups, c'est raté pour cette fois ! C'est \"Riverdale\" !</span></p>" // no comma here
			// },
			// { // Question 17 - Multiple Choice, Single True Answer
			// 	"q": "Quelle \"Création originale Netflix\" parle de Pablo Escobar, trafiquant de drogue d'Amérique latine ?",
			// 	"a": [
			// 		{"option": "Drugs",      "correct": false},
			// 		{"option": "Narcos",     "correct": true},
			// 		{"option": "Chapo",      "correct": false} // no comma here
			// 	],
			// 	"correct": "<p><span>Bravo ! On continue...</span></p>",
			// 	"incorrect": "<p><span>Oups, c'est raté pour cette fois ! C'est \"Narcos\" !</span></p>" // no comma here
			// },
			// { // Question 18 - Multiple Choice, Single True Answer
			// 	"q": "Quelle \"Création originale Netflix\" humoristique relate la vie en colocation d'une femme et trois hommes ?",
			// 	"a": [
			// 		{"option": "New Girl 2.0",      "correct": false},
			// 		{"option": "New Girl | colocation",     "correct": false},
			// 		{"option": "New Girl",      "correct": true} // no comma here
			// 	],
			// 	"correct": "<p><span>Bravo ! On continue...</span></p>",
			// 	"incorrect": "<p><span>Oups, c'est raté pour cette fois ! C'est \"New Girl\" !</span></p>" // no comma here
			// },
			// { // Question 19 - Multiple Choice, Single True Answer
			// 	"q": "Dans quel film, \"Création originale Netflix\", joue Will Smith ?",
			// 	"a": [
			// 		{"option": "Okja",      "correct": false},
			// 		{"option": "Bright",     "correct": true},
			// 		{"option": "1922",      "correct": false} // no comma here
			// 	],
			// 	"correct": "<p><span>Bravo ! On continue...</span></p>",
			// 	"incorrect": "<p><span>Oups, c'est raté pour cette fois ! C'est \"Bright\" !</span></p>" // no comma here
			// },
			// { // Question 20 - Multiple Choice, Single True Answer
			// 	"q": "Dernière question : Quel film, \"Création originale Netflix\", a été présenté en compétition au Festival de Cannes 2017 ?",
			// 	"a": [
			// 		{"option": "Okja",      "correct": true},
			// 		{"option": "To the Bone",     "correct": false},
			// 		{"option": "1922",      "correct": false} // no comma here
			// 	],
			// 	"correct": "<p><span>Bravo ! Ce quiz est terminé.</span></p>",
			// 	"incorrect": "<p><span>Oups, c'est raté ! \"Okja\" a été le 1er film non diffusé en salle en compétition au Festival de Cannes 2017. Ce quiz est terminé.</span></p>" // no comma here
			// }
			//
			
			
			// AUTRES POSSIBILITES DE QUESTIONS : CHOIX MULITPLES....
			
			// { // Question 2 - Multiple Choice, Multiple True Answers, Select Any
			// 	"q": "Which of the following best represents your preferred breakfast?",
			// 	"a": [
			// 		{"option": "Bacon and eggs",               "correct": false},
			// 		{"option": "Fruit, oatmeal, and yogurt",   "correct": true},
			// 		{"option": "Leftover pizza",               "correct": false},
			// 		{"option": "Eggs, fruit, toast, and milk", "correct": true} // no comma here
			// 	],
			// 	"select_any": true,
			// 	"correct": "<p><span>Nice!</span> Your cholestoral level is probably doing alright.</p>",
			// 	"incorrect": "<p><span>Hmmm.</span> You might want to reconsider your options.</p>" // no comma here
			// },
			// { // Question 3 - Multiple Choice, Multiple True Answers, Select All
			// 	"q": "Where are you right now? Select ALL that apply.",
			// 	"a": [
			// 		{"option": "Planet Earth",           "correct": true},
			// 		{"option": "Pluto",                  "correct": false},
			// 		{"option": "At a computing device",  "correct": true},
			// 		{"option": "The Milky Way",          "correct": true} // no comma here
			// 	],
			// 	"correct": "<p><span>Brilliant!</span> You're seriously a genius, (wo)man.</p>",
			// 	"incorrect": "<p><span>Not Quite.</span> You're actually on Planet Earth, in The Milky Way, At a computer. But nice try.</p>" // no comma here
			// }
			
		]
	};