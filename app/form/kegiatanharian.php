<div class="panel panel-default" id="panelForm1">
   <div class="tile">
      <h3 class="tile-title text-center">Form Kegiatan Tahunan</h3>
      <div class="tile-body">
         <form action="#" enctype="multipart/form-data" id="bookform_input" method="post" name="bookform_input">
            <div class="row">
               <div class="form-group col-md-12">
                  <label><font color="red" size="4">*</font> Tahun Kegiatan</label> <input class="form-control" readonly type="text" value="<?php echo date('d-m-Y') ?>">
               </div>
            </div>
            <div class="row">
               <div class="form-group col-md-6">
                  <label><font color="red" size="4">*</font> Target Kuantitas</label> <input class="form-control" type="number">
               </div>
               <div class="form-group col-md-6">
                  <label><font color="red" size="4">*</font> Jenis Kuantitas</label> <select class="form-control">
                     <option disabled selected>
                        Pilih Jenis Kuantitas
                     </option>
                     <option value="">
                        1
                     </option>
                     <option value="">
                        1
                     </option>
                  </select>
               </div>
            </div>
            <div class="row">
               <div class="form-group col-md-12">
                  <label><font color="red" size="4">*</font> Target Penyelesaian (Bulan)</label> <select class="form-control">
                     <option disabled selected>
                        Tentukan Jumlah Bulan
                     </option>
                     <option value="">
                        1
                     </option>
                     <option value="">
                        1
                     </option>
                  </select>
               </div>
            </div>
            <div class="row">
               <div class="form-group col-md-12">
                  <label><font color="red" size="4">*</font> Deskripsi</label> 
                  <textarea class="form-control" rows="4"></textarea>
               </div>
            </div>
            <div align="left" class="form-group col-md-12">
               <input class="form-control" id="act" name="act" type="hidden">
               <input class="form-control" id="id" name="id" type="hidden">
            </div>
            <div align="right" class="form-group col-md-12">
               <button class="btn btn-info btn-circle" onclick="" type="button"><i class="fas fa-save fa-lg"></i></button>
               <button class="btn btn-warning btn-circle" id="btn-cancel" type="button"><i class="fas fa-times fa-lg"></i></button>
            </div>
         </form>
      </div>
   </div>
</div>