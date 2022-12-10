<form action="<?= home_url('/') ?>" method="get" class="header_search">
    <input type="text" placeholder="キーワードを入力" name="s" value="<?= the_search_query() ?>">
    <i class="fas fa-search"></i>
</form>