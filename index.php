<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/reset.css">
  <link rel="stylesheet" type="text/css" href="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/reset.css">
  <link rel="stylesheet" type="text/css" href="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/5-2-1/css/5-2-1.css">

  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/style.css">
  <title>Document</title>
  <?php wp_head(); ?>
</head>

<body>
  <header>
    <div class="header">
      <div class="openbtn1"><span></span><span></span><span></span></div>
      <ul class="headerLink">
        <li><a href="">Menu01</a></li>
        <li><a href="">Menu02</a></li>
        <li><a href="">Menu03</a></li>
        <li><a href="">Menu04</a></li>
      </ul>
      <div class="spMenu">
        <img src="<?php echo get_template_directory_uri();?>/assets/img/logo.png" alt="ロゴ">
        <ul>
          <li><a href="">Menu01</a></li>
          <li><a href="">Menu02</a></li>
          <li><a href="">Menu03</a></li>
          <li><a href="">Menu04</a></li>
        </ul>
      </div>
    </div>
  </header>
  <main>
    <div class="keyvisual">
      <div class="imgs">
        <div id="slidepc">
        <?php echo do_shortcode('[smartslider3 slider="2"]');?>
        </div>
        <div id="slidesp">
        <?php echo do_shortcode('[smartslider3 slider="3"]'); ?>
        </div>
            <div class="logo-img">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/logo.png" alt="logo-img">
            </div>
            <div class="vt-img">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/visual_text_pc.png" id="vtpc" alt="vt-img">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/visual_text_sp.png" id="vtsp" alt="vt-img">
            </div>
      </div>
        <p>進化し続ける「街」<br class="brsp">
          アメリカンヴィレッジマガジン</p>
    </div>
    <section id="Latest-Articles">
      <h2>Latest Articles</h2>
      <div class="image-lists">
        <div class="contents">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/post_img_1.png" alt="" class="image">
          <div class="word">
            <p>2018/5/20</p>
            <p>おしゃれカフェがありますよ</p>
          </div>
          <div class="read">
            <p class="read-more">READ MORE</p>
            <p class="read-line">ー</p>
          </div>



        </div>
        <div class="contents">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/post_img_2.png" alt="" class="image">
          <div class="word">
            <p>2018/5/19</p>
            <p>あのネオンはいつ交換するのか！？観覧車の謎に迫る！</p>
          </div>
          <div class="read">
            <p class="read-more">READ MORE</p>
            <p class="read-line">ー</p>
          </div>


        </div>

        <div class="contents">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/post_img_3.png" alt="" class="image">
          <div class="word">
            <p>2018/5/18</p>
            <p>ラソナの社内はこんなのよ</p>
          </div>
          <div class="read">
            <p class="read-more">READ MORE</p>
            <p class="read-line">ー</p>
          </div>

        </div>

        <div class="image-lists">
          <div class="contents">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/post_img_4.png" alt="" class="image">
            <div class="word">
              <p>2018/5/27</p>
              <p>お隣のアラハはハワイ？</p>
            </div>

            <div class="read">
              <p class="read-more">READ MORE</p>
              <p class="read-line">ー</p>
            </div>

          </div>

          <div class="contents">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/post_img_5.png" alt="" class="image">
            <div class="word">
              <p>2018/5/16</p>
              <p>なぜテント？ラソナの人に聞いてみた</p>
            </div>
            <div class="read">
              <p class="read-more">READ MORE</p>
              <p class="read-line">ー</p>
            </div>
          </div>

          <div class="contents">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/post_img_6.png" alt="" class="image">
            <div class="word">
              <p>2018/5/15</p>
              <p>ベイエリアおしゃれすぎる問題</p>
            </div>
            <div class="read">
              <p class="read-more">READ MORE</p>
              <p class="read-line">ー</p>
            </div>
          </div>
          <?php 
          if (have_posts()):
            while (have_posts()):
              the_post();
          ?>
          <div class="contents">
            <a href="<?php the_permalink();?>">
              <img src="<?php the_post_thumbnail_url();?>" alt="">
            </a>
            <div class="word">
              <p><?php echo get_the_date();?></p>
              <P><?php the_title();?></P>
            </div>
            <div class="read">
              <p class="read-more">READ MORE</p>
              <p class="read-line">ー</p>
            </div>
            <?php endwhile;
            else:?>
            <section class="section3">
              <p>表示する記事がありません。</p>
            </section>
            <?php endif; ?>
            </div>
        </div>
    </section>



  </main>
  <footer>
    <p>Copyright &copy; Shinohara. ALL RIGHTS RESERVED.</p>
  </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/5-2-1/js/5-2-1.js"></script>
  <script src="<?php echo get_template_directory_uri();?>/masa.js"></script>
  <?php wp_footer(); ?>
</body>

</html>