<div class="panel panel-default" id="panelForm1">
   <div class="tile">
      <h3 class="tile-title text-center">Form User Management</h3>
      <div class="tile-body">
         <form action="usermanage.php" enctype="multipart/form-data" id="bookform_input" method="post" name="bookform_input">
            <div class="row">
              <div class="form-group col-md-12">
                <label><font color="red" size="4">*</font> Nama</label>
                <input class="form-control" type="text" id="nama_user" name="nama_user">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-12">
                <label><font color="red" size="4">*</font> Username</label>
                <input class="form-control" type="text" id="username" name="username">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-12">
                  <label class="text-danger text-lg">*</label>
                  <label>Category :</label>
                  <select class="form-control" id="category" name="category" type="text">
                    <option value="" disabled selected>Pilih Category</option>
                    <option value="Pegawai">Pegawai</option>
                    <option value="Pejabat Penilai">Pejabat Penilai</option>
                    <option value="Atasan Pejabat Penilai">Atasan Pejabat Penilai</option>
                    <option value="Admin">Admin</option>
                  </select>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-12">
                <label><font color="red" size="4">*</font> Password</label>
                <input class="form-control" type="text" id="password" name="password">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-12">
                <label><font color="red" size="4">*</font> Konfirmasi Password</label>
                <input class="form-control" type="text" id="pass" name="pass">
              </div>
            </div>
            <!-- <div class="row">
              <div class="form-group col-md-12" id="gambar_inbx_display"><img height="150" id="gambar_ksm_ada" name="gambar_ksm_ada" src="../assets/img/user-default.jpg" style="border-radius: 100%;" width="150"> <img height="150" id="gambar_ksm_kosong" name="gambar_ksm_kosong" src="../assets/img/no-image.png" width="150"></div>
              <div class="form-group col-md-12">
                <input aria-describedby="fileHelp" class="form-control-file" id="img_ksm" name="img_ksm" type="file"><small class="form-text text-muted" id="fileHelp">Choose File</small>
              </div>
            </div> -->
            <div align="left" class="form-group col-md-8">
              <input class="form-control" id="act" name="act" type="hidden">
              <input class="form-control" id="id" name="id" type="hidden">
            </div>
            <div align="right" class="form-group col-md-12">
              <button class="btn btn-success btn-circle" onclick="addusermanage()" type="button"><i class="fas fa-save fa-lg"></i></button>
              <button class="btn btn-danger btn-circle" id="btn-cancel" type="button"><i class="fas fa-times fa-lg"></i></button>
            </div>
          </form>
      </div>
   </div>
</div>