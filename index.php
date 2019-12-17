<?php
/**
 * あすてる用のwordpress独自テーマです。
 *
 * これは、あすてるのwebサイト作成をするためにKSBが独自で開発をしているwordpressのテーマファイル群です。
 * 文字のサイズ等の基本的なスタイルは style.css から変更をすることが可能になっています。
 * その他不明な点があれば、加藤涼太郎(green)に尋ねてください。
 *
 * @package WordPress
 * @subpackage UstellOrigen
 * @version 1.0.0
 */
get_header();
?>

<!DOCTYPE  html>
<html>
    <body <?php wp_body_open(); ?>>
        <div class="key-visual">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ustell-eye-catch.jpeg">
            <!-- キービジュアルの真上に来る文字を整列させるための div -->
            <div class="key-visual-cover">
                <!-- キービジュアルの上に表示されるテキストのためのdiv -->
                <div class="kv-over-txt">
                    <div class="copy-top">
                        <p>介護に疲れた明日をすてる</p>
                    </div>
                    <div class="copy-bottom">
                        <p>「あすてる」</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="separator-sml"></div>
        <div class="main-contents">
            <div class="intro">
                <div class="intro-poem">
                    <p>あなたの介護の悩みを</p>
                </div>
                <div style="height: 20px"></div>
                <div class="intro-poem">
                    <p>教えてください。</p>
                </div>
            </div>
            <div class="about-us">
                <img src="<?php echo get_stylesheet_directory_uri()?>/images/shakehands.jpg">
                <div class="about-us-txt">
                    <p>この度は仙台有料老人ホーム支援センター「あすてる」のホームページをごらんいただき誠にありがとうございます。</p>
                    <br/>
                    <p>私たちは、お客様に満足していただけるサービスを提供させていただくためにお客様第一で仕事に取り組んでおります。</p>
                    <br/>
                    <p>常にお客様目線で、老人ホームや介護施設を紹介させていただきたいと考えているので私たちは「中立公正」な立場からお客様をサポートさせていただいております。</p>
                    <br/>
                    <p>また、私たちは介護現場のプロからも支持を受けております。現在はインターネットの発達などにより情報を簡単に調べることができるようになりました。しかし、プロからも認めていただいている私たちは、インターネットだけでは知り得ない独自の観点を持っておりますので、皆様のお役に立てることをお約束いたします。</p>
                    <br/>
                    <p>介護などに不安がございましたら、是非私たちに教えてください。</p>
                    <br/>
                    <p>あなたの力にならせていただきます。</p>
                </div>
            </div>
            <div class="separator-lg"></div>
            <p class="caption">あすてるの安心サービス</p>
            <div class="separator-sml"></div>
            <div class="services">
                <div class="service">
                    <img src="<?php echo get_stylesheet_directory_uri()?>/images/icon-dammy.png">
                    <p class="service-feature">ご相談から入居までのサポートは完全無料</p>
                    <p class="service-details">あああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああ。</p>
                </div>
                <div class="service">
                    <img src="<?php echo get_stylesheet_directory_uri()?>/images/icon-dammy.png">
                    <p class="service-feature">老人ホームは選ぶ時代から探す時代へ</p>
                    <p class="service-details">あああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああ。</p>
                </div>
                <div class="service">
                <img src="<?php echo get_stylesheet_directory_uri()?>/images/icon-dammy.png">
                    <p class="service-feature">老人ホームのご相談以外のお手伝いもさせていただきます。</p>
                    <p class="service-details">あああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああ。</p>
                </div>
            </div>
            <div class="separator-sml"></div>
            <div class="pg-link-btn">
                <div>
                    <p>サービスについて</p>
                    <p>さらに詳しく</p>
                </div>
            </div>
            <div class="separator-lg"></div>
            <p class="caption">ニュース</p>
            <div class="separator-sml"></div>
            <div class="ustell-news">
                <ul>
                    <?php
                        $args = array(
                            'posts_per_page' => 3 // 取得したい記事の件数
                        );
                        $posts = get_posts( $args );
                        foreach ( $posts as $post ):
                        setup_postdata( $post );
                    ?>
                    <li style="display: flex; align-items: center;">
                        <p class="post-date"><?php echo get_the_date()?></p>
                        <?php
                            $cat = get_the_category();
                            $cat = $cat[0];
                        ?>
                        <div class="<?php echo $cat-> category_nicename; ?>">
                            <a><?php the_category( ' ' ); ?></a>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="posts-title"><?php the_title(); ?></a>
                    </li>
                    <div style="height: 20px;"></div>
                    <hr style="border-top: dotted 0.5px #666666; margin: 0 0 20px 0;"/>
                    <?php
                        endforeach;
                    ?>
                </ul>
                <div class="pg-link-btn" style="border: solid 2px var(--ustell-orange); margin-top: 60px;">
                    <div>
                        <p>一覧を見る</p>
                    </div>
                </div>
            </div>
            <div class="separator-lg"></div>
            <div class="contact-card">
                <p style="font-family: source-han-sans-japanese, sans-serif; font-weight: 300; font-style: normal; font-size: 48px; text-align: center;">まずは、お気軽にお問い合わせください。</p>
                <!-- リンクになるボタン的な部分は改修する 予定日12:20 -->
                <div class="pg-link-btn" style="border: solid 2px var(--ustell-green); margin-top: 30px; background-color: #FFFFFF;">
                    <div>
                        <p>お問い合わせフォームへ</p>
                    </div>
                </div>
                <!-- リンクになるボタン的な部分は改修する 予定日12/20 -->
                <div class="pg-link-btn" style="border: solid 2px var(--ustell-green); margin-top: 30px; background-color: var(--ustell-green); color: #FFFFFF;">
                    <div>
                        <p>電話してみる</p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
<?php
get_footer();
?>
