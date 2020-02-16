<?php
include '../config/config.php';
include 'session.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Profile</title>
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
  <?php include 'dist/content/profile.php' ?>
  <!-- Footer -->
  <?php include 'dist/footer.php' ?>
  <!-- JS Library -->
  <?php include 'dist/js.all.php' ?>
  <!-- Page specific javascripts-->
  <script src="dist/js/profile.js">
  </script>
</body>
</html>