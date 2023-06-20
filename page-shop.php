<?php 
/* 
Template Name:ショップについて
*/ 
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
        <h1 class="p-page-image"><?php the_title(); ?></h1>
        <article class="p-single--layout">
          <?php if( have_posts() ) :  while( have_posts() ) : the_post(); ?><!-- メインループ -->
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
              <?php the_content(); ?>
            </article>
          <?php endwhile;  endif; ?>
        </article>
      </section>
    </main>
    <?php get_sidebar(); ?>
  </div>
  <?php get_footer(); ?>