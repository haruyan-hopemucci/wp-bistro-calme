<section class="comments">
<?php
comment_form();
if ( have_comments() ) :
?>
    <p><?php comments_number(); ?></p>
    <ol class="commentlist">
        <?php wp_list_comments(); ?>
    </ol>
<?php
paginate_comments_links();
endif;
?>
</section>
