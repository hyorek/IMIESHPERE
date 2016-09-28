
/*
 * Fonction qui reproduit le comportement d'un acordion
 * utiliser dans listEvent
 */
function changeVisu(elem, c1, c2) {
	/*elem = element sur le quel ont click /
	 *  c1 = class de l'element / 
	 *  c2 = class class de l'element selectionner
	 */
	var i = 0;
	var verifclass = 0;
	/* i = variable d'incrementation
	 * verifclass = boolean pour reduire l'evenemnt si il est selectionner et l'agrandire si il ne l'est pas*/
	if (elem.className === c1)
		verifclass = 1;

	var tmp = document.getElementsByClassName(c1);
	/* boucle sur tout les autres element que celui sur le quel ont click qui sont deja selectionner pour les deselectionner */
	while (i < tmp.length)
	tmp[i++].className = c2;

	/* si l'element clicker est selectionner ont le deselectionne et inversement */
	if (verifclass === 1)
		elem.className = c2;
	else
		elem.className = c1;
}