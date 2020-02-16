<div class="panel panel-default" id="panelForm2">
  <div class="tile">
    <h3 class="tile-title text-center">Data Pegawai</h3>
    <div class="tile-body">
      <div class="table-responsive">
        <table cellspacing="0" class="table table-hover table-bordered" id="dataTable" width="100%">
          <thead>
            <tr>
              <th>No.</th>
              <th>Nama</th>
              <th>NIP</th>
              <th>Pangkat/Golongan</th>
              <th>Jabatan</th>
              <th>Unit Kerja</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $qry   = mysqli_query($conn, "SELECT * FROM m_pgw ORDER BY id_pgw DESC");
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
                  ?>
            <tr id="row<?php echo $no; ?>">
              <td><?php echo $no; ?></td>
              <td><?php echo $nama_pgw; ?></td>
              <td><?php echo $nip_pgw; ?></td>
              <td><?php echo $pangkat_pgw; ?></td>
              <td><?php echo $jabatan_pgw; ?></td>
              <td><?php echo $unit_kerja_pgw; ?></td>
              <td>
                <button class="btn btn-info btn-circle"><i class="fas fa-info fa-lg"></i></button>
                <button class="btn btn-warning btn-circle" title="Edit" onclick="editData('<?php echo $data['id_pgw'];?>')"><i class="fas fa-pen fa-lg"></i></button>
                <button class="btn btn-danger btn-circle" title="Delete"onclick="delData('<?php echo $data['id_pgw']; ?>','<?php echo $no;?>')"><i class="fas fa-trash fa-lg"></i></button>
              </td>
            </tr>
            <?php
                  $no++;
                }
              }
              ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>