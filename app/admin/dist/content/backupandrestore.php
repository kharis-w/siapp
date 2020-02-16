<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="fas fa-undo-alt fa-lg"></i> Backup And Restore</h1>
    </div>
  </div>
  <div class="row">
    <div class="panel panel-default col-sm-12 col-md-8 offset-md-2" id="panelForm1">
      <div class="tile">
        <div class="tile-body">
          <form action="backupandrestore.php" autocomplete="off" enctype="multipart/form-data" id="bookform_input" method="post" name="bookform">
            <div class="row">
              <div class="col-sm-12">
                <span>Here you can Backup your current data or restore your data with a saved data file.</span><br>
                <span>Click here to save a data file to your computer:</span>
              </div>
              <div class="col-sm-12">
                <button class="btn btn-primary" onclick="backup_database()">Backup</button>
              </div>
              <div class="col-sm-12">
                <hr class="sidebar-divider d-none d-md-block">
              </div>
              <div class="col-sm-4 offset-md-2" style="text-align: center; vertical-align: middle;">
                <input accept=".xml,.csv,.sql" id="restore" name="restore" onclick="mysqli_import_sql()" type="file">
              </div>
              <div class="col-sm-4" style="text-align: center; vertical-align: middle;">
                <button class="btn btn-success">Restore</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</main>