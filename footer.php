  <footer class="l-footer p-footer" id="menu-footer-menu-container">
        <!-- テンプレートタグ--ナビメニュー -->
        <?php 
          $defaults = array(
              'menu'            => 'footer-nav',
              'menu_class'      => 'footer-nav',
              'menu_id'         => 'footer-nav',
              'container'       => 'div',
              'container_class' => 'footer-nav-container',
              'container_id'    => '',
              'fallback_cb'     => 'wp_page_menu',
              'before'          => '',
              'after'           => '',
              'link_before'     => '',
              'link_after'      => '',
              'echo'            => true,
              'depth'           => 0,
              'walker'          => '',
              'theme_location'  => '',
              'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        );
        wp_nav_menu( $defaults );
      ?>
    <p class="copyright">Copyright :  RaisTech</p>
  </footer>
  <?php wp_footer(); ?>
</body>
</html>