<!-- カスタムフィールド設定ページのIDを取得 -->
<?php 
$tagfield = get_page_by_path('page-tagfield');
$id = $tagfield->ID;
?>
<?php
  $count = $wp_query->found_posts; // 投稿の総件数を取得
  $tag = get_the_tags();
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
          <?php if (!empty($tag)) : ?>
            <?php the_tags(', '); ?>
          <?php else : ?>
            タグはありません
          <?php endif; ?>
          （<?php echo $count; ?>件）
        </p>
      </div>
      <article class="p-archive--content--wrapper">
        <h2 class="c-archive--titlle">
          <?php include_once(ABSPATH . 'wp-admin/includes/plugin.php'); ?>
          <?php 
            if (is_plugin_active('custom-field-suite/cfs.php')) {
              $tag_title = CFS()->get('tag_title',$id); 
              if(!empty($tag_title)) {
                echo esc_html($tag_title);
              } else { 
                echo 'タグ一覧ページの小見出しを設定してください';
              } 
            }else{
              echo 'プラグインCFSを有効にし、タグ一覧ページの見出しを入力します';
            }
          ?>
        </h2>
        <p>
          <?php 
            if (is_plugin_active('custom-field-suite/cfs.php')) {
              $tag_text = CFS()->get('category_text',$id);
              if(!empty($tag_text)) {
                echo esc_html($tag_text);
              } else { 
                echo 'タグ一覧ページの説明文をを入力してください';
              } 
            }else{
              echo 'プラグインCFSを有効にし、タグ一覧ページの説明文を入力します。プラグインCFSを有効にし、タグ一覧ページの説明文を入力します。';
            }
          ?>
        </p>
        <?php if( have_posts() ) :  while( have_posts() ) : the_post(); ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <?php get_template_part( 'template-parts/product', 'post'); ?>
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