<?php
$sidebar_latests_args = array(
    'post_type' => 'post',  // 投稿記事の表示
    'posts_per_page' => 5   // 投稿表示数
);
$sidebar_latests_query = new WP_Query($sidebar_latests_args)
?>
<?php if ($sidebar_latests_query->have_posts()) : ?>
    <aside class="archive">
        <h2 class="archive_title">最新記事</h2>
        <ul class="archive_list">
            <?php while ($sidebar_latests_query->have_posts()) :
                $sidebar_latests_query->the_post(); // ここでグローバルのpostデータが独自クエリの内容に入れ替わっている
            ?>
                <li>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </li>
            <?php endwhile; ?>
            <?php
            // WP_Queryを使って独自クエリを作成した場合、クエリループの終了後にreset_postdataを入れて
            // グローバルデータと入れ替えを行うべき
            wp_reset_postdata();
            ?>
        </ul>
    </aside>
<?php endif; ?>