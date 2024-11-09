<?php

/**
 * ? Страница шаблон которая будет на всех роутах где вызван `generatePage()`
 * @var string $globalCss ссылка на global.css: resources/pages/global.css
 * @var string $css ссылка на page.css
 * @var string $javascript ссылка на js
 * @var string $content ссылка на страницу контента
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
