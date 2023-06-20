<section class="p-archive__item--wrapper">
  <?php if(has_post_thumbnail()) : ?>
  <?php the_post_thumbnail('archive_thumbnail',array('class' => 'c-post--thumbnail')); ?>
    <?php else : ?>
      <img src='<?php echo esc_url(get_template_directory_uri()); ?>/image/hamburger.png'>
    <?php endif; ?>
  <div class="p-news__archive__item">
    <h3>
      <?php include_once(ABSPATH . 'wp-admin/includes/plugin.php'); ?>
      <?php 
        if (is_plugin_active('custom-field-suite/cfs.php')) {
          $announcement_title = CFS()->get('announcement_title',$id);
          if(!empty($announcement_title)) {
            echo esc_html($announcement_title); 
          } else { 
            echo 'お知らせの投稿ページから見出しを設定してください';
          }
        }else{
          echo 'プラグインCFSを有効にし、お知らせの見出しを入力してください';
        }
      ?>
    </h3>
    <?php 
      $categories = get_the_category(); // カテゴリーの配列を取得
      $category_names = array(); // カテゴリー名を格納するための配列
      foreach ($categories as $category) {
        $category_names[] = $category->name; // カテゴリー名を配列に追加
      }
      $category_list = implode(', ', $category_names); // カテゴリー名をカンマで区切って結合
      echo '<span>' . $category_list . '</span>'; // <p>要素でカテゴリー名を表示
    ?>
    <?php 
      $tags = get_the_tags();
      if ($tags) {
        echo '<div class="p-tag-container">';
        foreach ($tags as $tag) {
            echo '<span class="p-tag">' . $tag->name . '</span>';
        }
        echo '</div>';
      }
    ?>
    <p><?php echo esc_html(mb_substr(get_the_excerpt(),0,80)) . '...'; ?></p>
    <a href="<?php the_permalink(); ?>" class="c-button--announce-item p-stretched--link">詳しく見る</a>
  </div>
</section>