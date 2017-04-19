    <footer class="footer">
      <div class="footer-container">
        <?php
          $args = [
            'theme_location'  => 'menu_footer',
            'container'       => 'nav',
            'container_class' => 'menu-nav',
            'menu_class'      => 'footer-menu',
            'menu_id'        => 'footer-menu'
          ];
          wp_nav_menu($args);
        ?>
        <div class="developer-autor">
          <p>Desarrollado por: <a class="icon-paulantezana" href="http://paulantezana.com" target="_blank">paul antezana</a></p>
        </div>
      </div>
    </footer>
    <?php wp_footer()?>
  </body>
</html>