(function (Math, document) {
	var random = Math.random;

	////////////////////////////////////////////////////////////////
	// generate noisy background
	////////////////////////////////////////////////////////////////

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
			x = random() * width;
			y = random() * height;
			c = random() * (COLOR_MAX - COLOR_MIN) + COLOR_MIN;

			pixel[0] = pixel[1] = pixel[2] = c;
			pixel[3] = 255;

			context.putImageData(imageData, x, y);
		}
	}

	var dataUrl = getNoiseDataUrl(64, 64);
	console.log(dataUrl);
	document.body.style.backgroundImage = 'url(' + dataUrl + ')';

	////////////////////////////////////////////////////////////////
	// animate kong canvas
	////////////////////////////////////////////////////////////////

	var leftSize = 25;
	var rightSize = 24;
	var topSize = 20;
	var bottomSize = 12;
	var imageSegments = {
		'left-arm': { x: 0, y: 0, w: leftSize, h: topSize, imageIndex: 0 },
		'right-arm': { x: leftSize, y: 0, w: rightSize, h: topSize, imageIndex: 0 },
		'left-leg': { x: 0, y: topSize, w: leftSize, h: bottomSize, imageIndex: 0 },
		'right-leg': { x: leftSize, y: topSize, w: rightSize, h: bottomSize, imageIndex: 0 },
		'mouth': { x: 15, y: 7, w: 19, h: 7, imageIndex: 0, noClear: true }
	};
	var images = document.querySelectorAll('.kong-img');
	var canvas = document.querySelector('.kong-canvas');
	var context = canvas.getContext('2d');
	var timeout = null;
	var prevIndex = 0;

	canvas.width = leftSize + rightSize;
	canvas.height = topSize + bottomSize;

	initialiseCanvas();
	swapAfterTimeout();

	function initialiseCanvas() {
		canvas.classList.add('is-loaded');
		context.drawImage(images[0], 0, 0);
	}

	function swapAfterTimeout() {
		timeout = setTimeout(function () {
			var name = chooseRandomSegmentName();
			switchImageSegment(name);
			swapAfterTimeout();
		}, 150);
	}

	function chooseRandomSegmentName() {
		var keys = Object.keys(imageSegments);
		var index = randomInt(keys.length - 1);
		// ensure not the same as previous index
		if (index >= prevIndex) {
			index += 1;
		}
		prevIndex = index;
		return keys[index];
	}

	function switchImageSegment(name) {
		var seg = imageSegments[name];

		// prevent mouth from changing too frequently
		if (name === 'mouth' && randomInt(10)) {
			return;
		}

		seg.imageIndex = seg.imageIndex ^ 1; // toggle between 0 and 1
		renderSegment(seg);

		// if one of the arms has changed then also re-render mouth
		if (name === 'left-arm' || name === 'right-arm') {
			renderSegment(imageSegments['mouth']);
		}
	}

	function renderSegment(seg) {
		var x = seg.x;
		var y = seg.y;
		var w = seg.w;
		var h = seg.h;

		if (!seg.noClear) {
			context.clearRect(x, y, w, h);
		}
		context.drawImage(images[seg.imageIndex], x, y, w, h, x, y, w, h);
	}

	function randomInt(max) {
		return Math.floor(random() * max);
	}
})(Math, document);
