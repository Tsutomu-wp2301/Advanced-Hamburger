<!-- カスタムフィールド設定ページのIDを取得 -->
<?php 
$announcement = get_page_by_path('page-announcement-field');
$id = $announcement->ID;
?>

<?php get_header(); ?><!-- ヘッダーの呼び出し -->
      <?php if (!is_front_page()) : ?> 
        <?php if(function_exists('bcn_display')) :?>
          <nav class="p-breadcrumb" typeof="BreadcrumbList" vocab="http//schema.org/" aria-lavel="現在のページ">
            <?php bcn_display(); ?>
          </nav>
        <?php endif; ?>
      <?php endif; ?>
      <div class="p-archive__title__layout">
        <div class="p-announcement__archive-image"></div>
        <h1>News: </h1>
        <p>
          <?php
            $count = $wp_query->found_posts; // 投稿の総件数を取得
            echo '全ての記事（' . $count . '件）';
          ?>
        </P>
      </div>
      <article class="p-archive--content--wrapper">
        <h2 class="c-archive--titlle">
          <?php include_once(ABSPATH . 'wp-admin/includes/plugin.php'); ?>
          <?php 
            if (is_plugin_active('custom-field-suite/cfs.php')) {
              $newslist_title = CFS()->get('newslist_title',$id); 
              if(!empty($newslist_title)) {
                echo esc_html($newslist_title);
              } else { 
                echo 'お知らせ一覧ページの小見出しを設定してください';
              } 
            }else{
              echo 'プラグインCFSを有効にし、お知らせ一覧ページの見出しを入力します';
            }
          ?>
        </h2>
        <p>
          <?php 
            if (is_plugin_active('custom-field-suite/cfs.php')) {
              $newslist_text = CFS()->get('newslist_text',$id);
              if(!empty($newslist_text)) {
                echo esc_html($newslist_text);
              } else { 
                echo 'お知らせ一覧ページの説明文をを入力してください';
              } 
            }else{
              echo 'プラグインCFSを有効にし、お知らせ一覧ページの説明文を入力します。プラグインCFSを有効にし、お知らせ一覧ページの説明文を入力します。';
            }
          ?>
        </p>
        
        <?php if( have_posts() ) :  while( have_posts() ) : the_post(); ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <?php get_template_part( 'template-parts/announcement', 'post'); ?>
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