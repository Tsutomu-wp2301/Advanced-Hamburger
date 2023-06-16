<aside class="p-aside p-aside--fonts l-aside l-aside__font-layout">
      <button class="c-button-close"><p>Menuを閉じる</p></button><!-- メニュー閉じるボタン -->
      <h2>Menu</h2>
      
      <!-- テンプレートタグ--ナビメニュー -->
      <?php 
            $defaults = array(
                  'menu'            => 'side-menu',
                  'menu_class'      => 'p-side-menu',
                  'menu_id'         => 'side-menu',
                  'container'       => 'div',
                  'container_class' => 'p-side-menu-container',
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
     


