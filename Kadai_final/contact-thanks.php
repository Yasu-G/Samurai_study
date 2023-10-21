<!--*****************************
  - お客様の声 (Contact)
*****************************-->

<?php include ('header.php'); ?>

<!-- CONTACT-THANCKS CSS -->
<link rel="stylesheet" href="css/style-main-conract-thanks.css">
<link rel="stylesheet" href="css/style-parts-home.css">

<main>
  <article>
    
<!--ホーム**********************************************************-->
  <section id="home">
    <div id="home-message" >
      <h1>Contact</h1>
      <h2>ご予約・お問い合わせ</h2>
    </div>

    <div id="top-img-div">
      <div id="back-img"></div>
      <picture id="top-img-pct">
      <!-- SP時画像 -->
      <source media="(max-width: 767px)" srcset="img/SP-Reserve.jpg" alt="Reserve-img">
      <!-- PC時画像 -->
      <img src="img/Reserve.jpg" alt="Reserve-img">
      </picture>
    </div>

    <img id="back-green02" src="img/x32_1.png" alt="back-green02">
  </section>

<!--パンくずリスト**********************************************************-->
  <section id="pan-list">
    <span>ホーム ＞</span>
    <span id="pan-here">ご予約・お問い合わせ</span>
  </section>


<!-- 電話でのご予約・お問合せ **********************************************************--> 
  <section id="tel-question">
    <p id="tel-question-title">お電話でのご予約・お問い合わせ</p>
    <p>〒101-0022 東京都千代田区神田練塀町300番地
      <br>住友不動産秋葉原駅前ビル 5F</p>
    <p id="tel">tel:<span id="tel-number"> 03-1234-5678</span></p>
  </section>

<!-- ご予約・お問合せフォーム **********************************************************--> 
  <section id="form-question">
    <p id="form-question-title">ご予約・お問い合わせフォーム</p>
    <p>※ 2営業日以内にご返信いたします。</p>
  </section>

<?php include ('wave-parts.html'); ?>
<?php include ('top.html'); ?>

<?php include ('footer.php'); ?>
