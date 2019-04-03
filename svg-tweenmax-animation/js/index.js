// var whiteRing = $("#white-ring");
// var yellowRing = $("#yellow-ring");

var whiteRing = document.getElementById("white-ring");
var yellowRing = document.getElementById("yellow-ring");
var box = document.getElementById("box");


new TimelineMax({ repeat: -1 })
	.fromTo(whiteRing, 1, { x:0, y:0 }, { x:-70, y: 10, ease:Power4.easeInOut }, .5)
	.fromTo(whiteRing, 1, { x:-70, y:10 }, { x:0, y: 0, ease:Power4.easeInOut });

new TimelineMax({ repeat: -1 })
	.fromTo(yellowRing, 1, { x:0, y:0 }, { x:70, y: 10, ease:Power4.easeInOut }, .5)
	.fromTo(yellowRing, 1, { x:70, y:10 }, { x:0, y: 0, ease:Power4.easeInOut });

new TimelineMax({ repeat: -1 })
	.fromTo(box, 1, { x:0, y:0 }, { x:70, y: 10, ease:Power4.easeInOut }, .5)
	.fromTo(box, 1, { x:70, y:10 }, { x:0, y: 0, ease:Power4.easeInOut });