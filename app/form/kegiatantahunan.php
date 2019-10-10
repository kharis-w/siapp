<div class="col-md-12" id="panelForm1" class="panel panel-default">
   <div class="tile">
      <h3 class="tile-title text-center">Form Kegiatan Tahunan</h3>
      <div class="tile-body">
         <form action="#" id="bookform_input" method="POST" name="bookform_input" enctype="multipart/form-data">
            <div class="row">
               <div class="form-group col-md-12">
                  <label><font color="RED" size="4">*</font> Tahun Kegiatan</label>
                  <input class="form-control" type="text" value="<?php echo date('d-m-Y') ?>" readonly>
               </div>
            </div>
            <div class="row">
               <div class="form-group col-md-6">
                  <label><font color="RED" size="4">*</font> Target Kuantitas</label>
                  <input class="form-control" type="number">
               </div>
               <div class="form-group col-md-6">
                  <label><font color="RED" size="4">*</font> Jenis Kuantitas</label>
                  <select class="form-control" type="text">
                     <option disabled selected>Pilih Jenis Kuantitas</option>
                     <option value="">1</option>
                     <option value="">1</option>
                  </select>
               </div>
            </div>
            <div class="row">
               <div class="form-group col-md-12">
                  <label><font color="RED" size="4">*</font> Target Penyelesaian (Bulan)</label>
                  <select class="form-control" type="text">
                     <option disabled selected>Tentukan Jumlah Bulan</option>
                     <option value="">1</option>
                     <option value="">1</option>
                  </select>
               </div>
            </div>
            <div class="row">
               <div class="form-group col-md-12">
                  <label><font color="RED" size="4">*</font> Deskripsi</label>
                  <textarea class="form-control" type="text" rows="4"></textarea>
               </div>
            </div>
            <div class="form-group col-md-12" align="left">
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