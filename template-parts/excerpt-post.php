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
          $h2_menu = CFS()->get('h2_menu',$id);
          if(!empty($h2_menu)) {
            echo esc_html($h2_menu); 
          } else { 
            echo '商品ページの見出しを入力します2';
          }
        }else{
          echo 'プラグインCFSを有効にし、商品ページの見出しを入力します';
        }
      ?>
    </h4>
    <p><?php echo esc_html(mb_substr(get_the_excerpt(),0,80)) . '...'; ?></p>
    <a href="<?php the_permalink(); ?>" class="c-button--archive p-stretched--link">詳しく見る</a>
  </div>
</section>