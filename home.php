<?php get_header(); ?>
<div class="key-visual">
  <div class="key-visual-inner">
    <p class="motto">More Creative. More Clap.</p>
    <p class="motto-desc">吉祥寺を拠点にしたWeb制作・システム開発のクリエイターチーム</p>
  </div>
</div>
<div class="container">
  <section id="about" class="about inner">
    <h2 class="h2-topic">ABOUT</h2>
    <div class="about-desc">
      <p>
        クリエイティブな活動から世の中にもっと拍手を。
      </p>
      <p>
        その想いから合同会社TEAM CLAPを立ち上げました。
      </p>
      <p>
        チームメンバー同士の拍手。クライアントからの拍手。
      </p>
      <p>
        テクノロジーを通じて、明るい未来を創造していきます。
      </p>
    </div>
  </section>

  <section id="service" class="service inner">
    <h2 class="h2-topic">SERVICE</h2>
    <div class="content">
      <div class="service-item fadeIn">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/service-image.jpg" alt="">
        <h2>
          Webサイト制作
        </h2>
        <p>
          HTML5, CSS3, JavaScript, WordPressなどを用いたWeb制作を致します。
        </p>
      </div>
      <div class="service-item fadeIn">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/service-image.jpg" alt="">
        <h2>
          システム開発
        </h2>
        <p>
          Ruby（Ruby on Rails）やPHP（Laravel）などを用いたシステム開発業務を行います。
        </p>
      </div>
      <div class="service-item fadeIn2">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/service-image.jpg" alt="セミナー・ITコンサル">
        <h2>
          セミナー・ITコンサル
        </h2>
        <p>
          企業・個人向けのITコンサル業務を行います。</p>
        <p>
          HTMLやCSS, Gitを利用したサイト制作から、カンバンなどの業務効率を向上させるツールの使い方までご相談に乗ります。
        </p>
      </div>
    </div>
  </section>

  <section id="column" class="column inner">
    <h2 class="h2-topic">COLUMN</h2>
    <div class="column-item-box">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <div class="column-item">
            <a href="<?php the_permalink(); ?>">
              <div class="column-img-box">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/column-img.jpg" alt="記事サムネイル">
              </div>
              <h3><?php the_title(); ?></h3>
            </a>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </section>
</div><!--container-->

<section id="contact" class="contact">
  <h2 class="h2-topic">CONTACT</h2>
  <p>HP作成やシステム開発などのお仕事のご依頼は、お気軽にご相談ください。</p>
  <a class="ToContactForm" href="#">お問い合わせ</a>
</section>
<?php get_footer(); ?>
  </body>
</html>
