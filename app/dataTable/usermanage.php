<div class="panel panel-default" id="panelForm2">
  <div class="tile">
    <h3 class="tile-title text-center">Data Pegawai</h3>
    <div class="tile-body">
      <div class="table-responsive">
        <table border="0" cellspacing="0" class="table table-hover table-bordered" id="dataTable" width="100%">
          <thead>
            <tr>
              <th>No.</th>
              <th>Nama</th>
              <th>Username</th>
              <th>Category</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $qry   = mysqli_query($conn, "SELECT * FROM m_user ORDER BY id_user DESC");
              $check = mysqli_num_rows($qry);
              $no    = 1;
              if ($check > 0) {
                while ($data = mysqli_fetch_array($qry)) {
                  $id_user       = $data['id_user'];
                  $nama_user       = $data['nama_user'];
                  $username       = $data['username'];
                  $category       = $data['category'];
                  ?>
            <tr id="row<?php echo $no; ?>">
              <td><?php echo $no; ?></td>
              <td><?php echo $nama_user; ?></td>
              <td><?php echo $username; ?></td>
              <td><?php echo $category; ?></td>
              <td>
                <button class="btn btn-warning btn-circle" title="Edit" onclick="editData('<?php echo $data['id_user'];?>')"><i class="fas fa-pen fa-lg"></i></button>

                <button class="btn btn-danger btn-circle" title="Delete"onclick="delData('<?php echo $data['id_user']; ?>','<?php echo $no;?>')"><i class="fas fa-trash fa-lg"></i></button>
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