<section class="p-archive__item--wrapper">
  <?php if(has_post_thumbnail()) : ?>
  <?php the_post_thumbnail('archive_thumbnail',array('class' => 'c-post--thumbnail')); ?>
    <?php else : ?>
      <img src='<?php echo exc_url(get_template_directory_uri()); ?>/image/hamburger.png'>
    <?php endif; ?>
  <div class="p-archive__item">
    <h3><?php the_title(); ?></h3>
    <h4>
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
    </h4>
    <p><?php echo esc_html(mb_substr(get_the_excerpt(),0,80)) . '...'; ?></p>
    <a href="<?php the_permalink(); ?>" class="c-button--archive p-stretched--link">詳しく見る</a>
  </div>
</section>