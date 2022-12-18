<section class="menu">
    <a href="<?= the_permalink() ?>">
        <figure class="menu_pic">
            <?php if (has_post_thumbnail()) : ?>
                <?= the_post_thumbnail() ?>
            <?php else : ?>
                <?php
                $pic = get_field('pic');
                $pic_url = $pic['sizes']['large'];
                ?>
                <img src="<?= $pic_url ?>" alt="">

            <?php endif; ?>
        </figure>
        <h3 class="menu_title"><?= the_title() ?></h3>
        <p class="menu_price"><?= get_field('price') ?></p>
        <div class="menu_desc">
            <p>
                <?= the_excerpt() ?>
            </p>
        </div>
    </a>
</section>