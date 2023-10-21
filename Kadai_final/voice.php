<!--*****************************
  - お客様の声 (voice.html)
*****************************-->

<?php include ('header.php'); ?>

<!-- VOICE CSS -->
<link rel="stylesheet" href="css/style-main-voice.css">
<link rel="stylesheet" href="css/style-parts-home.css">

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
      <source media="(max-width: 767px)" srcset="img/SP_Voice1.jpg" alt="Voice-img">
      <!-- PC時画像 -->
      <img src="img/Voice1.jpg" alt="Voice-img">
      </picture>
    </div>

    <img id="back-green02" src="img/x32_1.png" alt="back-green02">
  </section>

<!--パンくずリスト**********************************************************-->
  <section id="pan-list">
    <span>ホーム ＞</span>
    <span id="pan-here">お客様の声</span>
  </section>


<!-- お客様の声一覧 **********************************************************--> 
  <section id="voice-list">
    <!-- voice01 -->
    <div class="voice-item">
      <div>
        <img class="voice-img" src="img/TOP-user1.jpg" alt="User-img">
      </div>
      <div class="voice-comment">
        <h3 class="dark-green">S・K様 30代女性</h3>
        <p>1ヶ月で腰の痛みが軽減しました。自分で自宅でできるケアも教えていただき、お任せしてよかったです。
          お客様の声本文お客様の声本文お客様の声本文お客様の声本文お客様の声本文お客様の声本文
          お客様の声本文お客様の声本文お客様の声本文</p>
      </div>
    </div>

    <!-- voice02 -->
    <div class="voice-item">
      <div>
      <img class="voice-img" src="img/TOP-user2.jpg" alt="User-img">
      </div>
      <div class="voice-comment">
        <h3 class="dark-green">T・M様 40代男性</h3>
        <p>マラソンで右膝が痛むので、施術を受けています。
          なぜ痛みが生じるのかを身体の仕組みから教えていただき、
          普段の練習メニューも工夫できています。</p>
      </div>
    </div>

    <!-- voice03 -->
    <div class="voice-item">
      <div>
      <img class="voice-img" src="img/TOP-user3.jpg" alt="User-img">
      </div>
      <div class="voice-comment">
        <h3 class="dark-green">S・T様 60代女性</h3>
        <p>転倒して足を骨折したのをきっかけに、
            痛みの軽減と筋肉の衰えを防ぐための方針を立てていただいています。
            今は毎日元気に近所を散歩できています。</p>
      </div>
    </div>

  </section>


<?php include ('wave-parts.html'); ?>
<?php include ('top.html'); ?>

<?php include ('footer.php'); ?>
