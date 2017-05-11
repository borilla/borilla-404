(function () {
	var COLOR_MIN = 12; // colour intensity for pixels
	var COLOR_MAX = 32; // colour intensity for pixels
	var AMOUNT = 0.5; // proportion of pixels to add noise to
	var ALPHA = 16; // max alpha amount for noise

	function getNoiseDataUrl(width, height) {
		var canvas = document.createElement('canvas');

		canvas.width = width;
		canvas.height = height;
		addRandomNoise(canvas);

		return canvas.toDataURL();
	}

	function addRandomNoise(canvas) {
		var width = canvas.width;
		var height = canvas.height;
		var context = canvas.getContext('2d');
		var imageData = context.createImageData(1, 1);
		var pixel = imageData.data;
		var i, x, y, c;

		for (i = 0; i < width * height * AMOUNT; ++i) {
			x = Math.random() * width;
			y = Math.random() * height;
			c = Math.random() * (COLOR_MAX - COLOR_MIN) + COLOR_MIN;

			pixel[0] = pixel[1] = pixel[2] = c;
			pixel[3] = 255;

			context.putImageData(imageData, x, y);
		}
	}

	var dataUrl = getNoiseDataUrl(64, 64);
	console.log(dataUrl);
	document.body.style.backgroundImage = 'url(' + dataUrl + ')';
})();
