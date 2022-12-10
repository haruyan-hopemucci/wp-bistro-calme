<?= get_header() ?>

<h2 class="pageTitle">最新情報<span>NEWS</span></h2>

<main class="main">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-9">
                <?php if (is_month()) : ?>
                    <h2 class="main_title"><?= the_time('Y年m月'); ?></h2>
                <?php else : ?>
                    <h2 class="main_title"><?= wp_title(''); ?></h2>
                <?php endif; ?>
                <div class="row">

                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <div class="col-md-4">
                                <?= get_template_part('template-parts/loop', 'news') ?>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>
            </div>

            <div class="col-12 col-md-3">
                <?= get_sidebar('categories'); ?>
                <?= get_sidebar('archives'); ?>
            </div>
        </div>
    </div>
</main>


<?= get_footer() ?>