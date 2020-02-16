<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="fas fa-user fa-lg"></i> Profile</h1>
    </div>
  </div>
  <div class="row">
    <div class="panel panel-default col-md-8 offset-2" id="panelForm2">
      <div class="tile">
        <div class="tile-body">
          <div class="row">
            <div class="col-md-12">
              <table border="0" width="100%">
                <tr>
                  <td colspan="4">
                    <center>
                      <img src="../assets/img/userdefault.png" style="border-radius: 100%" width="250">
                    </center>
                  </td>
                </tr>
                <tr>
                  <td colspan="4">&nbsp;</td>
                </tr>
                <?php
                $qry   = mysqli_query($conn, "SELECT * FROM m_pgw WHERE id_pgw='" . $_SESSION['id_pgw']  . "'");
                $data  = mysqli_fetch_array($qry); 
                ?>
                <tr>
                  <td align="left" width="25%"><label class="h6">Nama</label></td>
                  <td align="center" width="5%"><label class="h6">:</label></td>
                  <td align="left"><label class="h6"><?php echo $data['nama_pgw'] ?></label></td>
                </tr>
                <tr>
                  <td align="left"><label class="h6">NIP</label></td>
                  <td align="center"><label class="h6">:</label></td>
                  <td align="left"><label class="h6"><?php echo $data['nip_pgw']; ?></label></td>
                </tr>
                <tr>
                  <td align="left"><label class="h6">Pangkat/Gol. Ruang</label></td>
                  <td align="center"><label class="h6">:</label></td>
                  <td align="left"><label class="h6"><?php echo $data['pangkat_pgw']; ?></label></td>
                </tr>
                <tr>
                  <td align="left"><label class="h6">Jabatan</label></td>
                  <td align="center"><label class="h6">:</label></td>
                  <td align="left"><label class="h6"><?php echo $data['jabatan_pgw'];  ?></label></td>
                </tr>
                <tr>
                  <td align="left"><label class="h6">Unit Kerja</label></td>
                  <td align="center"><label class="h6">:</label></td>
                  <td align="left"><label class="h6"><?php echo $data['unit_kerja_pgw']; ?></label></td>
                </tr>
                <tr>
                  <td align="left"><label class="h6">No. Telpn</label></td>
                  <td align="center"><label class="h6">:</label></td>
                  <td align="left"><label class="h6"><?php echo $data['no_telpn_pgw']; ?></label></td>
                </tr>
                <tr>
                  <td align="left"><label class="h6">Alamat</label></td>
                  <td align="center"><label class="h6">:</label></td>
                  <td align="left"><label class="h6"><?php echo $data['alamat_pgw']; ?></label></td>
                </tr>
                <tr>
                  <td colspan="4">&nbsp;</td>
                </tr>
                <tr>
                  <td align="right" colspan="3"><button class="btn btn-warning btn-circle" title="Edit" onclick="editData('<?php echo $data['id_pgw'];?>')" id="btn-edit-profile" name="btn-edit-profile"><i class="fas fa-pen fa-lg"></i></button></td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include 'form/profile.php'; ?>
  </div>
</main>