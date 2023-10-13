<!--*****************************
  # 整骨院Web ページ構成
  - トップページ (index.html#top)
  - 当院について (about.html)
  - コース・料金 (course.html)
  - お知らせ (information.html)
  - お知らせ詳細 (page-name.html)
  - お客様の声 (voice.html)
  - ご予約・お問合せサンクスページ (contact-thanks.html)  
    
  # トップページ 構成
  - header
  - ホーム (id="home")
  - お知らせ (id="news")
  - Concept (id="about")
  - コース料金 (id="course")
  - お客様の声 (id="voice")
  - アクセス (id="access") 
  - footer (id="footer")
*****************************-->

<!DOCTYPE html>
<html lang="ja" id="html-top">

<link rel="stylesheet" href="style.css">

<?php include ('head-parts.html'); ?>

<body>

<!--header nav**********************************************************-->
<?php include ('header-parts.html'); ?>
<link rel="stylesheet" href="css/style-index-headnavi.css">



<main>
  <article>

<!--ホーム**********************************************************-->
  <section id="home">
    <!-- カーセル：TOP-CarouselGroup1-4、SP-TOP-CarouselGroup1-4 -->
    <div id="top-img-div" >
        <div class="carousel">
          <img class="top-img" src="img/TOP-Carouselgroup1.jpg" alt="TOP-Carouselgroup">
          <img class="top-img" src="img/TOP_Carouselgroup2.jpg" alt="TOP-Carouselgroup">
          <img class="top-img" src="img/TOP_Carouselgroup3.jpg" alt="TOP-Carouselgroup">
          <img class="top-img" src="img/TOP-Carouselgroup4.jpg" alt="TOP-Carouselgroup">
        </div>
    </div>
    <h1 id="tate-message" >根本的な症状改善を<br>サポートします</h1>
    <div id="back-img"></div>
    <img id="back-green01" src="img/x31_7.png" alt="back-green01">
    <img id="back-green02" src="img/x32_1.png" alt="back-green02">
  </section>

<!--お知らせ**********************************************************-->
  <section id="news">
    <div id="news-sec01">
      <span id="news01">News</span>
      <span id="news02">お知らせ</span>
      </div>
    <div id="news-sec02">
      <span id="news03">日時</span>
      <span id="news04">営業日時</span>
      <span id="news05">年末年位の営業日について</span>
    </div>
    <div id="news-link">
      <a href="news.html">-> お知らせ一覧へ</a>
    </div>
  </section>

<!-- コンセプト・特徴 **********************************************************-->
  <section id="about">
    <h1 id="about-h1back">Concept</h1>
    <img id="about-bigicon" src="img/BGicon_Light.png" alt="BGicon_Light">
      <div id="about-table">
        <div>
          <div id="about-img" >
            <img class="about-img" src="img/Group 2126.png">
          </div>
          <div id="about-left">
          <div>
            <p id="about-title">
              <img src="img/BGicon.png" alt="about-title-img">
              <span>Concept<br>特徴</span>
            </p>
            <h2 id="about-message">日々変化する<br>カラダと心を癒す<br>パーソナル<br>トレーナーとして</h2>
            <p id="about-comment" >
              当院では、問診にてお客様の症状や生活スタイル、ご希望を丁寧にお伺いした上で施術方針を立てていきます。
              <br><br>また、根本的に症状を改善するために、お客様ご自身で行えるケアやストレッチもお伝えします。
              <br><br> ご不安な点や疑問点などお気軽にご相談くださいませ。</p>
            <div id="about-link" class="links" >
              <a href="about.html">-> 当院について</a>
            </div>
          </div> 
        </div>
      </div>
      </div>
  </section>

<!-- wave 1**********************************************************--> 
<?php include ('wave-parts.html'); ?>

<!-- コース・料金 **********************************************************--> 
  <section id="course">
    <div id="back-color"></div>
    <img class="bgicon" src="img/BGicon_Green.png" alt="BGicon_Green">
    <h1 id="h1-back">course</h1>
    <h3>
      <img src="img/Frame 2122.png">
      <span> コース・料金</span>
      <img src="img/Frame 2564.png">
    </h3>
    <h3><br>当院では保険診療、自費診療<br>ともにご対応しております</h3>
    <table id="course-table">
      <tr>
        <td>
          <img class="course-img" src="img/TOP-insurance1.jpg" alt="保険診療写真">
          <div class="course-list">
            <h3 class="dark-green list-name">保険診療</h3>
            <ul>
              <li>骨折・打撲・捻挫・脱臼</li>
              <li>スポーツ診療</li>
              <li>交通事故</li>
            </ul>
          </div>
        </td>
        <td>
          <img class="course-img" src="img/TOP-self1.jpg" alt="自賠責診療写真">
          <div class="course-list">
            <h3 class="dark-green list-name">自賠責診療</h3>
            <ul>
              <li>腰痛・肩こり</li>
              <li>冷え性・だるさ</li>
              <li>骨盤・背骨矯正</li>
            </ul>
          </div>
        </td>
      </tr>
    </table>

    <div id="course-link" class="links">
      <a href="course.html">-> コース・料金詳細へ</a>
    </div>
  </section>

<!-- お客様の声  **********************************************************-->
  <section id="voice">
        <!-- カーセル：TOP-CarouselGroup1-4、SP-TOP-CarouselGroup1-4 -->
    <div id="bottom-img-div" class="carousel">
      <img class="bottom-img" src="img/Bottom-Carouselgroup1.jpg" alt="Bottom-Carouselgroup">
      <img class="bottom-img" src="img/Bottom-Carouselgroup2.jpg" alt="Bottom-Carouselgroup">
      <img class="bottom-img" src="img/Bottom-Carouselgroup3.jpg" alt="Bottom-Carouselgroup">
    </div>
    <div id="voice-title-box">
      <div id="voice-title">
        <h3>
          <img src="img/Frame 2122.png">
          <span>お客様の声</span>
          <img src="img/Frame 2564.png">
        </h3>
        <h3><br>痛みの改善に加えて自分で予防も<br>できるようになりました</h3>
      </div>
    </div>
    <table id="voice-table">
      <tr>
        <td class="voice-table-items">
          <img class="voice_img" src="img/TOP-user1.jpg" alt="S・K様写真">
          <h3 class="dark-green">S・K様 30代女性</h3>
          <p>1ヶ月で腰の痛みが軽減しました。
            自分で自宅でできるケアも教えていただき、お任せしてよかったです。</p>
        </td>
        <td class="voice-table-items">
          <img class="voice_img" src="img/TOP-user2.jpg" alt="T・M様写真">
          <h3 class="dark-green">T・M様 40代男性</h3>
          <p>マラソンで右膝が痛むので、施術を受けています。
              なぜ痛みが生じるのかを身体の仕組みから教えていただき、
              普段の練習メニューも工夫できています。</p>
        </td>
        <td class="voice-table-items">
          <img class="voice_img" src="img/TOP-user3.jpg" alt="S・T様写真">
          <h3 class="dark-green"> S・T様 60代女性</h3>
          <p>転倒して足を骨折したのをきっかけに、
            痛みの軽減と筋肉の衰えを防ぐための方針を立てていただいています。
            今は毎日元気に近所を散歩できています。</p>
        </td>
      </tr>
    </table>
    <div id="voice-link" class="links">
      <a href="voice.html">-> お客様の声一覧へ </a> 
    </div>
  </section>

<?php include ('wave-parts.html'); ?>
<?php include ('footer-parts.php'); ?>


</body>
</html>