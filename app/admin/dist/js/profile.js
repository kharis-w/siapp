var shortcut = document.profile;
jQuery(document).ready(function() {
    // hide panelForm1
    jQuery('#panelForm1').hide();
    // add button
    jQuery('#btn-edit-profile').click(function() {
        jQuery('#bookform_input')[0].reset();
        jQuery('#panelForm1').show(500);
        jQuery('#panelForm2').hide(500);
        $('#id_pgw').prop('readonly', false);
    });
    // cancel button
    jQuery('#btn-cancel').click(function() {
        jQuery('#bookform_input')[0].reset();
        jQuery('#panelForm1').hide(500);
        jQuery('#panelForm2').show(500);
        jQuery('#act').val('');
        jQuery('#next-form').val('');
    });
});

var shortcut = document.bookform_input;

// Tambah pgw
function addprofile() {
    var form                = $('#bookform_input')[0];
    var formData            = new FormData(form);
    var id_pgw            = $('#id_pgw').val();
    var nama_pgw                 = $('#nama_pgw').val();
    var nip_pgw                = $('#nip_pgw').val();
    var pangkat_pgw                = $('#pangkat_pgw').val();
    var jabatan_pgw               = $('#jabatan_pgw').val();
    var unit_kerja_pgw               = $('#unit_kerja_pgw').val();
    var no_telpn_pgw       = $('#no_telpn_pgw').val();
    var alamat_pgw               = $('#alamat_pgw').val();
    var img_pgw              = $('#img_pgw').val();
    var old_password              = $('#old_password').val();
    var password              = $('#password').val();
    var pass              = $('#pass').val();
    var act                 = $('#act').val();
    var id                  = $('#id').val();

    if (shortcut.nama_pgw.value == "") {
        shortcut.nama_pgw.style.borderColor = '#ff3333';
        shortcut.nama_pgw.style.borderWidth = "medium";
        shortcut.nama_pgw.focus();
        return false;
    } else shortcut.nama_pgw.style.borderColor = '#33ff33';
        shortcut.nama_pgw.style.borderWidth = "medium";
    if (shortcut.nip_pgw.value == "") {
        shortcut.nip_pgw.style.borderColor = '#ff3333';
        shortcut.nip_pgw.style.borderWidth = "medium";
        shortcut.nip_pgw.focus();
        return false;
    } else shortcut.nip_pgw.style.borderColor = '#33ff33';
        shortcut.nip_pgw.style.borderWidth = "medium";
    if (shortcut.pangkat_pgw.value == "") {
        shortcut.pangkat_pgw.style.borderColor = '#ff3333';
        shortcut.pangkat_pgw.style.borderWidth = "medium";
        shortcut.pangkat_pgw.focus();
        return false;
    } else shortcut.pangkat_pgw.style.borderColor = '#33ff33';
        shortcut.pangkat_pgw.style.borderWidth = "medium";
    if (shortcut.jabatan_pgw.value == "") {
        shortcut.jabatan_pgw.style.borderColor = '#ff3333';
        shortcut.jabatan_pgw.style.borderWidth = "medium";
        shortcut.jabatan_pgw.focus();
        return false;
    } else shortcut.jabatan_pgw.style.borderColor = '#33ff33';
        shortcut.jabatan_pgw.style.borderWidth = "medium";
    if (shortcut.unit_kerja_pgw.value == "") {
        shortcut.unit_kerja_pgw.style.borderColor = '#ff3333';
        shortcut.unit_kerja_pgw.style.borderWidth = "medium";
        shortcut.unit_kerja_pgw.focus();
        return false;
    } else shortcut.unit_kerja_pgw.style.borderColor = '#33ff33';
        shortcut.unit_kerja_pgw.style.borderWidth = "medium";
    if (shortcut.no_telpn_pgw.value == "") {
        shortcut.no_telpn_pgw.style.borderColor = '#ff3333';
        shortcut.no_telpn_pgw.style.borderWidth = "medium";
        shortcut.no_telpn_pgw.focus();
        return false;
    } else shortcut.no_telpn_pgw.style.borderColor = '#33ff33';
        shortcut.no_telpn_pgw.style.borderWidth = "medium";
    if (shortcut.alamat_pgw.value == "") {
        shortcut.alamat_pgw.style.borderColor = '#ff3333';
        shortcut.alamat_pgw.style.borderWidth = "medium";
        shortcut.alamat_pgw.focus();
        return false;
    } else shortcut.alamat_pgw.style.borderColor = '#33ff33';
        shortcut.alamat_pgw.style.borderWidth = "medium";

    
    $.post("modul/profile.php", {
        act             : act,
        id              : id,
        id_pgw        : id_pgw,
        nama_pgw             : nama_pgw,
        nip_pgw            : nip_pgw,
        pangkat_pgw            : pangkat_pgw,
        jabatan_pgw           : jabatan_pgw,
        unit_kerja_pgw      : unit_kerja_pgw,
        no_telpn_pgw   : no_telpn_pgw,
        alamat_pgw           : alamat_pgw,
        img_pgw          : img_pgw,
        old_password          : old_password,
        password          : password,
        pass          : pass
    }, function(data, status) {
        if (data == '1') {
            location.reload();
        }
    });
}

// Edit pgw
function editData(id) {
    $.post("modul/profile.php", {
        id  : id,
        act : 'profile'
    }, function(data, status) {
        if (status == 'success') {
            var temp = data.split('#');
            jQuery('#panelForm1').show(500);
            jQuery('#panelForm2').hide(500);
            jQuery('#act').val('editprofile');
            jQuery('#id').val(temp[0]);
            $('#id_pgw').val(temp[0]);
            $('#nama_pgw').val(temp[1]);
            $('#nip_pgw').val(temp[2]);
            $('#pangkat_pgw').val(temp[3]);
            $('#jabatan_pgw').val(temp[4]);
            $('#unit_kerja_pgw').val(temp[5]);
            $('#no_telpn_pgw').val(temp[6]);
            $('#alamat_pgw').val(temp[7]);
            $('#img_pgw').val(temp[8]);
            $('#id_pgw').prop('readonly', true);
        }
    });
}


function changepass(){
    $('#display_old_password').css('display','block');
    $('#display_password').css('display','block');
    $('#display_pass').css('display','block');
};