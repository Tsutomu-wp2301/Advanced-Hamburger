<!-- カスタムフィールド設定ページのIDを取得 -->
<?php 
$page = get_page_by_path('page-field');
$id = $page->ID;
?>

<?php get_header(); ?><!-- ヘッダーの呼び出し -->
      <div class="p-archive--image">
        <div class="c-bg--black--archive">
          <h1>Menu:
            <?php
              $category = get_the_category();
                echo ' ';
                if ($category) {
                  foreach ($category as $cat) {
                    echo esc_html($cat->name) . ' ';
                  }
              }
            ?>
          </h1>
        </div>
      </div>
      <article class="p-archive--content--wrapper">
        <h2 class="c-archive--titlle">
          <?php include_once(ABSPATH . 'wp-admin/includes/plugin.php'); ?>
          <?php 
            if (is_plugin_active('custom-field-suite/cfs.php')) {
              $h2_archive = CFS()->get('h2_archive',$id); 
              if(!empty($h2_archive)) {
                echo esc_html($h2_archive);
              } else { 
                echo 'アーカイブの小見出しを設定します';
              } 
            }else{
              echo 'プラグインCFSを有効にし、アーカイブの見出しを入力します';
            }
          ?>
        </h2>
        <p>
          <?php 
            if (is_plugin_active('custom-field-suite/cfs.php')) {
              $text_archive = CFS()->get('text_archive',$id);
              if(!empty($text_archive)) {
                echo esc_html($text_archive);
              } else { 
                echo 'ここにアーカイブの説明文をを入力します';
              } 
            }else{
              echo 'プラグインCFSを有効にし、アーカイブの説明文を入力します。プラグインCFSを有効にし、アーカイブの説明文を入力します。プラグインCFSを有効にし、アーカイブの説明文を入力します。プラグインCFSを有効にし、アーカイブの説明文を入力します。プラグインCFSを有効にし、アーカイブの説明文を入力します。';
            }
          ?>
        </p>
        
        <?php if( have_posts() ) :  while( have_posts() ) : the_post(); ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <?php get_template_part( 'template-parts/excerpt', 'post'); ?>
          </article>
        <?php endwhile;  endif; ?>
        
      </article>
      <nav class="p-navigation">
        <!-- <p>page</p> -->
        <?php wp_pagenavi(); ?>
      </nav>
      <div class="c-color-board--black"></div><!-- メニュー展開時に画面を暗くする -->
    </main>
    <?php get_sidebar(); ?>
  </div>
  <nav class="p-navigation--sp">
    <P><?php previous_posts_link('<< 前へ'); ?></P>
    <P><?php next_posts_link('次へ >>'); ?></P>
  </nav>
  <?php get_footer(); ?>