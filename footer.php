<?php
/**
 * あすてるwebサイトのフッター用のファイルです。
 *
 * @package WordPress
 * @subpackage ustell
 *
 * @version 1.0.0
 */
wp_footer()
?>
<!DOCTYPE html>
<html>
    <body>
        <div class="separator-lg"></div>
        <div class="footer">
            <div class="footer-contents">
                <a>サービス</a>
                <a>お知らせ</a>
                <a>私たちの想い</a>
                <a>県外のお客様へ</a>
                <a>会社概要</a>
                <a>お問い合わせ</a>
            </div>
            <div class="footer-contents">
                <p>仙台有料老人ホーム支援センターあすてる</p>
                <p style="font-weight: 300">Tel: 0120-64-9674</p>
                <p style="font-weight: 300">Mail: info@ustell.com</p>
                <div class="separator-v-sml"></div>
                <p>運営会社: 株式会社KSB</p>
                <p style="font-weight: 300">Tel: 022-281-9163</p>
                <p style="font-weight: 300">Fax: 022-281-9164</p>
                <p style="font-weight: 300">Mail: info@ksb.com</p>
            </div>
            <div class="footer-contents">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ustell_header_logo.png" style="width: 184px;">
            </div>
        </div>
        <div class="copyright">
            <p style="font-size: 16px; font-weight: 300; color: #FFFFFF;">Copyright 株式会社KSB All right reserved.</p>
        </div>
    </body>
</html>
