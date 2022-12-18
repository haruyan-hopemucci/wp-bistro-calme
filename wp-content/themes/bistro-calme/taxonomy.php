<?= get_header() ?>

<h2 class="pageTitle">メニュー<span>MENU</span></h2>

<main class="main">
    <section class="sec">
        <div class="container">
            <div class="sec_header">
                <?php
                $kind_slug = get_query_var('kind');
                $kind = get_term_by('slug', $kind_slug, 'kind');
                ?>
                <h2 class="title title-jp"><?= $kind->name ?></h2>
                <span class="title title-en"><?= strtoupper($kind->slug) ?></span>
            </div>
            <div class="row justify-content-center">

                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="col-md-3">
                            <?= get_template_part('template-parts/loop', 'menu') ?>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>

            </div>
        </div>
    </section>
</main>

<?= get_footer() ?>