<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="fa fa-user"></i> Profile</h1>
    </div>
  </div>
  <div class="row">
    <div class="panel panel-default" id="panelForm1">
      <div class="tile">
        <div class="tile-body">
          <form action="#" enctype="multipart/form-data" id="bookform_input" method="post" name="bookform_input">
            <div class="row">
              <div class="form-group col-md-12">
                <label><font color="red" size="4">*</font> Nama</label> <input class="form-control" type="text">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-12">
                <label><font color="red" size="4">*</font> NIP</label> <input class="form-control" type="text">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-12">
                <label><font color="red" size="4">*</font> Jabatan</label> <input class="form-control" type="text">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-12">
                <label><font color="red" size="4">*</font> No. Telp</label> <input class="form-control" type="text">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-12">
                <label><font color="red" size="4">*</font> Alamat</label> <input class="form-control" type="text">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-12" id="gambar_inbx_display"><img height="150" id="gambar_ksm_ada" name="gambar_ksm_ada" src="../assets/img/user-default.jpg" style="border-radius: 100%;" width="150"> <img height="150" id="gambar_ksm_kosong" name="gambar_ksm_kosong" src="../assets/img/no-image.png" width="150"></div>
              <div class="form-group col-md-12">
                <input aria-describedby="fileHelp" class="form-control-file" id="img_ksm" name="img_ksm" type="file"><small class="form-text text-muted" id="fileHelp">Choose File</small>
              </div>
            </div>
            <div align="left" class="form-group col-md-8">
              <input class="form-control" id="act" name="act" type="hidden"> <input class="form-control" id="id" name="id" type="hidden">
            </div>
            <div align="right" class="form-group col-md-12">
              <button class="btn btn-info btn-circle" onclick="" type="button"><i class="fa fa-fw fa-lg fa-save" style="font-size: 20px;"></i></button> <button class="btn btn-warning btn-circle" id="btn-cancel" type="button"><i class="fa fa-fw fa-lg fa-times" style="font-size: 20px;"></i></button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="panel panel-default" id="panelForm2">
      <div class="tile">
        <div class="tile-body">
          <div class="row">
            <div class="col-md-12">
              <table border="0" width="100%">
                <tr>
                  <td colspan="4">
                    <center>
                      <img src="../assets/img/user-default.jpg" style="border-radius: 100%" width="250">
                    </center>
                  </td>
                </tr>
                <tr>
                  <td colspan="4">&nbsp;</td>
                </tr>
                <tr>
                  <td align="left" width="25%"><label class="h6">Nama</label></td>
                  <td align="center" width="5%"><label class="h6">:</label></td>
                  <td align="left"><label class="h6">Kharis Wijayanto</label></td>
                </tr>
                <tr>
                  <td align="left"><label class="h6">NIP</label></td>
                  <td align="center"><label class="h6">:</label></td>
                  <td align="left"><label class="h6">115225068</label></td>
                </tr>
                <tr>
                  <td align="left"><label class="h6">Jabatan</label></td>
                  <td align="center"><label class="h6">:</label></td>
                  <td align="left"><label class="h6">Direktur Utama</label></td>
                </tr>
                <tr>
                  <td align="left"><label class="h6">No. Telpn</label></td>
                  <td align="center"><label class="h6">:</label></td>
                  <td align="left"><label class="h6">085739375175</label></td>
                </tr>
                <tr>
                  <td align="left"><label class="h6">Alamat</label></td>
                  <td align="center"><label class="h6">:</label></td>
                  <td align="left"><label class="h6">Dsn. Keceling, Ds. Kemirisewu, Kec. Pandaan, Kab. Pasuruan</label></td>
                </tr>
                <tr>
                  <td colspan="4">&nbsp;</td>
                </tr>
                <tr>
                  <td align="right" colspan="3"><button class="btn btn-warning btn-circle" id="btn-edit-profile"><i class="fa fa-pen" style="font-size: 20px;"></i></button></td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>