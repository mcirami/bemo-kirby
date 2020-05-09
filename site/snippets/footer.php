
</div><!-- page_wrapper -->
<footer class="row">


		<div class="text_wrap text-center text-md-left col-12 col-md-8">
			<p class="float-none float-md-left"><?= $site->footercopy(); ?></p>
			<?php foreach ($site->footerlinks()->toStructure() as $link): ?>
				<p class="float-none float-md-left"><?= html::a($link->url(), $link->text()) ?></p>
			<?php endforeach ?>
		</div>

		<div class="social_media text-center text-md-left col-12 col-md-4 text-right d-flex justify-content-center justify-content-md-end">
			<?php foreach ($site->social()->toStructure() as $social): ?>
				<a href="<?= $social->url() ?> "><?= $social->platform() ?></a>
			<?php endforeach ?>
		</div>

		<div class="arrow_wrap">
			<a href="#"><?= $site->content()->get('arrow-up')->toFile() ?? $site->image(); ?></a>
		</div>


</footer>
</body>
</html>