<div id="category-items">
  <h3>カテゴリ</h3>
    <div>

      <?php
        // $args = array(
        //     //'hide_empty' => 1, // 投稿記事があるカテゴリーのみ表示する
        //     'title_li' => '',  // リストの外側に表示するタイトルと表示形式（''であれば何も表示しない）
        // );
        // wp_list_categories( $args );
        wp_list_categories( 'title_li' );
      ?>

          <!-- <p>営業日時</p>
          <p>キャンペーン</p>
          <p>その他</p> -->
          
  </div>
</div>