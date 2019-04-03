// var whiteRing = $("#white-ring");
// var yellowRing = $("#yellow-ring");

var whiteRing = document.getElementById("white-ring");
var yellowRing = document.getElementById("yellow-ring");
var box = document.getElementById("box");
var sunshine = document.getElementById("sunshine");



new TimelineMax({ repeat: -1 })
	.fromTo(whiteRing, 1, { x:0, y:0 }, { x:-70, y: 10, ease:Power4.easeInOut }, .5)
	.fromTo(whiteRing, 1, { x:-70, y:10 }, { x:0, y: 0, ease:Power4.easeInOut });

new TimelineMax({ repeat: -1 })
	.fromTo(yellowRing, 1, { x:0, y:0 }, { x:70, y: 10, ease:Power4.easeInOut }, .5)
	.fromTo(yellowRing, 1, { x:70, y:10 }, { x:0, y: 0, ease:Power4.easeInOut });

new TimelineMax({ repeat: -1 })
	.fromTo(sunshine, 1, { x:-20, y:-20 }, { x:70, y: -20, ease:Power4.easeInOut }, .5)
	.fromTo(sunshine, 1, { x:70, y:-20 }, { x:-20, y: -20, ease:Power4.easeInOut });



