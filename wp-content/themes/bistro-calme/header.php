<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?= get_template_directory_uri(); ?>/assets/css/styles.min.css" rel="stylesheet">
    <link href="<?= get_template_directory_uri(); ?>/assets/css/custom-style.css" rel="stylesheet">
    <?php
    // Font Awesomeを重複して読み込まないようにする
    wp_enqueue_style('font-awesome', 'https://use.fontawesome.com/releases/v5.6.1/css/all.css');
    // jqueryを重複して読み込まないようにする
    wp_enqueue_script('jquery');
    // main.jsを重複して読み込まないようにする
    wp_enqueue_script('bistro-calme-main', get_template_directory_uri() . '/assets/js/main.js');
    wp_head();
    ?>
</head>

<body <?= body_class(); ?>>
    <?= wp_body_open(); ?>
    <header class="header">
        <div class="header_inner">
            <div class="header_logo">
                <h1><a href="<?= home_url(); ?>"><img src="<?= get_template_directory_uri(); ?>/assets/img/common/logo@2x.png" alt="BISTRO CALME"></a></h1>
            </div>

            <div class="header_desc">
                <p><?= bloginfo('description'); ?></p>
            </div>

            <?= get_search_form() ?>

        </div>

        <div class="header_links">
            <nav class="gnav">
                <?= wp_nav_menu(
                    array(
                        'menu' => 'global-navigation',
                        'menu_class' => '',
                        'container' => 'false'
                    )
                )
                ?>
            </nav>

            <ul class="header_sns">
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            </ul>
        </div>

        <svg class="header_menu" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30" height="30" viewBox="0 0 30 30">
            <defs>
                <clipPath id="clip-path">
                    <rect width="30" height="30" fill="none" />
                </clipPath>
            </defs>
            <g clip-path="url(#clip-path)">
                <rect class="header_border header_border-1" width="30" height="2" transform="translate(0 0)" />
                <rect class="header_border header_border-2" width="30" height="2" transform="translate(0 10)" />
                <rect class="header_border header_border-3" width="30" height="2" transform="translate(0 20)" />
            </g>
        </svg>
    </header>

    <?php
    // jumbotronのビジュアルはhomeでしか表示しないようにする
    if (is_home()) :
    ?>
        <div class="jumbotron">
            <div class="jumbotron_item" style="background-image: url('<?= get_template_directory_uri(); ?>/assets/img/home/jumbotron-1@2x.jpg')"></div>
            <div class="jumbotron_item" style="background-image: url('<?= get_template_directory_uri(); ?>/assets/img/home/jumbotron-2@2x.jpg')"></div>
            <div class="jumbotron_item" style="background-image: url('<?= get_template_directory_uri(); ?>/assets/img/home/jumbotron-3@2x.jpg')"></div>
        </div>
        <!-- 書籍ではfooter.phpにwp_enqueue_script等で書き直しているが、is_home内に直接埋めた方が手っ取り早い -->
        <link href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script src="<?= get_template_directory_uri(); ?>/assets/js/home.js"></script>

    <?php endif; ?>

    <?= get_template_part('template-parts/breadcrumb') ?>