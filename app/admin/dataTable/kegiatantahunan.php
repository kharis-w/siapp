<div class="panel panel-default" id="panelForm2">
  <div class="tile">
    <h3 class="tile-title text-center">Data Kegiatan Tahunan </h3>
    <div class="tile-body">
      <div class="table-responsive">
        <table border="0" cellspacing="0" class="table table-hover table-bordered" id="dataTable" width="100%">
          <thead>
            <tr>
              <th>No.</th>
              <th>Tahun</th>
              <th>Kegiatan Tugas Jabatan</th>
              <th>Target Kuantitas</th>
              <th>Breakdown</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
          <?php 
          //$sql  = mysqli_query($conn, "SELECT * FROM tahunan WHERE id_pgw='".$_SESSION['id_user']."' ORDER BY id_tktj ASC "); 
          $sql  = mysqli_query($conn, "SELECT * FROM tahunan ORDER BY id_tktj ASC "); 
          $no   = 1; 
          while($data = mysqli_fetch_array($sql)){  
          ?>
            <tr id="row<?php echo $no; ?>">
              <td><?=$no; ?></td>
              <td><?=$data['tahun']; ?></td>
              <td><?=$data['ktj']; ?></td>
              <td><?=$data['quantity']; ?></td>
              <td><?=$data['waktu']; ?> Bulan</td>
              <td class="action">
                <button class="btn btn-info btn-circle"><i class="fas fa-info fa-lg"></i></button>
                <button class="btn btn-warning btn-circle" onclick="editdata('<?php echo $data['id_tktj']; ?>')"><i class="fas fa-pen fa-lg"></i></button>
                <button class="btn btn-danger btn-circle" onclick="deletedata('<?php echo $data['id_tktj']; ?>', '<?php echo $no;?>')"><i class="fas fa-trash fa-lg"></i></button>
              </td>
            </tr>
          <?php $no++; } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>