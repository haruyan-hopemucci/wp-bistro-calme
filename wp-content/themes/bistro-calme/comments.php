<section class="comments">
    <?php
    $comment_form_params = array('title_reply' => 'コメント投稿フォーム');
    comment_form($comment_form_params);
    if (have_comments()) :
    ?>
        <p><?php comments_number('コメントはありません。', 'コメントが1件だけあります。', 'コメントが%件もあります！'); ?></p>
        <ol class="commentlist">
            <?php
            $comment_list_params = [];
            $comment_list_params['avatar_size'] = 50;
            wp_list_comments($comment_list_params);
            ?>
        </ol>
    <?php
        paginate_comments_links();
    endif;
    ?>
</section>