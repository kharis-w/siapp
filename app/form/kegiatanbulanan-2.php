<div class="panel panel-default" id="panelForm3" name="panelForm3">
   <div class="row">

   <div class="tile col-md-12">
      <h3 class="tile-title text-center">Form Kegiatan Bulanan</h3>
      <div class="tile-body">
         <form action="#" enctype="multipart/form-data" id="bookform_input" method="post" name="bookform_input">
            <div class="row">
               <div class="form-group col-md-12">
                  <label><font color="red" size="4">*</font> Kegiatan Tahunan</label> <input class="form-control" readonly type="text" id="kegiatan_tahunan" name="kegiatan_tahunan">
               </div>
            </div>
            <div class="row">
               <div class="form-group col-md-12">
                  <label><font color="red" size="4">*</font> Tahun Kegiatan</label> <input class="form-control" readonly type="text" value="<?php echo date('d-m-Y') ?>">
               </div>
            </div>
            <div class="row">
              <div class="form-group col-md-12">
                  <label><font color="red" size="4">*</font> Kegiatan Tugas Jabatan</label> 
                  <textarea class="form-control" rows="2" id="ktj" name="ktj"></textarea>
               </div>
               <div class="form-group col-md-4">
                  <label><font color="red" size="4">*</font> Volume Kegiatan</label> <input class="form-control" type="number">
               </div>
               <div class="form-group col-md-4">
                  <label><font color="red" size="4">*</font> Satuan Hasil</label> 
                  <select class="form-control" id="output" name="output">
                     <option disabled selected value="Pilih Jenis">
                        Pilih Jenis
                     </option>
                     <option value="Dokumen">
                        Dokumen
                     </option>
                     <option value="Berkas">
                        Berkas
                     </option>
                     <option value="Surat">
                        Surat
                     </option>
                     <option value="Kegiatan">
                        Kegiatan
                     </option>
                     <option value="Data">
                        Data
                     </option>
                  </select>
                </div>
               </div>
               <div class="row">
               <div class="form-group col-md-4">
                  <label><font color="red" size="4">*</font> Minimal</label> <input class="form-control" type="text" id="kegiatan_tahunan" name="kegiatan_tahunan">
               </div>
               <div class="form-group col-md-4">
                  <label><font color="red" size="4">*</font> Maksimal</label> <input class="form-control" type="text" id="kegiatan_tahunan" name="kegiatan_tahunan">
               </div>
               <div class="form-group col-md-4">
                  <label><font color="red" size="4">*</font> Rata-rata</label> <input class="form-control" type="text" id="kegiatan_tahunan" name="kegiatan_tahunan">
               </div>
            </div>
            
            <div class="row">
               <div class="form-group col-md-6">
                  <label><font color="red" size="4">*</font> Jumlah Waktu</label> <input class="form-control"type="text" id="kegiatan_tahunan" name="kegiatan_tahunan">
               </div>
               <div class="form-group col-md-6">
                  <label><font color="red" size="4">*</font> Tenaga JFU</label> <input class="form-control"type="text" id="kegiatan_tahunan" name="kegiatan_tahunan">
               </div>
            </div>
            <div align="left" class="form-group col-md-12">
               <input class="form-control" id="act" name="act" type="hidden">
               <input class="form-control" id="id" name="id" type="hidden">
            </div>
            <div align="right" class="form-group col-md-12">
               <button class="btn btn-success btn-circle" onclick="addkegbulanan()" type="button"><i class="fas fa-plus fa-lg"></i></button>
               <button class="btn btn-danger btn-circle" id="btn-cancel2" type="button"><i class="fas fa-times fa-lg"></i></button>
            </div>
         </form>
      </div>
   </div>
</div>
</div>