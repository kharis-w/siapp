<main class="app-content">
  <div class="app-title">
        <div>
          <h1><i class="fa fa-user"></i> Profile</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-user fa-lg"></i></li>
          <li class="breadcrumb-item active"><a href="#">Profile</a></li>
        </ul>
      </div>
   <div class="col-md-12" id="panelForm" class="panel panel-default">
      <div class="tile">
         <div class="tile-body">
            <form action="surat-masuk.php" class="row" id="bookform" method="POST" name="bookform" enctype="multipart/form-data">
               <div class="form-group col-md-4">
                  <label><font color="RED" size="4">*</font> Nama</label>
                  <input class="form-control" type="text">
               </div>
               <div class="form-group col-md-4">
                  <label><font color="RED" size="4">*</font> NIP</label>
                  <input class="form-control" type="text">
               </div>
               <div class="form-group col-md-4">
                  <label><font color="RED" size="4">*</font> Jabatan</label>
                  <input class="form-control" type="text">
               </div>
               <div class="form-group col-md-4">
                  <label><font color="RED" size="4">*</font> Tempat Lahir</label>
                  <input class="form-control" type="text">
               </div>
               <div class="form-group col-md-4">
                  <label><font color="RED" size="4">*</font> Tanggal Lahir</label>
                  <input class="form-control" type="text">
               </div>
               <div class="form-group col-md-4">
                  <label><font color="RED" size="4">*</font> Jenis Kelamin</label>
                  <input class="form-control" type="text">
               </div>
               <div class="form-group col-md-6">
                  <label><font color="RED" size="4">*</font> No. Telp</label>
                  <input class="form-control" type="text">
               </div>
               <div class="form-group col-md-6">
                  <label><font color="RED" size="4">*</font> Alamat</label>
                  <input class="form-control" type="text">
               </div>
               <div class="form-group col-md-12" id="gambar_inbx_display" name="gambar_inbx_display">
                  <img src="assets/uploads/<?php echo $data['img_ksm'];?>" style="display: none;" id="gambar_ksm_ada" name="gambar_ksm_ada" width="100" lengt="100">
                  <img src="../assets/img/no-image.png" id="gambar_ksm_kosong" name="gambar_ksm_kosong" width="100" lengt="100">
               </div>
               <div class="form-group col-md-12">
                  <input class="form-control-file" id="img_ksm" type="file" name="img_ksm" aria-describedby="fileHelp"><small class="form-text text-muted" id="fileHelp">Choose File</small>
               </div>
               <div class="form-group col-md-8" align="left">
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
</main>