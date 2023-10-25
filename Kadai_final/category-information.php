<!-- ***************************** -->
<!--
Template Name: お知らせ (information)
Template Post Type: post
-->
<!-- ***************************** -->

<?php get_header();?>

<!-- INFORMATION CSS -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style-main-information.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style-unit-home.css">

<?php include ('unit-header-nav.php'); ?>

<main>
  <article>
    
<!--ホーム**********************************************************-->
  <section id="home">
    <div id="home-message" >
      <h1>Information</h1>
      <h2>お知らせ</h2>
    </div>

    <div id="top-img-div">
      <div id="back-img"></div>
      <picture id="top-img-pct">
      <!-- SP時画像 -->
      <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/SP-News.jpg" alt="News-img">
      <!-- PC時画像 -->
      <img src="<?php echo get_template_directory_uri(); ?>/images/News.jpg" alt="News-img">
      </picture>
    </div>
    
    <img id="back-green02" src="<?php echo get_template_directory_uri(); ?>/images/x32_1.png" alt="back-green02">
  </section>

<!--パンくずリスト**********************************************************-->
  <section id="pan-list">
    <span>ホーム ＞</span>
    <span id="pan-here">お知らせ</span>
  </section>


<!-- 投稿一覧 **********************************************************--> 
  <section id="information-list">
    <div id="information-frame">
      <!-- 左側 -->
      <div id="posting-items">

      <?php
        // $posts = get_posts();
        ?>

        <?php 
          if(have_posts()):
          while(have_posts()):the_post(); 
        ?>

          <div class="posting-item">
            <div class="posting-img">
              <?php the_post_thumbnail(); ?> 
            </div>

            <div id="posting-right">
              <p class="posting-title">
                <a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a>
              </p>
              <p class="posting-date">
                <?php echo get_the_date(); ?>
                <span class="category-name">
                  <?php echo get_the_category()[0]->cat_name; ?> 
                </span>
              </p>
            </div>
          </div>

          <?php endwhile; ?>
        <?php endif; ?> 

      </div>

      <!-- サイドばー -->
  <?php get_sidebar(); ?>

    </div>
  </section>


<?php include ('unit-wave-parts.php'); ?>
<?php include ('unit-top.php'); ?>

<?php get_footer();?>
