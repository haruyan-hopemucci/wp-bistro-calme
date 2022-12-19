<?= get_header() ?>

<h2 class="pageTitle">メニュー<span>MENU</span></h2>

<?php
$kinds = get_terms(array('taxonomy' => 'kind'));
?>
<?php if (!empty($kinds)) : ?>
    <div class="pageNav">
        <ul>
            <?php foreach ($kinds as $kind) : ?>
                <li>
                    <a href="<?= get_term_link($kind) ?>"><?= $kind->name ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>

<main class="main">
    <?php foreach ($kinds as $kind) : ?>
        <section class="sec">
            <div class="container">
                <div class="sec_header">
                    <h2 class="title title-jp"><?= $kind->name ?></h2>
                    <span class="title title-en"><?= strtoupper($kind->slug) ?></span>
                </div>
                <div class="row justify-content-center">
                    <?php
                    //メニューの投稿タイプを選択 1ページのアイテム数は無制限とする
                    $args = array('post_type' => 'menu', 'post_per_page' => -1);
                    // 絞り込みクエリの作成
                    $taxquerysp = array('relation' => 'AND');
                    $taxquerysp[] = array(
                        'taxonomy' => 'kind',
                        'terms' => $kind->slug,
                        'field' => 'slug'
                    );
                    $args['tax_query'] = $taxquerysp;

                    $the_query = new WP_Query($args);
                    ?>

                    <?php if ($the_query->have_posts()) : ?>
                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                            <div class="col-md-3">
                                <?= get_template_part('template-parts/loop', 'menu') ?>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>
            </div>
        </section>
    <?php endforeach; ?>
</main>

<?= get_footer() ?>