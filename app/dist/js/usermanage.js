var shortcut = document.usermanage;

jQuery(document).ready(function() {
    // hide panelForm1
    jQuery('#panelForm1').hide();
    // add button
    jQuery('#btn-add-user').click(function() {
        jQuery('#bookform_input')[0].reset();
        jQuery('#panelForm2').hide(500);
        jQuery('#panelForm1').show(500);
        jQuery('#act').val('addusermanage');
        $('#id_user').prop('readonly', false);
    });
    // cancel button
    jQuery('#btn-cancel1').click(function() {
        jQuery('#bookform_input')[0].reset();
        jQuery('#panelForm1').hide(500);
        jQuery('#act').val('');
        jQuery('#next-form').val('');
    });
});

var shortcut = document.bookform_input;

// Tambah siswa
function addusermanage() {
    var form                = $('#bookform_input')[0];
    var formData            = new FormData(form);
    var id_user            = $('#id_user').val();
    var nama_user                 = $('#nama_user').val();
    var username                = $('#username').val();
    var category                = $('#category').val();
    var password                = $('#password').val();
    var pass                = $('#pass').val();
    var act                 = $('#act').val();
    var id                  = $('#id').val();

    if (shortcut.nama_user.value == "") {
        shortcut.nama_user.style.borderColor = '#ff3333';
        shortcut.nama_user.style.borderWidth = "medium";
        shortcut.nama_user.focus();
        return false;
    } else shortcut.nama_user.style.borderColor = '#33ff33';
    shortcut.nama_user.style.borderWidth = "medium";
    if (shortcut.username.value == "") {
        shortcut.username.style.borderColor = '#ff3333';
        shortcut.username.style.borderWidth = "medium";
        shortcut.username.focus();
        return false;
    } else shortcut.username.style.borderColor = '#33ff33';
    shortcut.username.style.borderWidth = "medium";
    if (shortcut.category.value == "") {
        shortcut.category.style.borderColor = '#ff3333';
        shortcut.category.style.borderWidth = "medium";
        shortcut.category.focus();
        return false;
    } else shortcut.category.style.borderColor = '#33ff33';
    shortcut.category.style.borderWidth = "medium";
    if (shortcut.password.value != shortcut.pass.value) {
        shortcut.password.style.borderColor = '#ff3333';
        shortcut.pass.style.borderColor = '#ff3333';
        shortcut.password.style.borderWidth = "medium";
        shortcut.pass.style.borderWidth = "medium";
        shortcut.password.focus();
        return false;
    } else shortcut.password.style.borderColor = '#33ff33';
    shortcut.pass.style.borderColor = '#33ff33';
    shortcut.password.style.borderWidth = "medium";
    shortcut.pass.style.borderWidth = "medium";
    
    $.post("modul/usermanage.php", {
        act             : act,
        id              : id,
        id_user        : id_user,
        nama_user             : nama_user,
        username            : username,
        category    : category,
        pass            : pass,
        password : password
    }, function(data, status) {
        if (data == '1') {
            location.reload();
        }
    });
}

// Edit siswa
function editData(id) {
    $.post("modul/usermanage.php", {
        id  : id,
        act : 'usermanage'
    }, function(data, status) {
        if (status == 'success') {
            var temp = data.split('#');
            jQuery('#panelForm1').show(500);
            jQuery('#act').val('editusermanage');
            jQuery('#id').val(temp[0]);
            $('#id_user').val(temp[0]);
            $('#nama_user').val(temp[1]);
            $('#username').val(temp[2]);
            $('#category').val(temp[3]);
            $('#id_user').prop('readonly', true);
        }
    });
}

// Hapus siswa
function delData(id, no) {
    swal({
        title       : "Apakah anda yakin ?",
        text        : "File yang dihapus tidak dapat dikembalikan !",
        icon        : "warning",
        buttons     : ["Batal", "Hapus"],
        dangerMode  : true,
    }).then((isConfirm) => {
        if (isConfirm) {
            $.post("modul/usermanage.php", {
                act: 'delusermanage',
                id: id
            }, function(data, status) {
                if (status == 'success') {
                    swal("Data berhasil dihapus!", {
                        icon: "success",
                    }).then(function() {
                        location.reload();
                    });
                    $('#row' + no).remove();
                }
            });
        }
    });
}