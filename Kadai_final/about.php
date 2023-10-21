<!--*****************************
- 当院について (about.html)
*****************************-->

<?php include ('header.php'); ?>

<!-- ABOUT CSS -->
<link rel="stylesheet" href="css/style-main-about.css">
<link rel="stylesheet" href="css/style-parts-home.css">
  
<main>
  <article>
    
<!--ホーム**********************************************************-->
  <section id="home">
    <div id="home-message" >
      <h1>About</h1>
      <h2>当院について</h2>
    </div>

    <div id="top-img-div">
      <div id="back-img"></div>
      <picture id="top-img-pct">
        <!-- SP時画像 -->
        <source media="(max-width: 767px)" srcset="img/SP-About.jpg" alt="About-img">
        <!-- PC時画像 -->
        <img src="img/About.jpg" alt="About-img">
      </picture>
    </div>

    <img id="back-green02" src="img/x32_1.png" alt="back-green02">
  </section>

<!--パンくずリスト**********************************************************-->
  <section id="pan-list">
    <span>ホーム ＞</span>
    <span id="pan-here">当院について</span>
  </section>

<!-- コンセプト・特徴 **********************************************************-->
  <section id="about">
    <h1 id="about-h1back">Concept</h1>
    <img id="about-bigicon" src="img/BGicon_Light.png" alt="BGicon_Light">

    <div id="about-table">

    <div id="about-img" >
        <img class="about-img" src="img/Group 2126.png">
    </div>

      <div id="about-left">
        <div>
          <p id="about-title">
            <img src="img/BGicon.png" alt="about-title-img">
            <span>Concept<br>特徴</span>
          </p>
          <h2 id="about-message">日々変化するカラダと心を癒すパーソナルトレーナーとして</h2>
          <p id="about-comment" >
            当院では、問診にてお客様の症状や生活スタイル、ご希望を丁寧にお伺いした上で施術方針を立てていきます。
            <br><br>また、根本的に症状を改善するために、お客様ご自身で行えるケアやストレッチもお伝えします。
            <br><br> ご不安な点や疑問点などお気軽にご相談くださいませ。</p>
        </div> 
      </div>

    </div>

  </section>


<!-- 施術の流れ **********************************************************--> 
  <section id="flow">
    <h1 id="flow-h1back">Flow</h1>
    <img id="flow-bigicon" src="img/BGicon_Light.png" alt="BGicon_Light">
      
    <div id="flow-table">

      <picture id="flow-img" >
        <!-- SP時画像 -->
        <source media="(max-width: 767px)" srcset="img/SP-Flow-Imagegroup.jpg" alt="flow-img">
        <!-- PC時画像 -->
        <img src="img/Flow-Imagegroup.jpg" alt="flow-img">
      </picture>

      <div id="flow-left">
          <p id="flow-title">
            <img src="img/BGicon.png" alt="flow-title-img">
            <span>Flow<br>施術の流れ</span>
          </p>
          <ol id="flow-list">
            <li>受付</li>
            <li>問診票のご記入</li>
            <li>カウンセリング</li>
            <li>施術</li>
            <li>アフターカウンセリング</li>
          </ol>
      </div>
    </div>

  </section>

<!-- 根本改善のポイント  **********************************************************-->
  <section id="treatment">
    <div id="treatment-title">
      <h3>
        <img src="img/Frame 2122.png">
        <span>根本改善のポイント</span>
        <img src="img/Frame 2564.png">
      </h3>
      <h3><br>お体の状態や生活習慣、ご要望を丁寧にお伺いします。
        <br>ご自身でできるケアなども含めて施術方針をお作りします。</h3>
    </div>
    <table id="treatment-table">
      <tr>
        <td class="treatment-table-items">
          <img class="treatment_img" src="img/Point1.jpg" alt="カウンセリング写真">
          <h3 class="dark-green">丁寧なカウンセリング</h3>
        <td class="treatment-table-items">
          <img class="treatment_img" src="img/Point2.jpg" alt="分析写真">
          <h3 class="dark-green">徹底的分析</h3>
        </td>
        <td class="treatment-table-items">
          <img class="treatment_img" src="img/Point3.jpg" alt="施術計画写真">
          <h3 class="dark-green"> 施術計画のご提案</h3>
        </td>
      </tr>
    </table>
  </section>

  <?php include ('wave-parts.html'); ?>
  <?php include ('top.html'); ?> 

  <?php include ('footer.php'); ?>
