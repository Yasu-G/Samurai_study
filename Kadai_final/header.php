<!--*****************************
  - トップページ (index)
  - 当院について (about)
  - コース・料金 (price)
  - お知らせ (information)
  - お知らせ詳細 (page-name.html)
  - お客様の声 (voice)
  - ご予約・お問合せサンクスページ (contact-thanks.html)  
*****************************-->

<!DOCTYPE html>
<html lang="ja" id="html-top">

<!-- Header CSS -->
<link rel="stylesheet" href="css/style-parts-header.css">
<link rel="stylesheet" href="css/style-parts-index-headnavi.css">

<head>
  <title>SAMURAI整体院</title>
  <meta name="description" content="SAMURAI整体院の「当院について」ページです">

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- フォントの読み込み -->
    <!-- Shippori Mincho -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Shippori+Mincho:wght@600&display=swap" rel="stylesheet">
    <!--  Merriweather Sans -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Merriweather+Sans&family=Shippori+Mincho:wght@600&display=swap" rel="stylesheet">
    <!-- Noto Sans JP -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Merriweather+Sans&family=Noto+Sans+JP&family=Shippori+Mincho:wght@600&display=swap" rel="stylesheet">

  <!-- slickの読み込み -->
      <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
      <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">

</head>

<body>
  <!--header nav**********************************************************-->
  <header>

    <!-- ロゴ -->
      <img id="logo" src="img/Frame 2259.png" alt="logo">
    
    <!-- PC用ナビゲーション -->
      <nav id="nav-pc">
        <ul>
          <li><a href="index.php">ホーム </a></li>
          <li><a href="about.php">当院について </a> </li>
          <li><a href="price.php">コース・料金 </a> </li>
          <li><a href="information.php">お知らせ </a></li>
          <li><a href="voice.php">お客様の声 </a></li>
          <li><a class="reservation" href="contact-thanks.php">ご予約・お問合せ </a></li>
        </ul>
      </nav>
    <!-- スマホ用メニューボタン -->
      <div id="menu-sp" >
        <img src="img/Frame 1699.png" alt="ナビゲーションを開く"
            onclick="document.getElementById('nav-sp').style.display = 'block'">
      </div>
    <!-- スマホ用ナビゲーション -->

    <nav id="nav-sp">
      <div>
      <img id="logo" src="img/Frame 2259.png" alt="logo">
      <img id="close" src="img/Frame 1699-2.png" alt="ナビゲーションを閉じる"
            onclick="document.getElementById('nav-sp').style.display = 'none'">
      </div>
      <h3>メニュー</h3>
      <ul>
        <li><a href="index.php"
        onclick="document.getElementById('nav-sp').style.display = 'none'"
        >ホーム </a></li>
        <li><a href="about.php"
        onclick="document.getElementById('nav-sp').style.display = 'none'"
        >当院について </a> </li>
        <li><a href="price.php"
        onclick="document.getElementById('nav-sp').style.display = 'none'"
        >コース・料金 </a> </li>
        <li><a href="information.php"
        onclick="document.getElementById('nav-sp').style.display = 'none'"
        >お知らせ </a></li>
        <li><a href="voice.php"
        onclick="document.getElementById('nav-sp').style.display = 'none'"
        >お客様の声 </a></li>
        <li>
          <a class="reservation" href="contact-thanks.php"
          onclick="document.getElementById('nav-sp').style.display = 'none'"
          >ご予約・お問合せ </a>
        </li>
      </ul>
    </nav>
    </header>
    