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
        テクノロジーを通じて、明るい未来を創造します。
      </p>
    </div>
  </section>

  <section id="service" class="service inner">
    <h2 class="h2-topic">SERVICE</h2>
    <div class="content">
      <div class="service-item fadeIn">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/site.png" alt="Webサイト制作アイコン">
        <h2>
          Webサイト制作
        </h2>
        <p>
          HTML5, CSS3, JavaScript, WordPressなどを用いたWeb制作を致します。
        </p>
      </div>
      <div class="service-item fadeIn">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/system.png" alt="システム開発アイコン">
        <h2>
          システム開発
        </h2>
        <p>
          Ruby（Ruby on Rails）やPHP（Laravel）などを用いたシステム開発業務を行います。
        </p>
      </div>
      <div class="service-item fadeIn">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/idea.png" alt="セミナー・ITコンサルアイコン">
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

    <section id="member" class="member inner">
      <h2 class="h2-topic">MEMBER</h2>
      <div class="content">
        <div class="member-item fadeIn">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/okutani.png" alt="okutani">
          <h2>okutani</h2>
          <p>
            TEAM CLAP CEO。
            1990年生まれ。法政大学大学院を卒業後、新卒で入った会社を8ヶ月で辞めフリーランスの道へ。2018年6月にTEAM CLAPを立ち上げる。HTML・CSSを利用したWebサイト制作、Ruby on Rails, Laravelなどを利用したシステム開発を得意としている。趣味は吉祥寺巡り。

          </p>
        </div>
        <div class="member-item fadeIn">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/kimura.jpg" alt="kimura">
          <h2>kimura</h2>
          <p>
            TEAM CLAP Webエンジニア。
            1991年生まれ。北海道大学大学大学院卒業後、新卒で全国490教室規模の展開をする某個別指導塾に勤め、8教室の責任者として運営を行う。その後新規顧客対応チームのリーダーとして、メンバー育成を務める。2019年月3月に退職し、TEAM CLAPへ。北海道が大好きすぎる。
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
                  <?php the_post_thumbnail(); ?>
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
    <a class="ToContactForm" href="/contact">お問い合わせ</a>
  </section>
  <?php get_footer(); ?>
</body>
</html>
