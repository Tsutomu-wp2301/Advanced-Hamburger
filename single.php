<?php  
  global $post;
  $single_id = $post->ID;
?>



<?php get_header(); ?><!-- ヘッダーの呼び出し -->
      <?php if (!is_front_page()) : ?> 
        <?php if(function_exists('bcn_display')) :?>
          <nav class="p-breadcrumb" typeof="BreadcrumbList" vocab="http//schema.org/" aria-lavel="現在のページ">
            <?php bcn_display(); ?>
          </nav>
        <?php endif; ?>
      <?php endif; ?>
      <section>
        <?php if( have_posts() ) :  while( have_posts() ) : the_post(); ?>
          <h1 class="p-single-image"><?php echo get_the_title(); ?></h1>
          <article class="p-single--layout">
          <h2>
            <?php include_once(ABSPATH . 'wp-admin/includes/plugin.php'); ?>
            <?php  
              if (is_plugin_active('custom-field-suite/cfs.php')) {
                  $h2_menu = CFS()->get('h2_menu');
                  if(!empty($h2_menu)) {
                      echo esc_html($h2_menu); 
                    } else { 
                      echo '商品ページの見出しを入力します2';
                    }
              }else{
                echo 'プラグインCFSを有効にし、商品ページの見出しを入力します';
              }
            ?>
          </h2>
          <p>
            <?php
              if (is_plugin_active('custom-field-suite/cfs.php')) {  
                $h2_menu_text = CFS()->get('h2_menu_text');
                if(!empty($h2_menu_text)) {
                  echo esc_html($h2_menu_text); 
                } else { 
                  echo '商品ページの説明文を入力します2';
                }
              }else{
                echo 'プラグインCFSを有効にし、商品ページの説明文を入力します。プラグインCFSを有効にし、商品ページの説明文を入力します。プラグインCFSを有効にし、商品ページの説明文を入力します。プラグインCFSを有効にし、商品ページの説明文を入力します。プラグインCFSを有効にし、商品ページの説明文を入力します。';
              }
            ?>
          </p>
            <?php the_content(); ?>
            <!-- カスタムフィールド設定ページのIDを取得 -->
            <?php 
            $page = get_page_by_path('page-field');
            $id = $page->ID;
            ?>
            <h2>★おすすめ情報</h2>
            <?php include_once(ABSPATH . 'wp-admin/includes/plugin.php'); ?>
            <div class="p-recommend__info__title">
              <?php 
                if (is_plugin_active('custom-field-suite/cfs.php')) {
                  $link = CFS()->get('recommended_information', $id);
                  
                  if (!empty($link['text']) || !empty($link['url'])) {
                    if (!empty($link['url'])) {
                      echo '<a href="' . esc_url($link['url']) . '">' . esc_html($link['text']) . '</a>';
                    } elseif (!empty($link['text'])) {
                        echo esc_html($link['text']);
                    }
                  } else {
                      $default_url = 'http://advanced.local/announcement/';
                      $default_text = 'ブログトップページへ';
                    echo '<a href="' . esc_url($default_url) . '">' . esc_html($default_text) . '</a>';
                  }
                }else{
                  echo 'プラグインCFSを有効化し、カスタムフィールドからおすすめ情報のタイトルを設定します';
                }
              ?>
            </div>
            <h2>★おすすめ商品</h2>
            <div class="p-container--yarpp">
              <?php
                if (function_exists('yarpp_related')) {
                  yarpp_related();
                }
              ?>
            </div>
          </article>
        <?php endwhile;  endif; ?>
      </section>
    </main>
    <?php get_sidebar(); ?>
  </div>
  <?php get_footer(); ?>