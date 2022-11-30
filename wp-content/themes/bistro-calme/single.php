<?php get_header(); ?>

<h2 class="pageTitle">最新情報<span>NEWS</span></h2>

<main class="main">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-9">

				<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
						<article id="post-<?= the_ID(); ?>" <?= post_class('article'); ?>>
							<header class="article_header">
								<h2 class="article_title"><?= the_title(); ?></h2>
								<div class="article_meta">
									<?= the_category(); ?>
									<time class="news_time" datetime="<?= the_time('Y-m-d') ?>"><?= the_time('Y年m月d日') ?></time>
								</div>
							</header>

							<div class="article_body">
								<div class="content">
									<?= the_content(); ?>
								</div>
							</div>

							<div class="postLinks">
								<div class="postLink postLink-prev"><?= previous_post_link('<i class="fas fa-chevron-left"></i>%link'); ?></div>
								<div class="postLink postLink-next"><?= next_post_link('%link<i class="fas fa-chevron-right"></i>'); ?></div>
							</div>
						</article>
					<?php endwhile; ?>
				<?php endif; ?>

			</div>

			<div class="col-12 col-md-3">
				<?= get_sidebar('categories'); ?>
				<?= get_sidebar('archives'); ?>
			</div>
		</div>
	</div>
</main>

<?= get_footer(); ?>