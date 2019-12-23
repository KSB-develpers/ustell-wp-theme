<?php
/**
 * あすてるのテーマ用のヘッダーのファイル
 *
 * @package WordPress
 * @subpackage UstellOrigen
 * @version 1.0.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charser="<?php bloginfo( 'charset' )?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- 同一ディレクトリにあるcssを読み込む -->
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
        <script src="<?php echo get_stylesheet_directory_uri()?>/js/script.js" async></script>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <?php wp_body_open(); ?>
        <div id="page-top" class="page-header">
            <div class="header-logo">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ustell_header_logo.png" />
            </div>
            <div class="header-nav">
                <a class="nav" href="<?php echo home_url( '/' ); ?>/index.php">ホーム</a>
                <a class="nav" href="./pages/service.php">サービス</a>
                <a class="nav">ニュースリリース</a>
                <a class="nav">私たちの思い</a>
                <a class="nav">会社概要</a>
                <div class="nav-contact">
                    <a>お問い合わせ</a>
                </div>
            </div>
        </div>
    </body>
</html>
