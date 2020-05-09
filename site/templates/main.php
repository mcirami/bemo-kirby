<?php snippet('header') ?>

		<section class="row hero">
			<div class="col-12">
				<?= $page->content()->get('hero')->toFile() ?? $page->image(); ?>
				<div class="text_wrap">
					<h1><?= $page->herotext() ?></h1>
				</div>
			</div>
		</section>

		<div class="row page_content">
			<div class="col-12">

				<div class="subheader">
					<h2><?= $page->pagesubheader()->kt() ?></h2>
				</div>

				<section class="row">
					<div class="col-12">
						<div class="section_title text">
							<h3><?= $page->overviewsectiontitle()->kt() ?></h3>
						</div>
						<div class="section_text text">
							<?= $page->overviewsectiontext()->kt() ?>
						</div>
					</div>
				</section>

				<section class="row">
					<div class="col-12">
						<div class="section_title text">
							<h3><?= $page->purposesectiontitle()->kt() ?></h3>
						</div>
						<div class="section_text text">
							<?= $page->purposesectiontext()->kt() ?>
						</div>
					</div>
				</section>

				<section class="row">
					<div class="col-12">
						<div class="section_title text">
							<h3><?= $page->historysectiontitle()->kt() ?></h3>
						</div>
						<div class="section_text text">
							<?= $page->historysectiontext()->kt() ?>
						</div>
					</div>
				</section>

				<section class="row">
					<div class="col-12">
						<div class="section_title text">
							<h3><?= $page->questionssectiontitle()->kt() ?></h3>
						</div>
						<div class="section_text text">
							<?= $page->questionssectiontext()->kt() ?>
						</div>
					</div>
			</section>

				<section class="row">
					<div class="col-12">
						<div class="section_title text">
							<h3><?= $page->competenciessectiontitle()->kt() ?></h3>
						</div>
						<div class="section_text text">
							<?= $page->competenciessectiontext()->kt() ?>
						</div>
					</div>
				</section>

				<section class="row">
					<div class="col-12">
						<div class="section_title text">
							<h3><?= $page->structuresectiontitle()->kt() ?></h3>
						</div>
						<div class="section_text text">
							<?= $page->structuresectiontext()->kt() ?>
						</div>
					</div>
				</section>

				<section class="row">
					<div class="col-12">
						<div class="section_title text">
							<h3><?= $page->referencesectiontitle()->kt() ?></h3>
						</div>
						<div class="section_text text">
							<?= $page->referencesectiontext()->kt() ?>
						</div>
					</div>
				</section>

			</div><!-- col-12 -->

		</div><!-- page_content -->


<?php snippet('footer') ?>