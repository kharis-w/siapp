<main class="app-content">
  <div class="app-title">
        <div>
          <h1><i class="fa fa-user"></i> Backup And Restore</h1>
        </div>
      </div>
      <div class="row">
    <div class="col-md-6 offset-3" id="panelForm1" class="panel panel-default">
      <div class="tile">
         <div class="tile-body">
            <form action="backupandrestore.php" enctype="multipart/form-data" id="bookform_input" method="post" name="bookform" autocomplete="off">
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
                <div class="col-sm-4 offset-2" style="text-align: center; vertical-align: middle;">
                  <input type="file" name="restore" id="restore" onclick="mysqli_import_sql()" accept=".xml,.csv,.sql">
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