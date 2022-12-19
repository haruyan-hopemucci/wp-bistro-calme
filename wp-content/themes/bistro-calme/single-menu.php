<?= get_header() ?>

<h2 class="pageTitle">メニュー<span>MENU</span></h2>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

        <?php
        // この記事のタクソノミー（料理の種類）を取得する
        $obj = get_queried_object();
        $this_id = $id;    // 後でその他のメニュー表示で使う
        $kind_obj = get_the_terms($id, 'kind')[0];
        $kind_name = $kind_obj->name;
        $kind_slug = $kind_obj->slug;
        ?>
        <main class="main">
            <section class="sec">
                <div class="container">
                    <div class="article article-menu">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <h2 class="article_title"><?= the_title() ?></h2>
                                <div class="content">
                                    <p>
                                        <?= the_content() ?>
                                    </p>
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="article_pic">
                                    <?php
                                    $pic = get_field('pic');
                                    $pic_url = $pic['sizes']['large'];
                                    ?>
                                    <img src="<?= $pic_url ?>" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="info">
                    <div class="container">
                        <ul class="info_list">
                            <li>
                                <b>価格</b>
                                <span><?= get_field('price') ?></span>
                            </li>
                            <li>
                                <b>カロリー</b>
                                <span><?= get_field('calorie') ?> kcal</span>
                            </li>
                            <li>
                                <b>アレルギー</b>
                                <?php
                                $allergies = get_field('allergies');
                                ?>
                                <span><?= join('、', $allergies) ?></span>
                            </li>
                            <li>
                                <b>予約</b>
                                <span>
                                    <?= get_field('reservation') ? '必要あり' : '必要なし' ?>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>


            <section class="sec">
                <div class="container">
                    <div class="sec_header">
                        <h2 class="title title-jp">その他の<?= $kind_name ?></h2>
                        <span class="title title-en"><?= $kind_slug ?></span>
                    </div>
                    <div class="row justify-content-center">

                        <?php
                        //メニューの投稿タイプを選択 1ページのアイテム数は4とする
                        // ただし後から自身のページ表示を除くため１つ多く取得する
                        $args = array('post_type' => 'menu', 'posts_per_page' => 5);
                        // 絞り込みクエリの作成
                        $taxquerysp = array('relation' => 'AND');
                        $taxquerysp[] = array(
                            'taxonomy' => 'kind',
                            'terms' => $kind_slug,
                            'field' => 'slug'
                        );
                        $args['tax_query'] = $taxquerysp;

                        $the_query = new WP_Query($args);
                        ?>

                        <?php if ($the_query->have_posts()) : ?>
                            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                <?php
                                // 記事自身のアイテムは読み飛ばす
                                if ($this_id == $id) continue;
                                ?>
                                <div class="col-md-3">
                                    <?= get_template_part('template-parts/loop', 'menu') ?>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>

                        <div class="col-12">
                            <div class="sec_btn">
                                <a href="<?= get_home_url(null, 'menu') ?>" class="btn btn-default">メニュー一覧<i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </main>
    <?php endwhile; ?>
<?php endif; ?>

<?= get_footer() ?>