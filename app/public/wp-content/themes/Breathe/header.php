<!DOCTYPE html>
<html>
  <head>
    <?php wp_head(); ?>
  </head>
  <body>
      
      <div class="flex-container">
  <div><p>Fictional University</p></div>
  <div class="site-header__menu group">
    <nav class="main-navigation">
  <?php wp_nav_menu(array(
    'theme_location' => 'headerMenuLocation'
  )); ?>
  </div>
  <div ><p>Sikh Reddit</p></div>
</div>
</body>
</html>
