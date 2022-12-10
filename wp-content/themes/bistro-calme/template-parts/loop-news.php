<article id="post-<?= the_ID() ?>" <?= post_class('news'); ?>>
    <div class="news_pic">
        <a href="<?= the_permalink(); ?>">
            <?php if (has_post_thumbnail()) : ?>
                <?= the_post_thumbnail('medium'); ?>
            <?php else : ?>
                <img src="<?= get_template_directory_uri(); ?>/assets/img/common/noimage_600x400.png" alt="no image">
            <?php endif; ?>
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