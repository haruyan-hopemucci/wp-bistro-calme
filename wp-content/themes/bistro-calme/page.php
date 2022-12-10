<?= get_header(); ?>


<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>

		<h2 class="pageTitle"><?= the_title() ?><span><?= strtoupper($post->post_name) ?></span></h2>
		<main class="main">
			<div class="container">
				<div class="content">

					<?= the_content(); ?>

				</div>
			</div>
		</main>
	<?php endwhile; ?>
<?php endif; ?>

<?= get_footer(); ?>