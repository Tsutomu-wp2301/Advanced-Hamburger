<?php
/*
YARPP Template: カスタムテンプレート
Author: Tsutomu
Description: アイキャッチ、タイトル、抜粋、詳しく見る、の表示
*/
?>

<?php
/*
Templating in YARPP enables developers to uber-customize their YARPP display using PHP and template tags.

The tags we use in YARPP templates are the same as the template tags used in any WordPress template. In fact, any WordPress template tag will work in the YARPP Loop. You can use these template tags to display the excerpt, the post date, the comment count, or even some custom metadata. In addition, template tags from other plugins will also work.

If you've ever had to tweak or build a WordPress theme before, you’ll immediately feel at home.

// Special template tags which only work within a YARPP Loop:

1. the_score()		// this will print the YARPP match score of that particular related post
2. get_the_score()		// or return the YARPP match score of that particular related post

Notes:
1. If you would like Pinterest not to save an image, add `data-pin-nopin="true"` to the img tag.

*/
?>

<?php 
$page = get_page_by_path('page-field');
$id = $page->ID;
?>

<?php if ( have_posts() ) : ?>
<ul>
	<?php
	while ( have_posts() ) :
		the_post();
		?>
		<section class="p-yarpp__item--wrapper">
			<?php if(has_post_thumbnail()) : ?>
				<?php the_post_thumbnail('post_thumbnail',array('class' => 'c-post--thumbnail')); ?>
				<?php else : ?>
					<img src='<?php echo exc_url(get_template_directory_uri()); ?>/image/hamburger.png'>
			<?php endif; ?>
			<div class="p-yarpp__item">
				<h3>
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
				</h3>
				<p><?php echo esc_html(mb_substr(get_the_excerpt(),0,50)) . '...'; ?></p>
				<div class="p-flex--yarpp">
					<a href="<?php the_permalink(); ?>" class="c-button--yarpp p-stretched--link">詳しく見る</a>
				</div>
			</div>
		</section>
	<?php endwhile; ?>
</ul>
<?php else : ?>
<p>No related posts.</p>
<?php endif; ?>