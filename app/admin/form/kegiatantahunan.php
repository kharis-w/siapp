<div class="panel panel-default" id="panelForm1">
   <div class="tile">
      <h3 class="tile-title text-center">Form Kegiatan Tahunan</h3>
      <div class="tile-body">
         <form action="kegiatantahunan.php" enctype="multipart/form-data" id="bookform_input" method="post" name="bookform_input">
            <?php
              $qry   = mysqli_query($conn, "SELECT * FROM m_pgw WHERE nama_pgw='$_SESSION[nama_user]'");
              $check = mysqli_num_rows($qry);
              $no    = 1;
              if ($check > 0) {
                while ($data = mysqli_fetch_array($qry)) {
                  $id_pgw       = $data['id_pgw'];
                  $nama_pgw       = $data['nama_pgw'];
                  $nip_pgw       = $data['nip_pgw'];
                  $pangkat_pgw       = $data['pangkat_pgw'];
                  $jabatan_pgw       = $data['jabatan_pgw'];
                  $unit_kerja_pgw       = $data['unit_kerja_pgw'];
                  $no_telpn_pgw       = $data['no_telpn_pgw'];
                  $alamat_pgw       = $data['alamat_pgw'];
                  $img_pgw       = $data['img_pgw'];
               }
            }
            ?>
            <div class="row">
               <div class="form-group col-md-2">
                  <label><font color="red" size="4">*</font> Nama</label> <input class="form-control" readonly type="text" value="<?php echo $nama_pgw; ?>">
               </div>
               <div class="form-group col-md-2">
                  <label><font color="red" size="4">*</font> NIP</label> <input class="form-control" readonly type="text" value="<?php echo $nip_pgw; ?>">
               </div>
               <div class="form-group col-md-2">
                  <label><font color="red" size="4">*</font> Pangkat/Gol. Ruang</label> <input class="form-control" readonly type="text" value="<?php echo $pangkat_pgw; ?>">
               </div>
               <div class="form-group col-md-2">
                  <label><font color="red" size="4">*</font> Jabatan</label> <input class="form-control" readonly type="text" value="<?php echo $jabatan_pgw; ?>">
               </div>
               <div class="form-group col-md-2">
                  <label><font color="red" size="4">*</font> Unit Jabatan</label> <input class="form-control" readonly type="text" value="<?php echo $unit_kerja_pgw; ?>">
               </div>
               <div class="form-group col-md-2">
                  <label><font color="red" size="4">*</font> Tahun Kegiatan</label> 
                  <input class="form-control" id="thn_keg" name="thn_keg" type="text" value="<?php echo date('Y') ?>">
               </div>
            </div>
            <div class="row">
               <div class="form-group col-md-12">
                  <label><font color="red" size="4">*</font> Kegiatan Tugas Jabatan</label> 
                  <textarea class="form-control" rows="2" id="ktj" name="ktj"></textarea>
               </div>
               <div class="form-group col-md-2 offset-md-1">
                  <label><font color="red" size="4">*</font> AK</label> 
                  <input class="form-control" type="number" id="ak" name="ak" value="0">
               </div>
               <div class="form-group col-md-2">
                  <label><font color="red" size="4">*</font> Kuantitas</label> 
                  <input class="form-control" type="number" id="kuantitas" name="kuantitas" value="1">
               </div>
               <div class="form-group col-md-2">
                  <label><font color="red" size="4">*</font> Output</label> 
                  <select class="form-control" id="output" name="output">
                     <option disabled selected value="Pilih Jenis">
                        Pilih Jenis
                     </option>
                     <option value="dokumen">
                        dokumen
                     </option>
                  </select>
               </div>
               <div class="form-group col-md-2">
                  <label><font color="red" size="4">*</font> Kual</label> 
                  <input class="form-control" type="number" id="kual" name="kual" value="100">
               </div>
               <div class="form-group col-md-2">
                  <label><font color="red" size="4">*</font> Waktu</label> 
                  <select class="form-control" id="waktu" name="waktu">
                     <option disabled selected>
                        Pilih Waktu
                     </option>
                     <?php for($i=1; $i <=12; $i++){  ?>
                        <option value="<?=$i; ?>"><?=$i;?> Bulan</option>
                     <?php } ?>
                  </select>
               </div>
            </div>
            <div align="left" class="form-group col-md-12">
               <input class="form-control" id="act" name="act" type="hidden">
               <input class="form-control" id="id_pgw" name="id_pgw" type="hidden" value="<?=$id_pgw; ?>">
               <input class="form-control" id="id" name="id" type="hidden">
            </div>
            <div align="right" class="form-group col-md-12">
               <button class="btn btn-success btn-circle" onclick="addkegtahunan()" type="button"><i class="fas fa-save fa-lg"></i></button>
               <button class="btn btn-danger btn-circle" id="btn-cancel" type="button"><i class="fas fa-times fa-lg"></i></button>
            </div>
         </form>
      </div>
   </div>
</div>