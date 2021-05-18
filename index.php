<?php
include "layout/header.php";
?>
  <!-- Navbar -->
  <?php
  if($url !== 'admin'){
    include "layout/navbar.php";
  } 
  ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php
  if($url == 'admin'){
    include "layout/sidebar.php";
  }
  
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <?php
    include "layout/breadcrumb.php";
    ?>
    <!-- /.content-header -->

    <!-- Main content -->
    <?php
    route();
    ?>
    <!-- /.content -->
  </div>
<?php
include "layout/footer.php";
?>