<?php get_header(); ?><!-- ヘッダーの呼び出し -->

<?php 
/* 
Template Name:カテゴリー一覧ページのカスタムフィールド設定
*/ 
?>
      <article class="p-content--wrapper">
          <div class="p-content__item--wrapper">
            <div class="p-content__item">
              <h3>
                <?php include_once(ABSPATH . 'wp-admin/includes/plugin.php'); ?>
                <?php  
                  if (is_plugin_active('custom-field-suite/cfs.php')) {
                    $category_title = CFS()->get('newslist_title'); 
                    if(!empty($category_title)) {
                      echo esc_html($category_title);
                    } else { 
                      echo 'カテゴリー一覧ページの小見出しを設定してください';
                    }
                  }else{
                    echo 'プラグインCFSを有効にし、カテゴリー一覧ページの小見出しを入力します';
                  } 
                ?>
              </h3>
              <p>
                <?php  
                  if (is_plugin_active('custom-field-suite/cfs.php')) {
                    $category_text = CFS()->get('newslist_text'); 
                    if(!empty($category_text)) {
                    echo esc_html($category_text);
                    } else { 
                      echo 'カテゴリー一覧ページの説明文をを入力してください';
                    } 
                  }else{
                    echo 'プラグインCFSを有効にし、カテゴリー一覧ページの説明文を入力します';
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