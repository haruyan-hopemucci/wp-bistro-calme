<?php get_header(); ?>

<section class="sec">
	<div class="container">
		<header class="sec_header">
			<h2 class="title">最新情報<span>NEWS</span></h2>
		</header>
		<div class="row">
			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
					<div class="col-md-4">
						<article id="post-<?= the_ID() ?>" <?= post_class('news'); ?>>
							<div class="news_pic">
								<a href="<?= the_permalink(); ?>">
									<img src="<?= get_template_directory_uri(); ?>/assets/img/home/news_img-1.jpg" alt="">
								</a>
							</div>
							<div class="news_meta">
								<?= the_category(); ?>
								<time class="news_time" datetime="<?= the_time('Y-m-d') ?>"><?= the_time('Y年m月d日') ?></time>
							</div>
							<h2 class="news_title"><a href="<?= the_permalink(); ?>"><?= the_title(); ?></a></h2>
							<div class="news_desc">
								<p><?= the_excerpt(); ?></p>
								<p><a href="<?= the_permalink(); ?>">[続きを読む]</a></p>
							</div>
						</article>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>

		<p class="sec_btn">
			<a href="" class="btn btn-default">最新情報の一覧<i class="fas fa-angle-right"></i></a>
		</p>

	</div>
</section>

<section class="sec bg-gray">
	<div class="container">
		<header class="sec_header">
			<h2 class="title">店舗情報<span>INFORMATION</span></h2>
		</header>

		<div class="row">
			<div class="col-md-6">
				<a href="#" class="bnr" style="background-image: url('<?= get_template_directory_uri(); ?>/assets/img/home/bnr_about@2x.jpg')">
					<div class="bnr_inner">
						わたしたちについて<span>ABOUT</span>
					</div>
				</a>
			</div>

			<div class="col-md-6">
				<a href="#" class="bnr" style="background-image: url('<?= get_template_directory_uri(); ?>/assets/img/home/bnr_access@2x.jpg')">
					<div class="bnr_inner">
						アクセス<span>ACCESS</span>
					</div>
				</a>
			</div>
		</div>
	</div>
</section>

<section class="sec sec-bg">
	<div class="sec_inner">
		<header class="sec_header">
			<h2 class="title">お問い合わせ<span>CONTACT</span></h2>
		</header>

		<div class="sec_body contact">
			<div class="contact_icon">
				<i class="fas fa-phone"></i>
			</div>
			<div class="contact_body">
				<p>
					お気軽にお問い合わせください
					<span>03-1234-5678</span>
				</p>
			</div>
		</div>

		<div class="sec_btn">
			<a href="" class="btn btn-default">メールフォーム<i class="fas fa-angle-right"></i></a>
		</div>
	</div>
</section>

<?= get_footer(); ?>