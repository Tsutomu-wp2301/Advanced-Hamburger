<?php get_header(); ?><!-- ヘッダーの呼び出し -->

<?php 
/* 
Template Name:お知らせ一覧ページのカスタムフィールド設定
*/ 
?>
      <article class="p-content--wrapper">
          <div class="p-content__item--wrapper">
            <div class="p-content__item">
              <h3>
                <?php include_once(ABSPATH . 'wp-admin/includes/plugin.php'); ?>
                <?php  
                  if (is_plugin_active('custom-field-suite/cfs.php')) {
                    $newslist_title = CFS()->get('newslist_title'); 
                    if(!empty($newslist_title)) {
                      echo esc_html($newslist_title);
                    } else { 
                      echo 'お知らせ一覧ページの小見出しを設定してください';
                    }
                  }else{
                    echo 'プラグインCFSを有効にし、お知らせ一覧ページの小見出しを入力します';
                  } 
                ?>
              </h3>
              <p>
                <?php  
                  if (is_plugin_active('custom-field-suite/cfs.php')) {
                    $newslist_text = CFS()->get('newslist_text'); 
                    if(!empty($newslist_text)) {
                    echo esc_html($newslist_text);
                    } else { 
                      echo 'お知らせ一覧ページの説明文をを入力してください';
                    } 
                  }else{
                    echo 'プラグインCFSを有効にし、お知らせ一覧ページの説明文を入力します';
                  } 
                ?>
              </p>
            </div>
          </div>
      </article>
    </main>
    <?php get_sidebar(); ?>
  </div>
</div>
<?php get_footer(); ?>