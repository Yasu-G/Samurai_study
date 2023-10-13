<!--*****************************
  - コース・料金 (course.html)
*****************************-->

<!DOCTYPE html>
<html lang="ja" id="html-top">

<link rel="stylesheet" href="css/style-price.css">

<?php include ('head-parts.html'); ?>

<body>

<!--header nav**********************************************************-->
<?php include ('header-parts.html'); ?>
  
<main>
  <article>
    
<!--ホーム**********************************************************-->
  <section id="home">
    <div id="home-message" >
      <h1>Price</h1>
      <h2>コース・料金</h2>
    </div>
    <div id="top-img-div" >
      <img id="top-img" src="img/Courseprice.jpg" alt="About-img">
    </div>
    <div id="back-img"></div>
    <img id="back-green02" src="img/x32_1.png" alt="back-green02">
  </section>

<!--パンくずリスト**********************************************************-->
  <section id="pan-list">
    <span>ホーム ＞</span>
    <span id="pan-here">コース・料金</span>
  </section>

<!-- コース・料金 **********************************************************--> 
<section id="course">
  <div id="course-title-box">
    <h3 id="course-title">
      <img src="img/Frame 2122.png">
      <span> コース・料金</span>
      <img src="img/Frame 2564.png">
      <span><br><br>当院では保険診療、自費診療<br>ともにご対応しております</span>
    </h3>
  </div>
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
</section>


<!-- 保険診療 **********************************************************--> 
  <section id="insurance">
    <div id="insurance-table">

        <div id="insurance-left">
          <p id="insurance-title">
            <img src="img/BGicon.png" alt="Insurance-title-img">
            <span>Insurance<br>保険診療</span>
          </p>
          <p id="insurance-message"><br>健康保険の適用は、慢性化していない、急性のけがのみが対象となります。
            <br>「負傷原因が急性または亜急性（急性に準ずる）の外傷性の負傷」のみです。</p>
          <ul id="insurance-list">
            <li>骨折・打撲・捻挫・脱臼</li>
            <li>スポーツ診療</li>
            <li>交通事故</li>
          </ul>
        </div>

        <div id="insurance-img" >
          <img class="insurance-img" src="img/TOP-insurance2.jpg">
        </div>
  
    </div>
  </section>

<!-- 自費診療 **********************************************************--> 
<section id="selfpay">
  <div id="selfpay-table">

    <div id="selfpay-left">
      <p id="selfpay-title">
        <img src="img/BGicon.png" alt="selfpay-title-img">
        <span>Self-pay<br>自費診療</span>
      </p>
      <p id="selfpay-message">慢性的なご症状、日常生活の疲労やご年齢により生じる痛み緩和の施術は
        健康保険の適用がなく、全額自己負担となります。</p>
      <ul id="selfpay-list">
        <li>腰痛・肩こり</li>
        <li>冷え性・だるさ</li>
        <li>骨盤・背骨矯正</li>
      </ul>
      <p id="selfpay-cost">初回　8,800円（税込） / 50分
        <br>2回目以降　6,600円（税込） / 30分</p>
    </div>

    <div id="selfpay-img" >
      <img class="selfpay-img" src="img/TOP-self2.jpg">
    </div>

  </div>
</section>


<?php include ('wave-parts.html'); ?>
<?php include ('footer-parts.html'); ?>
<?php include ('top.html'); ?>
  
</body>
</html>