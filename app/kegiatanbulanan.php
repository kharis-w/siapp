<!DOCTYPE html>
<html lang="en">
  <head>
  <title>Vali Admin - Free Bootstrap 4 Admin Template</title>
  <?php include 'dist/head.php' ?>
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar -->
    <?php include 'dist/navbar.php' ?>

    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>

    <!-- Leftnav -->
    <?php include 'dist/left-nav.php' ?>

    <!-- Main -->
    <?php include 'dist/content/kegiatanbulanan.php' ?>

    <!-- Footer -->
    <?php include 'dist/footer.php' ?>

    <!-- JS Library -->
    <?php include 'dist/js.all.php' ?>
    <!-- Page specific javascripts-->
    <script src="../src/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../src/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="../dist/js/datatables-demo.js"></script>

    <script src="dist/js/kegiatanbulanan.js"></script>
  </body>
</html>