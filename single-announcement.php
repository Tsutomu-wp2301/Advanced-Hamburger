<?php get_header(); ?><!-- ヘッダーの呼び出し -->
      <section>
        <div class="p-announce__title__layout">
          <div class="p-announcement-image"></div>
          <h1><?php the_title(); ?></h1>
        </div>
        <article class="p-single--layout">
          <h2>
            <?php include_once(ABSPATH . 'wp-admin/includes/plugin.php'); ?>
            <?php  
              if (is_plugin_active('custom-field-suite/cfs.php')) {
                $h2_announcement_title = CFS()->get('announcement_title'); 
                if(!empty($h2_announcement_title)) {
                  echo esc_html($h2_announcement_title);
                } else { 
                  echo 'お知らせの見出しを設定してください';
                }
              }else{
                echo 'プラグインCFSを有効にし、お知らせの見出しを入力してください';
              } 
            ?>
          </h2>
          <p>
          <?php  
              if (is_plugin_active('custom-field-suite/cfs.php')) {
                $h2_announcement_text = CFS()->get('announcement_text'); 
                if(!empty($h2_announcement_text)) {
                  echo esc_html($h2_announcement_text);
                } else { 
                  echo 'お知らせの本文を設定してください';
                }
              }else{
                echo 'プラグインCFSを有効にし、お知らせの本文を入力してください';
              } 
            ?>
          </p>
          <?php the_content(); ?>
        </article>
      </section>
    </main>
    <?php get_sidebar(); ?>
  </div>
  <?php get_footer(); ?>