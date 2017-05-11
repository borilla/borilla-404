(function () {
	var imageUrls = [
		'http://borilla.co.uk/images/kong/kong-1-noise.gif',
		'http://borilla.co.uk/images/kong/kong-2-noise.gif'
	];
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
	var canvas = document.querySelector('canvas.kong');
	var context = canvas.getContext('2d');
	var timeout = null;
	var prevIndex = 0;
	var images; // will contain preloaded <img> elements

	canvas.width = leftSize + rightSize;
	canvas.height = topSize + bottomSize;

	preloadImages(imageUrls, function (_images) {
		images = _images;
		initialiseCanvas();
		swapAfterTimeout();
	});

	function preloadImages(imageUrls, onAllLoaded) {
		var pending = 0;
		var imgs = flattenArray(imageUrls).map(function (url) {
			pending++;
			return createImageElement(url);
		});

		function createImageElement(url) {
			var img = document.createElement('img');
			img.src = url;
			img.onload = onImageLoaded;
			return img;
		}

		function onImageLoaded() {
			pending--;
			if (pending === 0) {
				onAllLoaded(imgs);
			}
		}
	}

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
		var index = random(keys.length - 1);
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
		if (name === 'mouth' && random(10)) {
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

	function random(max) {
		return Math.floor(Math.random() * max);
	}

	function flattenArray(arr) {
		return arr.reduce(function (flat, toFlatten) {
			return flat.concat(Array.isArray(toFlatten) ? flattenArray(toFlatten) : toFlatten);
		}, []);
	}
})();
