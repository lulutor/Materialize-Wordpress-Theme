<div class="container">
  <div class="section">

    <!--   Icon Section   -->
    <?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
    <aside id="primary-sidebar" class="primary-sidebar widget-area" role="complementary" class="row">
      <?php dynamic_sidebar( 'sidebar' ); ?>
    </aside>
      <?php endif; ?>
    </div>
  <br><br>
</div>
