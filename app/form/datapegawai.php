<div class="panel panel-default" id="panelForm1">
   <div class="tile">
      <h3 class="tile-title text-center">Form Data Pegawai</h3>
      <div class="tile-body">
         <form action="datapegawai.php" enctype="multipart/form-data" id="bookform_input" method="post" name="bookform_input">
            <div class="row">
              <div class="form-group col-md-12">
                <label><font color="red" size="4">*</font> Nama</label>
                <input class="form-control" type="text" id="nama_pgw" name="nama_pgw">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-12">
                <label><font color="red" size="4">*</font> NIP</label>
                <input class="form-control" type="text" id="nip_pgw" name="nip_pgw">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-12">
                <label><font color="red" size="4">*</font> Pangkat/Gol.Ruang</label>
                <input class="form-control" type="text" id="pangkat_pgw" name="pangkat_pgw">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-12">
                <label><font color="red" size="4">*</font> Jabatan</label>
                <input class="form-control" type="text" id="jabatan_pgw" name="jabatan_pgw">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-12">
                <label><font color="red" size="4">*</font> Unit Kerja</label>
                <input class="form-control" type="text" id="unit_kerja_pgw" name="unit_kerja_pgw">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-12">
                <label><font color="red" size="4">*</font> No. Telp</label>
                <input class="form-control" type="text" id="no_telpn_pgw" name="no_telpn_pgw">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-12">
                <label><font color="red" size="4">*</font> Alamat</label>
                <textarea class="form-control" type="text" id="alamat_pgw" name="alamat_pgw" rows="4"></textarea>
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
              <button class="btn btn-info btn-circle" onclick="adddatapegawai()" type="button"><i class="fas fa-save fa-lg"></i></button>
              <button class="btn btn-warning btn-circle" id="btn-cancel" type="button"><i class="fas fa-times fa-lg"></i></button>
            </div>
          </form>
      </div>
   </div>
</div>