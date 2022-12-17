<section class="comments">
    <?php
    $comment_form_params = array('title_reply' => 'コメント投稿フォーム');
    comment_form($comment_form_params);
    if (have_comments()) :
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