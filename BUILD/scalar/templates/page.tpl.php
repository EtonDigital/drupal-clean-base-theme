<div class="page-main">

  <!-- Header -->
  <header id="page-header" class="page-header">
    <div class="container">

      <div class="row">
        <!-- Logo -->
        <?php if ($logo): ?>
          <a href="<?php print $front_page; ?>" rel="home" id="logo">
            <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" width="" height="" />
          </a>
        <?php endif; ?>


        <!-- Region Header -->
        <?php if (isset($page['header'])): ?>
          <div <?php print $region_class['header']; ?>>
            <?php print render($page['header']); ?>
          </div>
        <?php endif; ?>


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

      </div><!-- row -->
    </div> <!-- container -->
  </header>

  <!-- Messages -->
  <?php if ($messages): ?>
    <section id="messages">
      <?php print $messages; ?>
    </section>
  <?php endif; ?>

  <section id="page-wrapper" class="page-wrapper">
    <div class="container">

      <!-- Breadcrumb -->
      <?php if ($breadcrumb): ?>
        <div class="row">
          <div id="breadcrumb"><?php print $breadcrumb; ?></div>
        </div>
      <?php endif; ?>

      <div class="row">
        <!-- Sidebar First -->
        <?php if (isset($page['sidebar_first'])): ?>
          <section id="sidebar-first" class="<?php print $region_class['sidebar_first']; ?>">
            <?php print render($page['sidebar_first']); ?>
          </section>
        <?php endif; ?>

        <!-- Page content-->
        <section id="page-content" class="<?php print $region_class['content']; ?>">

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

          <!-- Region content-->
          <?php print render($page['content']); ?>
        </section>

        <!-- Sidebar second-->
        <?php if (isset($page['sidebar_second'])): ?>
          <section id="sidebar-second" class="<?php print $region_class['sidebar_second']; ?>">
            <?php print render($page['sidebar_second']); ?>
          </section>
        <?php endif; ?>

      </div> <!-- /.row -->
    </div> <!-- /.container-->
  </section> <!-- /#page-wrapper -->

</div> <!-- page -->


<!-- Footer -->
<?php if (isset($page['footer'])): ?>
  <footer id="page-footer" class="page-footer">
    <div class="container">
      <div class="row">
        <div class="<?php print $region_class['footer']; ?>">
            <?php print render($page['footer']); ?>
        </div>
      </div>
    </div>
  </footer>
<?php endif; ?>

