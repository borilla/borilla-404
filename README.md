# borilla-404
Custom 404 page for [http://borilla.co.uk](http://borilla.co.uk/bollox.html), containing the following features

## Single http request

All styles, scripts and images are minified and inlined in the single HTML response

## Animated kong

Zoomed pixelated canvas element that provides "rustic" animation by switching parts of the
image between two source images. See my trials at https://jsfiddle.net/user/borilla/fiddles/.
The two source images are base-64 encoded and included (hidden) in the HTML page

## Pixelated noisy background

The body background texture was originally a 10kB PNG image. This is now generated by about
300 bytes of minified javascript on page-load, without needing any separate image request

## Live example

See a live example at http://borilla.co.uk/bollox.html (or any other non-existent page!)
