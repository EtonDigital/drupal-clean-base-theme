<div class="page-main">

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

  <!-- Messages -->
  <?php if ($messages): ?>
    <section id="messages">
      <?php print $messages; ?>
    </section>
  <?php endif; ?>

  <section id="page-wrapper">
    <div class="page-holder">

      <!-- Breadcrumb -->
      <?php if ($breadcrumb): ?>
        <div id="breadcrumb"><?php print $breadcrumb; ?></div>
      <?php endif; ?>

      <!-- Sidebar First -->
      <?php if ($page['sidebar_first']): ?>
        <section id="sidebar-first">
          <?php print render($page['sidebar_first']); ?>
        </section>
      <?php endif; ?>

      <!-- Title -->
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1 class="title" id="page-title"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>

      <!-- Tabs -->
      <?php if ($tabs): ?>
        <div class="tabs">
          <?php print render($tabs); ?>
        </div>
      <?php endif; ?>

      <!-- Action links -->
      <?php if ($action_links): ?>
        <ul class="action-links">
          <?php print render($action_links); ?>
        </ul>
      <?php endif; ?>

      <!-- Page content-->
      <?php print render($page['content']); ?>

      <!-- Sidebar second-->
      <?php if ($page['sidebar_second']): ?>
        <section id="sidebar-second">
          <?php print render($page['sidebar_second']); ?>
        </section>
      <?php endif; ?>

    </div> <!-- page-holder-->
  </section> <!-- page-wrapper -->

</div> <!-- page -->

<!-- Footer -->
<footer id="page-footer">
  <?php if ($page['footer']): ?>
    <?php print render($page['footer']); ?>
  <?php endif; ?>
</footer>
