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
<link rel="stylesheet" href="/error/404.min.css" />
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
<img class="kong-img" src="data:image/gif;base64,R0lGODlhMQAgAOeSAK4AArQAALUAALQABbcAALUABrgAALkAALcAB7ADALgACLADA7kACb8AAL8AA8EAAMAABMIAALsCAcMAAMIABboCCsMABrEGAMQAB7EGBLwFALwFArIJALwFC7IJBb0IAL0IA7MMALMMBr8LALUOAL4LBLUOB8ERBvZZAP9aAP9bAP9cAPpdBfxeAPteB/1fAP5gAPhiBf9hAPljAP9iAPpkAPxlAPdnAP1mAPhoAP5nAPhoCflpAP9oAPlpC/tqAP9pAPxrAP9qAv1tAP5uAP9vAvtxAP9wBP90BPmnSPqoSfaqSferSvesUvmtTPitU/uuRvquTfawTfyvTv+uUPuvVfexTvaxVf2wT/ywVviyVv6xUPuzSf2xV/+ySvqzUP+yUfy0Svm0V/+zWP21S/u1Uf+0Uvq1WPa3Uf+0Wf+1U/y2Uvu2Wf+1Wvi4Uv63TPe4Wf23U/q5S/23Wvm5U/+4Tf+4VPu6TP+5Tv64W/q6VPm6W/+5Vf+6T/y7Tv+5XPu7Vf+6Vv28T/+6Xf28Vv+9UP69V/++Uf++WP+/Wf+/YP/AWv749/L89/37//v9+vj+//7//P///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////yH5BAEKAP8ALAAAAAAxACAAAAj+AP8JHAjGzpdCAxMmBAEBgQEDFgwonDjHEBkwExOiYYKnDg8+dTIKfGiAwwQOBkAcEPmvoI5BXgrxmRiGjB8bZC724DNz4oEHYMAcQACCjx0DEDJy4VOkEBktMvjsIZPQjiIwhlzYSdGjR8YJDLqAGRMGKB8udiasnNhjiA5AMvwUMmRloAE8OrbYuZIij5IuCfkYYiDCkMxIkbYgrrKlzgEDehNGsUJGRx08aIZ0kfjPwAEbPaLgeYLoT0IwbuwcUDkHTCQDYAxE+kIGwYEDXwZ9kWzHDh4wQ2QAWKsWAoQURSYaMLwFpYjecwZZieJnDp+hIAwZyrM2oQwbIDz+rwz/+IAOHSkNiChZ4AOIPF8M2YEChozKCXMKzcFjJw8ZAxmUhwAHj72A3kMPgACAAQ/c5sN9KWXAwQcHaKHbI5GM0RsZvfH0BWJ1GFaSAQXY9hAIOqwGgWckHdDDSRSmVIEBJ3CAxxyOROLIAYg1YgAjiPGIWG9DEfjYQwwcMERKtnVGYXgIOPSYByQhwgcIkaBUQSTDyXbAgpFk9wVJDxBoAAMP2QYCAwOteBsIUZpE0nBgfBgJAohliRgkskVShxS3HZCBSgwg8GQBnk1ElAUiQOnQQwdwEIVhYeTJB5CJ4WHRARCI8BgEKDHAAQcqsRTligxBGikIJRjwQRj+vn2hhxu0GgIpAg2KN4EBCCzIGUv/rEglCGrtmpJKIKx5wATGhqDWsiw65AGFEwDr06O2RYSshGnyitJtBgwXnnggWCsSREMhoAMHfPSQhw6GpLArCD1sMUQhKeBhwBAlepaUuSIV2QNKPeCByBZf8HFeCrD29kUPjx3YHcDXDmWEDnzgoYVvwJ1X0F6IhDHEEMmWSvFXKh0ggwyI2BECGFsoLAMPVzSBBwCFfKEDeAbsenJGPWRgQBFK8vHFH2T8Aa8VWuhABxh6gIGIDg/oYBsMPysE8YoG2HDACy4Ucd4WYHRBBR9DFAEDDEVwMARKJXmV9T9tPzQBBIHCYMjnF1vo9UXCIKFdUqS73jZE1iSrKR5K8BbRbhJ2bKHDEjYgskN6RxYew8kwkMcQq+HNWMQWPOjBAxgw8IECHzwE6ll4QvOqA8UpljTjAUmeicRD6C2Zwr4ckNDDsYYiuNrsAMsw4omrAoASS+SaydBQDMhwsrecPpYsmtZ++lOk/k5sLrgsgoCoBQADCHcGuSNAcRcPOFHbbWDgcQBgFHtxAB2IsIiHFXexlh1kcJED2EEOWbADCLSAEYoZhQFZCMMg5gABRMDBBvjLSBd0kIWC8CQKhUDEF+yQNTzwxxCi4UP95gCvhAQEADs=" />
<img class="kong-img" src="data:image/gif;base64,R0lGODlhMQAgAMZ8AK4AArQAALUAALQABbcAALUABrgAALkAALcAB7ADALgACLADA7kACb8AAL8AA8EAAMAABMIAALsCAcMAAMIABboCCsMABrEGALEGBLwFArIJALwFC7IJBb0IAL0IA7MMALMMBr4LBP9aAPpdAP9cAPpdBfxeAP5gAP9hAPljAP9iAPpkAPxlAPdnAP1mAPhoAP5nAPlpAP9oAPtqAP9pAPxrAP9qAvduAP5uAPlwAP9vAv9wBP1zAvmtTPuuRvquTf+tT/quVPawTf+uSPyvTvuvVfexTv2wT/myT/+xSfiyVv6xUPuzSf2xV/+ySvqzUPW1UP+yUf+zS/y0Svm0V/+zWP21S/u1Uf+0Uvq1WPa3Uf+0Wf+1U/y2Uvu2Wf+1Wvi4Uv63TP23U/q5S/23Wvm5U/+4Tf+4VPu6TP+5Tv64W/q6VP+5Vf+6T/y7Tvu7Vf+6Vv28T/+6Xf28Vve+Xf+9UP++Sf69V/m/V/++Uf+/Wf7//P///////////////yH5BAEKAH8ALAAAAAAxACAAAAf+gH+Cg4SFhh4QCAYGFgaGj5CRkn+LBhoTGgYeB5OdnoMHD1FRBwgebGcGEJ+skBMMTVFVU6JsTGcTnK27qCB3dWx7e0vCRUtmB2ZFu59pTUKbZFF7BlEGe09WCAdvS0bMnWxDYwYgZ2dkckY/bmRspXVpdeCRJx4GB0l3Zz5RVpsTyNQhk+Ycgkww6BFigWIRhCh6otyR6A5dFDZJ0kR5cubeAREyFLLYhKCChiRPkGzTpOnAogMH1HQ7cM8DhxrMZMDweADDATZ1Yp6JouZOEjZF1typciBKj20aEDw4cCPhJxgTOsCE4LLUGTZ32Kh50uSHlSdR0qCKgiAXPgT+HRCF7FQAAMwKOiAAkPrBwJI6etgoGXvHjp0oZ5QggrlIxiIA+DpNMLBSwwkWqhBsO/AD1dcmeNzocfuyBopcHjwwcDRJlU18BnSIqKF5UYVNAAq8pGwAMozLBiZ4qFAh8qQH+B5k0uBBZ4wDZN6c4XBPkSor8QzUgCFDkXXYnhh3kJqLpoE1VSbSaQjDihUgd6BM+OBy0T3KujxVgt11EZtTF4kQxRpBsWFAcTB5wBw+Huyy2GYwuQRBQXc0ocMSaWAHGWUPbIZPfsy8VApMb3CgxEYi/KUEAk98iElwCv0BQwkwYGYADCIgsYQabFShAxsoGGFFGb/IcNoBMaDzoMNcrZygQykfGrAaDFRSWccZa8RwAgw1iGCfS5cckAMKrJyAwAcQftiBASeUsQQbZUwxkRVm7DSBhwAtYlUnMCzCwQEQMNAXC5PJ8AQPd7DAhgxnxAAkczLUZ8kBFUCw5yQQaLLJARbch6YBKDyhAwL/idCECIxRphtMHZryyT0hKCIpAgV8YM8EJ7gEwE4e9BmhpvhoBWIkf2YCwQQgKEcTAxi0thqaBbyCzwdrSnJHGmkw9itru5QyWQgGrHmHEnc88kQdtIz13z0aKJQqFE9A4YEVaRlyxrmypFJHE2eUSw+c/mCA1r4/nBHjwQgn/EggADs=" />
<script src="/error/404.min.js"></script>
</body>
</html>
