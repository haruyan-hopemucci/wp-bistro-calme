<?php

/**
 * <title>タグを出力する
 */
add_theme_support('title-tag');

/** タイトル表示のセパレーター（titleとdescriptionの間）を変更する */
add_filter('document_title_separator', 'my_document_title_separator');

function my_document_title_separator($separator)
{
    $separator = "😄";  // 絵文字も行けるよ！
    return $separator;
}

/** タイトルの文字列を任意の値に変更できる */
add_filter('document_title_parts', 'my_document_title_parts');

function my_document_title_parts($title)
{
    // homeだけタイトル表記を変えるようにできる
    if (is_home()) {
        unset($title['tagline']);
        $title['title'] = 'BISTRO CALME は、カジュアルなワインバーよりなビストロです。';
    }
    return $title;
}

/**
 * アイキャッチ画像を使用可能にする
 */
add_theme_support('post-thumbnails');

/**
 * デフォルトだとwpから送信するメールのfromが"wordpress@localhost"となり
 * バリデーションに引っかかるので変更する
 */
add_filter('wp_mail_from', 'replace_wp_mail_from');

function replace_wp_mail_from($email)
{
    return 'haruyan@haruyan-mac.localdomain';
}
