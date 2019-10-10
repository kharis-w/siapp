<main class="app-content">
  <div class="app-title">
        <div>
          <h1><i class="fa fa-user"></i> Profile</h1>
        </div>
      </div>
      <div class="row">

    <div class="col-md-6 offset-3md-" id="panelForm1" class="panel panel-default">
      <div class="tile">
         <div class="tile-body">
            <form action="#" id="bookform_input" method="POST" name="bookform_input" enctype="multipart/form-data">
              <div class="row">
                 <div class="form-group col-md-12">
                    <label><font color="RED" size="4">*</font> Nama</label>
                    <input class="form-control" type="text">
                 </div>
              </div>
              <div class="row">
                 <div class="form-group col-md-12">
                    <label><font color="RED" size="4">*</font> NIP</label>
                    <input class="form-control" type="text">
                 </div>
              </div>
              <div class="row">
                 <div class="form-group col-md-12">
                    <label><font color="RED" size="4">*</font> Jabatan</label>
                    <input class="form-control" type="text">
                 </div>
              </div>
              <div class="row">
                 <div class="form-group col-md-12">
                    <label><font color="RED" size="4">*</font> No. Telp</label>
                    <input class="form-control" type="text">
                 </div>
               </div>
               <div class="row">
               <div class="form-group col-md-12">
                  <label><font color="RED" size="4">*</font> Alamat</label>
                  <input class="form-control" type="text">
               </div>
               </div>
               <div class="row">
                 <div class="form-group col-md-12" id="gambar_inbx_display" name="gambar_inbx_display">
                    <img src="../assets/img/user-default.jpg" id="gambar_ksm_ada" name="gambar_ksm_ada" width="150" height="150" style="border-radius: 100%;">
                    <img src="../assets/img/no-image.png" id="gambar_ksm_kosong" name="gambar_ksm_kosong" width="150" height="150">
                 </div>
                 <div class="form-group col-md-12">
                    <input class="form-control-file" id="img_ksm" type="file" name="img_ksm" aria-describedby="fileHelp"><small class="form-text text-muted" id="fileHelp">Choose File</small>
                 </div>
               </div>
               <div class="form-group col-md-8"  align="left">
                <input class="form-control" id="act" name="act" type="hidden">
                <input class="form-control" id="id" name="id" type="hidden">
               </div>
               <div class="form-group col-md-12" align="right">
                  <button class="btn btn-info btn-circle" type="button" onclick=""><i class="fa fa-fw fa-lg fa-save" style="font-size: 20px;"></i></button>
                  <button class="btn btn-warning btn-circle" type="button" id="btn-cancel">
                    <i class="fa fa-fw fa-lg fa-times" style="font-size: 20px;"></i></button>
               </div>
            </form>
         </div>
      </div>
   </div>


   <div class="col-md-8 offset-md-2" id="panelForm2" class="panel panel-default">
      <div class="tile">
         <div class="tile-body">
          <div class="row">
            <div class="col-md-12">
            <table border="0" width="100%">
            <tr>
              <td colspan="4"><center><img src="../assets/img/user-default.jpg" width="250" lengt="250" style="border-radius: 100%"></center></td>
            </tr>
            <tr>
              <td colspan="4">&nbsp;</td>
            </tr>
            <tr>
              <td width="25%" align="left"><label class="h6">Nama</label></td>
              <td width="5%" align="center"><label class="h6">:</label></td>
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
              <td colspan="3" align="right"><button class="btn btn-warning btn-circle" id="btn-edit-profile"><i class="fa fa-pen" style="font-size: 20px;"></i></button></td>
            </tr>
          </table>
            </div>
          </div>
         </div>
      </div>
   </div>
   </div>
</main>