<!--*****************************
  - お知らせ (information.html)
*****************************-->


<?php include ('header.php'); ?>

<!-- INFORMATION CSS -->
<link rel="stylesheet" href="css/style-main-information.css">
<link rel="stylesheet" href="css/style-parts-home.css">

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
      <source media="(max-width: 767px)" srcset="img/SP-News.jpg" alt="News-img">
      <!-- PC時画像 -->
      <img src="img/News.jpg" alt="News-img">
      </picture>
    </div>
    
    <img id="back-green02" src="img/x32_1.png" alt="back-green02">
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
        <!-- 投稿０１ -->
          <div class="posting-item">
            <img class="posting-img" src="img/Topic1.jpg" alt="posting-img">
            <div>
              <p class="posting-title">投稿記事タイトル</p>
              <p class="posting-date">2023年2月1日
                <span class="open-date">営業日時</span>
              </p>
            </div>
          </div>
          
          <!-- 投稿０2 -->
          <div class="posting-item">
            <img class="posting-img" src="img/Topic2.jpg" alt="posting-img">
            <div>
              <p class="posting-title">2行で長めの投稿記事タイトルは<br>この様に表示されます</p>
              <p class="posting-date">2023年2月1日
                <span class="open-date">営業日時</span>
              </p>
            </div>
          </div>

          <!-- 投稿０3 -->
          <div class="posting-item">
            <img class="posting-img" src="img/Topic3.jpg" alt="posting-img">
            <div>
              <p class="posting-title">投稿記事タイトル</p>
              <p class="posting-date">2023年2月1日
                <span class="open-date">営業日時</span>
              </p>
            </div>
          </div>

      </div>

      <!-- 右側 -->
      <div id="category-items">
        <h3>カテゴリ</h3>
        <div>
          <p>営業日時</p>
          <p>キャンペーン</p>
          <p>その他</p>
        </div>
      </div>
    </div>
  </section>


<?php include ('wave-parts.html'); ?>
<?php include ('top.html'); ?>

<?php include ('footer.php'); ?>
