<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <?php include 'dist/head.php' ?>
</head>
<body>
  <!-- Main -->
  <?php include 'dist/content/login.php' ?>
  <!-- Footer -->
  <?php include 'dist/footer.php' ?>
  <!-- JS Library -->
  <?php include 'dist/js.all.php' ?>
  <script src="dist/js/login.js"></script>
  <script type="text/javascript">
       // Login Page Flipbox control
       $('.login-content [data-toggle="flip"]').click(function() {
         $('.login-box').toggleClass('flipped');
         return false;
       });
  </script>
</body>
</html>