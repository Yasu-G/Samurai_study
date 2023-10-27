
<!-- ***************************** -->
<!--
Template Name: お客様の声 (voice)
-->
<!-- ***************************** -->

<?php get_header();?>

<!-- VOICE CSS -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style-main-voice.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style-unit-home.css">

<?php include ('unit-header-nav.php'); ?>

<main>
  <article>
    
<!--ホーム**********************************************************-->
  <section id="home">
    <div id="home-message" >
      <h1>voice</h1>
      <h2>お客様の声</h2>
    </div>

    <div id="top-img-div">
      <div id="back-img"></div>
      <picture id="top-img-pct">
      <!-- SP時画像 -->
      <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/SP_Voice1.jpg" alt="Voice-img">
      <!-- PC時画像 -->
      <img src="<?php echo get_template_directory_uri(); ?>/images/Voice1.jpg" alt="Voice-img">
      </picture>
    </div>

    <img id="back-green02" src="<?php echo get_template_directory_uri(); ?>/images/x32_1.png" alt="back-green02">
  </section>

<!--パンくずリスト**********************************************************-->
<?php include ('unit-pan-list.php'); ?>


<!-- お客様の声一覧 **********************************************************--> 
  <section id="voice-list">

    <?php
      $paged = get_query_var('paged') ? get_query_var('paged') : 1;
      $args = array(
        'posts_per_page'   => 5, // 読み込みたい記事数（全件取得時は-1）
        'category'         => '7', // 読み込みたいカテゴリID（複数の場合は '1,2'）
        'orderby'          => 'ID', // 何順で記事を読み込むか（省略時は日付順）
        'order'            => 'ASC', // 昇順(ASC)か降順か(DESC）
        'paged' => $paged
      );
      $posts = get_posts($args);
      ?>

      <!--ループ  -->
      <?php foreach($posts as $post): ?>
      <?php setup_postdata($post); ?>

      <?php
        $cat = get_the_category();
        $catname = $cat[0]->cat_name;
      ?>


    <!-- voice -->
    <div class="voice-item">
      <div class="voice-img">
        <?php the_post_thumbnail(); ?> 
      </div>
      <div class="voice-comment">
        <h3 class="dark-green"><?php echo $catname; ?> </h3>
        <p> <?php the_content(); ?></p>
      </div>
    </div>

    <?php endforeach; ?>
    <!-- 使用した投稿データをリセット -->
    <?php wp_reset_postdata(); ?>

  </section>


<?php include ('unit-wave-parts.php'); ?>
<?php include ('unit-top.php'); ?>

<?php get_footer();?>
