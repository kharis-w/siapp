<aside class="app-sidebar">
  <div class="app-sidebar__user">
    <img alt="User Image" class="app-sidebar__user-avatar" src="../../assets/img/userdefault.png" width="50">
    <div>
      <table>
        <tr>
          <td class="app-sidebar__user-name" style="max-width: 140px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;"><?php echo $_SESSION['nama_user'] ?></td>
        </tr>
        <tr>
          <td class="app-sidebar__user-designation" style="max-width: 140px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;"><?php echo $_SESSION['category'] ?></td>
        </tr>
      </table>
    </div>
  </div>
  <ul class="app-menu">
    <li>
      <a class="app-menu__item" href="index.php"><i class="app-menu__icon fa fa-home fa-lg"></i><span class="app-menu__label">&nbsp;Dashboard</span></a>
    </li>
    <li class="treeview">
      <a class="app-menu__item" data-toggle="treeview" href="#"><i class="app-menu__icon fa fa-walking fa-lg"></i><span class="app-menu__label">&nbsp;Kegiatan</span><i class="treeview-indicator fa fa-angle-right"></i></a>
      <ul class="treeview-menu">
        <li>
          <a class="treeview-item" href="kegiatantahunan.php"><i class="icon fa fa-circle-notch fa-sm"></i> Tahunan</a>
        </li>
        <li>
          <a class="treeview-item" href="kegiatanbulanan.php"><i class="icon fa fa-circle-notch fa-sm"></i>Bulanan</a>
        </li>
        <li>
          <a class="treeview-item" href="kegiatanharian.php"><i class="icon fa fa-circle-notch fa-sm"></i>Harian</a>
        </li>
      </ul>
    </li>
    <li class="treeview">
      <a class="app-menu__item" data-toggle="treeview" href="#"><i class="app-menu__icon fa fa-file fa-lg"></i><span class="app-menu__label">&nbsp;Laporan</span><i class="treeview-indicator fa fa-angle-right"></i></a>
      <ul class="treeview-menu">
        <li>
          <a class="treeview-item" href="#"><i class="icon fa fa-circle-notch fa-sm"></i> Laporan Tahunan</a>
        </li>
        <li>
          <a class="treeview-item" href="#"><i class="icon fa fa-circle-notch fa-sm"></i>Laporan Bulanan</a>
        </li>
        <li>
          <a class="treeview-item" href="#"><i class="icon fa fa-circle-notch fa-sm"></i>Laporan Jumlah Kegiatan</a>
        </li>
      </ul>
    </li>
    <li>
      <a class="app-menu__item" href="#"><i class="app-menu__icon fa fa-book fa-lg"></i><span class="app-menu__label">&nbsp;Panduan Pegawai</span></a>
    </li>
    <li style="list-style: none; display: inline">
      <hr style="background-color: white; width: 80%;">
    <li class="treeview">
      <a class="app-menu__item" data-toggle="treeview" href="#"><i class="app-menu__icon fa fa-check fa-lg"></i><span class="app-menu__label">&nbsp;Persetujuan</span><i class="treeview-indicator fa fa-angle-right"></i></a>
      <ul class="treeview-menu">
        <li>
          <a class="treeview-item" href="#"><i class="icon fa fa-circle-notch fa-sm"></i> Kegiatan Tahunan</a>
        </li>
        <li>
          <a class="treeview-item" href="#"><i class="icon fa fa-circle-notch fa-sm"></i> Kegiatan Bulanan</a>
        </li>
      </ul>
    </li>
      <hr style="background-color: white; width: 80%;">
    </li>
    <li>
      <a class="app-menu__item" href="datapegawai.php"><i class="app-menu__icon fa fa-users fa-lg"></i><span class="app-menu__label">&nbsp;Data Pegawai</span></a>
    </li>
    <li>
      <a class="app-menu__item" href="usermanage.php"><i class="app-menu__icon fa fa-cogs fa-lg"></i><span class="app-menu__label">&nbsp;User Management</span></a>
    </li>
    <li>
      <a class="app-menu__item" href="backupandrestore.php"><i class="app-menu__icon fa fa-undo-alt fa-lg"></i><span class="app-menu__label">&nbsp;Backup And Restore</span></a>
    </li>
  </ul>
</aside>