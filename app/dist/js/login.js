 var shortcut = document.bookform;

 function login() {
     var username = $('#username').val();
     var pass = $('#pass').val();

     if (shortcut.username.value == "") {
        shortcut.username.style.borderColor = '#ff3333';
        shortcut.username.style.borderWidth = "medium";
        shortcut.username.focus();
        return false;
    } else shortcut.username.style.borderColor = '#33ff33';
    shortcut.username.style.borderWidth = "medium";

     if (shortcut.pass.value == "") {
        shortcut.pass.style.borderColor = '#ff3333';
        shortcut.pass.style.borderWidth = "medium";
        shortcut.pass.focus();
        return false;
    } else shortcut.pass.style.borderColor = '#33ff33';
    shortcut.pass.style.borderWidth = "medium";

     $.post("modul/login.php", {
         act: 'login_user',
         username: username,
         pass: pass
     }, function(data, status) {
         if (status == 'success') {
             //$('#demo-modal-wo-anim').modal('show');
             if (data == 1) {
                // alert("Login berhasil.");
                 window.location.replace("index.php");
             } else if(data == 3){
                window.location.replace("admin/index.php");
             } else if (data == 404) {
                 swal("Login Gagal !",  "Silahkan Periksa Kembali Username & Password !", "error").then(function() {
                     window.location.replace("login.php");
                 });
             }
         }
     });
 }