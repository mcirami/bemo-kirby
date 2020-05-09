<!doctype html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">

	<?php if($page->metaindex() == "noindex") : ?>
		<meta name="robots" content="noindex">
	<?php endif; ?>

	<meta name="title" content="<?= $page->metatitle() ?>">
	<meta name="description" content="<?= $page->metadescription() ?>">


	<!-- The title tag we show the title of our site and the title of the current page -->
	<title><?= $site->title() ?> | <?= $page->title() ?></title>

	<!-- Stylesheets can be included using the `css()` helper. Kirby also provides the `js()` helper to include script file.
				More Kirby helpers: https://getkirby.com/docs/reference/templates/helpers -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<?= css(['assets/css/index.css', '@auto']) ?>
	<?= css(['assets/css/templates/main.css', '@auto']) ?>
	<?= css(['assets/css/templates/contact-us.css', '@auto']) ?>

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<?= js(['assets/js/app.js', '@auto']) ?>

	<?php if ($site->googleanalytics() != "") : ?>
		<script>
			<?= $site->googleanalytics() ?>
		</script>
	<?php endif; ?>

	<?php if ($site->facebookpixel() != "") : ?>
		<script>
			<?= $site->facebookpixel() ?>
		</script>
	<?php endif; ?>

</head>
<body>

	<header class="header">
		<nav class="navbar navbar-expand-lg w-100">
			<a class="navbar-brand logo" href="<?= $site->url() ?>/main"><?= $site->content()->get('logo')->toFile() ?? $site->image(); ?></a>
			<button class="navbar-toggler bg-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				<span class="navbar-toggler-icon"></span>
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<?php
					foreach ($site->children()->listed() as $item): ?>
						<li>
							<?= $item->title()->link() ?>
						</li>
					<?php endforeach ?>
				</ul>
			</div>
		</nav>
	</header>
	<div class="pager_wrapper">