<div class="page-main">

  <!-- Header -->
  <?php require_once('includes/header.php'); ?>

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
<?php require_once('includes/footer.php'); ?>

