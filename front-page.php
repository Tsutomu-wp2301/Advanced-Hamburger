<!-- カスタムフィールド設定ページのIDを取得 -->
<?php 
$page = get_page_by_path('page-field');
$id = $page->ID;
?>

<?php get_header(); ?><!-- ヘッダーの呼び出し -->
      <h1 class="p-main-image">ダミーサイト</h1>
      <article class="p-content--wrapper">
        <section class="p-content p-content--bg" id="js-takeOut">
          <h2 class="c-title">Take Out</h2>
          <div class="p-content__item--wrapper">
            <div class="p-content__item">
              <h3>
              <?php include_once(ABSPATH . 'wp-admin/includes/plugin.php'); ?>
              <?php  
                if (is_plugin_active('custom-field-suite/cfs.php')) {
                  $h2_take_out = CFS()->get('take_out_title_1', $id);
                  if(!empty($h2_take_out)) {
                      echo esc_html($h2_take_out);
                    } else { 
                      echo 'テイクアウトの小見出しを設定1';
                    } 
                }else{
                  echo 'プラグインCFSを有効にし、フロントページの見出しを入力します';
                }
              ?>
              </h3>
              <p>
                <?php  
                  if (is_plugin_active('custom-field-suite/cfs.php')) {
                    $text_take_out = CFS()->get('take_out_text_1',$id); 
                    if(!empty($text_take_out)) {
                      echo esc_html($text_take_out);
                    } else { 
                      echo 'ここにテイクアウトの説明文をを入力します';
                    } 
                  }else{
                    echo 'プラグインCFSを有効にし、テイクアウトの説明文を入力します';
                  }
                ?>
              </p>
            </div>
            <div class="p-content__item">
              <h3>
                <?php  
                  if (is_plugin_active('custom-field-suite/cfs.php')) {
                    $h2_take_out2 = CFS()->get('take_out_title_2',$id); 
                    if(!empty($h2_take_out2)) {
                      echo esc_html($h2_take_out2);
                    } else { 
                      echo 'テイクアウトの小見出しを設定2';
                    } 
                  }else{
                    echo 'プラグインCFSを有効にし、テイクアウトの小見出し2を入力します';
                  }
                ?>
              </h3>
              <p>
                <?php  
                  if (is_plugin_active('custom-field-suite/cfs.php')) {
                      $text_take_out2 = CFS()->get('take_out_text_2',$id); 
                      if(!empty($text_take_out2)) {
                      echo esc_html($text_take_out2);
                    } else { 
                      echo 'ここにテイクアウトの説明文をを入力します';
                    } 
                  }else{
                    echo 'プラグインCFSを有効にし、テイクアウトの説明文2を入力します';
                  }
                ?>
              </p>
            </div>
          </div>
        </section>
        <section class="p-content p-content--bg--EatIn" id="js-eatIn">
          <h2 class="c-title">Eat In</h2>
          <div class="p-content__item--wrapper">
            <div class="p-content__item">
              <h3>
                <?php  
                  if (is_plugin_active('custom-field-suite/cfs.php')) {
                    $h2_eat_in = CFS()->get('eat_in_title_1',$id); 
                    if(!empty($h2_eat_in)) {
                      echo esc_html($h2_eat_in);
                    } else { 
                      echo 'イートインの小見出しを設定';
                    }
                  }else{
                    echo 'プラグインCFSを有効にし、イートインの小見出しを入力します';
                  }
                ?>
              </h3>
              <p>
                <?php  
                  if (is_plugin_active('custom-field-suite/cfs.php')) {
                    $text_eat_in = CFS()->get('eat_in_text_1',$id); 
                    if(!empty($text_eat_in)) {
                      echo esc_html($text_eat_in);
                    } else { 
                      echo 'ここにイートインの説明文をを入力します';
                    }
                  }else{
                    echo 'プラグインCFSを有効にし、イートインの説明文を入力します';
                  } 
                ?>
              </p>
            </div>
            <div class="p-content__item">
              <h3>
                <?php  
                  if (is_plugin_active('custom-field-suite/cfs.php')) {
                    $h2_eat_in2 = CFS()->get('eat_in_title_2',$id); 
                    if(!empty($h2_eat_in2)) {
                      echo esc_html($h2_eat_in2);
                    } else { 
                      echo 'イートインの小見出し2を設定';
                    } 
                  }else{
                    echo 'プラグインCFSを有効にし、イートインの小見出し2を入力します';
                  } 
                ?>
              </h3>
              <p>
                <?php  
                  if (is_plugin_active('custom-field-suite/cfs.php')) {
                    $text_eat_in2 = CFS()->get('eat_in_text_2',$id); 
                    if(!empty($text_eat_in2)) {
                      echo esc_html($text_eat_in2);
                    } else { 
                      echo 'ここにイートインの説明文2をを入力します';
                    } 
                  }else{
                    echo 'プラグインCFSを有効にし、イートインの説明文2を入力します。プラグインCFSを有効にし、イートインの説明文2を入力します。プラグインCFSを有効にし、イートインの説明文2を入力します。プラグインCFSを有効にし、イートインの説明文2を入力します。';
                  } 
                ?>
              </p>
            </div>
          </div>
        </section>
      </article>
      <article class="c-bg--black">
        <div class="p-map">
          <div class="c-color-board">
            <h2 class="c-title map">
                <?php  
                  if (is_plugin_active('custom-field-suite/cfs.php')) {
                  $map_title1 = CFS()->get('map_title',$id); 
                  if(!empty($map_title1)) {
                    echo esc_html($map_title1);
                  } else { 
                    echo '地図の見出しを設定します';
                  } 
                }else{
                  echo 'プラグインCFSを有効にし、地図の見出しを入力します';
                } 
              ?>
            </h2>
            <p>
              <?php  
                if (is_plugin_active('custom-field-suite/cfs.php')) {
                  $text_map = CFS()->get('map_text',$id); 
                  if(!empty($text_map)) {
                    echo esc_html($text_map);
                  } else { 
                    echo 'ここに地図の説明文を入力します';
                  } 
                }else{
                  echo 'プラグインCFSを有効にし、地図の説明文を入力します。プラグインCFSを有効にし、地図の説明文を入力します。プラグインCFSを有効にし、地図の説明文を入力します。プラグインCFSを有効にし、地図の説明文を入力します。プラグインCFSを有効にし、地図の説明文を入力します。プラグインCFSを有効にし、地図の説明文を入力します。プラグインCFSを有効にし、地図の説明文を入力します。プラグインCFSを有効にし、地図の説明文を入力します。';
                } 
              ?>
            </p>
          </div>
        </div>
      </article>
    </main>
    <?php get_sidebar(); ?>
  </div>
  <?php get_footer(); ?>

