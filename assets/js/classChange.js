

var my = document.getElementsByClassName("container event-list");
var old = document.getElementsByClassName("container event-list-click");




/*
 * container event-list
 * container event-list-click
 */

document.getElementsByClassName("container event-list").addEventListener('click', function() {
	document.getElementsByClassName("container event-list-click").className = "container event-list";
	this.className = "container event-list-click"
}, capture);

document.getElementById('event').addEventListener('click', function() {
	console.log("plop");
	var i = 0;
	var verifclass = 0;
	var tmp = document.getElementsByClassName(c1);

	if (elem.className === c1) {
		verifclass = 1;
	}
	while (i < tmp.length)
	if (tmp[i++].className != c2) {
			tmp[i++].className = c2;
	}
	if (verifclass === 1)
		elem.className = c2;
	else
		elem.className = c1;
});