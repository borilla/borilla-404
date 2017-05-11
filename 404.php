<?php
	http_response_code(404);
	$path = parse_url($_SERVER['REQUEST_URI'])['path'];
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>404 Not Found</title>
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
<link rel="stylesheet" href="/error/404.css" />
</head>
<body>
<header>
<a href="http://borilla.co.uk/" title="home">
<canvas class="kong"></canvas>
</a>
</header>
<main>
<h1>Not Found</h1>
<p>The requested URL <a href="<?php echo $path ?>"><?php echo $path ?></a> was not found on this server.</p>
</main>
<script src="/error/404.js"></script>
</body>
</html>
