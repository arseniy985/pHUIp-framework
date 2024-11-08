<?php

/**
 * ? Страница шаблон которая будет на всех роутах где вызван `generatePage()`
 */
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
    <link rel="stylesheet" href="<?php echo $globalCss; ?>">
	<link rel="stylesheet" href="<?php echo $css; ?>">
	<script src="<?php echo $javascript; ?>" async></script>
</head>

<body>
	<header><a href="/">home</a><br><a href="/test">test</a></header>
	<?php include($content) ?>
</body>

</html>
