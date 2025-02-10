import { Fancybox } from "@fancyapps/ui";

//wait until images, links, fonts, stylesheets, and js is loaded
window.addEventListener("load", () => {

	if ($(".eigenprodukte-template")[0]) {
		Fancybox.bind("[data-fancybox='gallery']", {
			Images: {
				Panzoom: {
					panMode: "mousemove",
					mouseMoveFactor: 1.1,
					mouseMoveFriction: 0.12,
				},
				zoom: true,
			},
			Toolbar: {
				display: {
					right: [
						"close"
					],
				},
			}
		});
	}

	if ( $(".page-template-page-gallery")[0] || $(".page-template-page-stay-long-term")[0] ) {
		Fancybox.bind("[data-fancybox]", {
			// Your custom options
			Images: {
				Panzoom: {
					panMode: "mousemove",
					mouseMoveFactor: 1.1,
					mouseMoveFriction: 0.12,
				},
				zoom: true,
			},
			Toolbar: {
				display: {
					left: [
						//"infobar"
					],
					middle: [
						//"zoomIn",
						//"zoomOut",
						//"toggle1to1",
						//"rotateCCW",
						//"rotateCW",
						//"flipX",
						//"flipY",
					],
					right: [
						//"slideshow",
						//"thumbs",
						//"zoomIn",
						"close"
					],
				},
			},
			//hideScrollbar: false,
		});
	}
}, false);
