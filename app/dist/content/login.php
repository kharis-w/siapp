<section class="material-half-bg">
  <div class="cover"></div>
</section>
<section class="login-content">
  <div class="logo">
    <h1>S I A P P</h1>
  </div>
  <div class="login-box">
    <form action="login.php" class="login-form" enctype="multipart/form-data" id="bookform" method="POST" name="bookform" autocomplete="off">
      <h3 class="login-head">SIGN IN</h3>
      <div class="form-group">
        <div class="input-group input-group-alternative">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-user fa-lg"></i></span>
          </div>
          <input type="text" class="form-control" id="username" name="username" placeholder="Username">
        </div>
      </div>
      <div class="form-group">
        <div class="input-group input-group-alternative">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-key fa-lg"></i></span>
          </div>
          <input type="password" class="form-control" id="pass" name="pass" placeholder="Password">
        </div>
      </div>
      <div class="form-group btn-container">
        <button type="button" class="btn btn-primary btn-user btn-block" onclick="login()"><h4>Login</h4></button>
      </div>
    </form>
  </div>
</section>