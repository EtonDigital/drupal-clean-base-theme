<header id="page-header">
  
  <div class="page-holder">
      
    <!-- Logo -->
    <?php if ($logo): ?>
      <a href="<?php print $front_page; ?>" rel="home" id="logo">
        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" width="" height="" />
      </a>
    <?php endif; ?>

   
    <!-- Region Header -->
    <?php print render($page['header']); ?>

    
    <!-- Main menu-->
    <?php if ($main_menu): ?>
      <nav id="main-menu" class="navigation">
        <?php print theme('links__system_main_menu', array(
          'links' => $main_menu,
          'attributes' => array(
            'id' => 'main-menu-links',
            'class' => array('links', 'clearfix'),
          ),
        )); ?>
      </nav>
    <?php endif; ?>

    
    <!-- Secondary menu -->
    <?php if ($secondary_menu): ?>
      <div id="secondary-menu" class="navigation">
        <?php print theme('links__system_secondary_menu', array(
          'links' => $secondary_menu,
          'attributes' => array(
            'id' => 'secondary-menu-links',
            'class' => array('links', 'inline', 'clearfix'),
          ),
        )); ?>
      </div>
    <?php endif; ?>

  </div> <!-- page-holder -->
  
</header>