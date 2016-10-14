require.config({
	baseUrl: "traktorOMaskin/../wp-content/themes/yeopress/js",
	paths: {
		jquery: "..\\..\\..\\..\\js\\vendor\\jquery\\jquery",
		Swiper: "..\\..\\..\\..\\js\\vendor\\Swiper\\dist\\js\\swiper",
		"animate.css": "..\\..\\..\\..\\js\\vendor\\animate.css\\gulpfile",
		parallax: "..\\..\\..\\..\\js\\vendor\\parallax.js",
		"parallax.js": "..\\..\\..\\..\\js\\vendor\\parallax.js\\parallax",
		"desandro-matches-selector": "..\\..\\..\\..\\js\\vendor\\desandro-matches-selector\\matches-selector",
		"ev-emitter": "..\\..\\..\\..\\js\\vendor\\ev-emitter\\ev-emitter",
		"fizzy-ui-utils": "..\\..\\..\\..\\js\\vendor\\fizzy-ui-utils\\utils",
		"get-size": "..\\..\\..\\..\\js\\vendor\\get-size\\get-size",
		masonry: "..\\..\\..\\..\\js\\vendor\\masonry\\masonry",
		video: "..\\..\\..\\..\\js\\vendor\\video.js\\dist\\video-js\\video.dev",
		instafeed: "..\\..\\..\\..\\js\\vendor\\instafeed.js",
		"instafeed.js": "..\\..\\..\\..\\js\\vendor\\instafeed.js\\instafeed"
	}
});

require(['jquery'], function($) {
	console.log('Working!!');
});
