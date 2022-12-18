<section class="menu">
    <a href="<?= the_permalink() ?>">
        <figure class="menu_pic">
            <?php if (has_post_thumbnail()) : ?>
                <?= the_post_thumbnail() ?>
            <?php else : ?>
                <img src="<?= get_template_directory_uri() ?>/assets/img/common/noimage_600x400.png" alt="no-image">

            <?php endif; ?>
        </figure>
        <h3 class="menu_title"><?= the_title() ?></h3>
        <p class="menu_price">800円</p>
        <div class="menu_desc">
            <p>
                <?= the_excerpt() ?>
            </p>
        </div>
    </a>
</section>