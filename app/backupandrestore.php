<?php
include '/config/config.php';
session_start();
if (empty($_SESSION[username]) AND empty($_SESSION[password])) {
    header('location:  login.php');
}
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
  <?php include 'dist/content/backupandrestore.php' ?>
  <!-- Footer -->
  <?php include 'dist/footer.php' ?>
  <!-- JS Library -->
  <?php include 'dist/js.all.php' ?>
  <!-- Page specific javascripts-->
</body>
</html>