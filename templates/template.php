<!doctype html>
<html>
<head>
	<title>Doomla</title>
	<link rel="stylesheet" href="templates/template.php">
</head>
<body>
	<selection>
		<article>
			<?php echo getContent($conn, $page); ?>
		</article>
	</selection>
</body>
</html>