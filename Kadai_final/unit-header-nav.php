
</head>

<body>
  <!--header nav**********************************************************-->
  <header>

    <!-- ロゴ -->
      <img id="logo" src="<?php echo get_template_directory_uri(); ?>/images/Frame 2259.png" alt="logo">
    
    <!-- PC用ナビゲーション -->
      <nav id="nav-pc">
        <!-- <ul>
          <li><a href="<?php echo home_url(); ?>/home.php">ホーム </a></li>
          <li><a href="<?php echo home_url(); ?>/about.php">当院について </a> </li>
          <li><a href="<?php echo home_url(); ?>/price.php">コース・料金 </a> </li>
          <li><a href="<?php echo home_url(); ?>/information.php">お知らせ </a></li>
          <li><a href="<?php echo home_url(); ?>/voice.php">お客様の声 </a></li>
          <li><a class="reservation" href="<?php echo home_url(); ?>/contact-thanks.php">ご予約・お問合せ </a></li>
        </ul> -->

        <?php wp_nav_menu(); ?>
        
      </nav>
    <!-- スマホ用メニューボタン -->
      <div id="menu-sp" >
        <img src="<?php echo get_template_directory_uri(); ?>/images/Frame 1699.png" alt="ナビゲーションを開く"
            onclick="document.getElementById('nav-sp').style.display = 'block'">
      </div>
    <!-- スマホ用ナビゲーション -->

    <nav id="nav-sp">
      <div>
      <img id="logo" src="<?php echo get_template_directory_uri(); ?>/images/Frame 2259.png" alt="logo">
      <img id="close" src="<?php echo get_template_directory_uri(); ?>/images/Frame 1699-2.png" alt="ナビゲーションを閉じる"
            onclick="document.getElementById('nav-sp').style.display = 'none'">
      </div>
      <h3>メニュー</h3>
      <!-- <ul>
        <li><a href="<?php echo home_url(); ?>/home"
        onclick="document.getElementById('nav-sp').style.display = 'none'"
        >ホーム </a></li>
        <li><a href="<?php echo home_url(); ?>/about"
        onclick="document.getElementById('nav-sp').style.display = 'none'"
        >当院について </a> </li>
        <li><a href="<?php echo home_url(); ?>/price"
        onclick="document.getElementById('nav-sp').style.display = 'none'"
        >コース・料金 </a> </li>
        <li><a href="<?php echo home_url(); ?>/information"
        onclick="document.getElementById('nav-sp').style.display = 'none'"
        >お知らせ </a></li>
        <li><a href="<?php echo home_url(); ?>/voice"
        onclick="document.getElementById('nav-sp').style.display = 'none'"
        >お客様の声 </a></li>
        <li>
          <a class="reservation" href="<?php echo home_url(); ?>/contact-thanks"
          onclick="document.getElementById('nav-sp').style.display = 'none'"
          >ご予約・お問合せ </a>
        </li>
      </ul> -->
      
      <?php wp_nav_menu(); ?>

    </nav>
    </header>
    