<div class="col-md-10 offset-1" id="panelForm1" class="panel panel-default">
   <div class="tile">
      <h3 class="tile-title text-center">Form Kegiatan Tambahan</h3>
      <div class="tile-body">
         <form action="#" id="bookform_input" method="POST" name="bookform_input" enctype="multipart/form-data">
            <div class="row">
               <div class="form-group col-md-12">
                  <label><font color="RED" size="4">*</font> Tanggal Kegiatan</label>
                  <input class="form-control" type="text" value="<?php echo date('d-m-Y') ?>" readonly>
               </div>
            </div>
            <div class="row">
               <div class="form-group col-md-12">
                  <label><font color="RED" size="4">*</font> Jenis Kegiatan</label>
                  <textarea class="form-control" rows="4"></textarea>
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