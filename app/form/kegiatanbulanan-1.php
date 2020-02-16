<div class="panel panel-default col-md-8 offset-2" id="panelForm2" name="panelForm2">
   <div class="tile">
      <h3 class="tile-title text-center">Form Kegiatan Bulanan</h3>
      <div class="tile-body">
         <form action="#" enctype="multipart/form-data" id="bookform_select" method="get" name="bookform_select">
            <div class="row">
               <div class="form-group col-md-12">
                  <label><font color="red" size="4">*</font> Pilih Kegiatan Tahunan</label> <select class="form-control" id="select_tahunan">
                     <option disabled selected>
                        Pilih Kegiatan Tahunan
                     </option>
                     <?php
                     $tahunsekarang = date(Y);
                     $nama_pgw = $_SESSION['nama_user'];
                     $qry   = mysqli_query($conn, "SELECT * FROM m_pgw WHERE nama_pgw='$nama_pgw' AND tahun='$tahunsekarang'");
                       $check = mysqli_num_rows($qry);
                       if ($check > 0) {
                         while ($data = mysqli_fetch_array($qry)) {
                           $id_pgw       = $data['id_pgw'];
                        }
                     }

                       $qry   = mysqli_query($conn, "SELECT * FROM tahunan WHERE id_pgw='$id_pgw' AND tahun='$tahunsekarang'");
                       $check = mysqli_num_rows($qry);
                       if ($check > 0) {
                         while ($data = mysqli_fetch_array($qry)) {
                           $ktj       = $data['ktj'];
                           ?>
                     <option value="<?php echo $ktj; ?>">
                        <?php echo $ktj; ?>
                     </option>
                     <?php
                }
              }
              ?>
                  </select>
               </div>
            </div>
            <div align="right" class="form-group col-md-12">
               <button id="btn-add-kegiatan-bulanan" class="btn btn-success btn-circle"><i class="fas fa-plus fa-lg" style="font-size: 20px;"></i></button>
               <button class="btn btn-danger btn-circle" id="btn-cancel1" type="button"><i class="fas fa-times fa-lg"></i></button>
            </div>
         </form>
      </div>
   </div>
</div>