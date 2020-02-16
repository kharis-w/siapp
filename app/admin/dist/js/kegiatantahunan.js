var shortcut = document.kegiatantahunan;
jQuery(document).ready(function() {
    // hide panelForm1
    jQuery('#panelForm1').hide();
    // add button
    jQuery('#btn-add-kegiatan-tahunan').click(function() {
        jQuery('#bookform_input')[0].reset();
        jQuery('#panelForm1').show(500);
        jQuery('#panelForm2').hide(500);
        jQuery('#act').val('addkegtahunan');
        $('#id_item').prop('readonly', false);
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
function addkegtahunan(){
    var form                = $('#bookform_input')[0];
    var formData            = new FormData(form);
    var id                  = $('#id').val();
    var id_item             = $('#id_item').val();
    var id_pgw              = $('#id_pgw').val();  
    var act                 = $('#act').val();
    var waktu               = $('#waktu').val(); 
    var kual                = $('#kual').val(); 
    var output              = $('#output').val(); 
    var kuantitas           = $('#kuantitas').val();
    var ak                  = $('#ak').val();
    var ktj                 = $('#ktj').val();
    var thn_keg             = $('#thn_keg').val(); 

    if(shortcut.ktj.value == ""){
        shortcut.ktj.style.borderColor = '#ff3333';
        shortcut.ktj.style.borderWidth = "medium";
        shortcut.ktj.focus();
        return false;
    } else shortcut.ktj.style.borderColor = '#33ff33';
        shortcut.ktj.style.borderWidth = "medium";

    if(shortcut.ak.value == ""){
        shortcut.ak.style.borderColor = '#ff3333';
        shortcut.ak.style.borderWidth = "medium";
        shortcut.ak.focus();
        return false;
    } else shortcut.ak.style.borderColor = '#33ff33';
        shortcut.ak.style.borderWidth = "medium";

    if(shortcut.kuantitas.value == ""){
        shortcut.kuantitas.style.borderColor = '#ff3333';
        shortcut.kuantitas.style.borderWidth = "medium";
        shortcut.kuantitas.focus();
        return false;
    } else shortcut.kuantitas.style.borderColor = '#33ff33';
        shortcut.kuantitas.style.borderWidth = "medium";

    if(shortcut.output.value == "" || shortcut.output.value == "Pilih Jenis"){
        shortcut.output.style.borderColor = '#ff3333';
        shortcut.output.style.borderWidth = "medium";
        shortcut.output.focus();
        return false;
    } else shortcut.output.style.borderColor = '#33ff33';
        shortcut.output.style.borderWidth = "medium";
    
    if(shortcut.kual.value == ""){
        shortcut.kual.style.borderColor = '#ff3333';
        shortcut.kual.style.borderWidth = "medium";
        shortcut.kual.focus();
        return false;
    } else shortcut.kual.style.borderColor = '#33ff33';
        shortcut.kual.style.borderWidth = "medium";

    if(shortcut.waktu.value == ""){
        shortcut.waktu.style.borderColor = '#ff3333';
        shortcut.waktu.style.borderWidth = "medium";
        shortcut.waktu.focus();
        return false;
    } else shortcut.waktu.style.borderColor = '#33ff33';
        shortcut.waktu.style.borderWidth = "medium";

    $.post("modul/kegiatantahunan.php", {
        act             : act,
        id              : id, 
        id_item         : id_item,
        waktu           : waktu, 
        kual            : kual, 
        output          : output, 
        kuantitas       : kuantitas, 
        ak              : ak,
        ktj             : ktj,
        thn_keg         : thn_keg
    }, function(data){
        if(data == '1'){
            swal("Berhasil !", "", "success").then(function() {
                location.reload(); 
            });
        } else {
            swal("Gagal !", "", "error").then(function() {
                location.reload(); 
            }); 
        }
    })   
}

function editdata(id){
    $.post("modul/kegiatantahunan.php", {
        id      : id, 
        act     : 'datakegtahunan'
    }, function(data, status){
        if(status == 'success'){
            var temp = data.split('#');
            jQuery('#panelForm1').show(500);
            jQuery('#panelForm2').hide(500);
            jQuery('#act').val('editkegtahunan');
            jQuery('#id').val(temp[0]);
            $('#id_item').val(temp[0]);

            $('#ktj').val(temp[2]);
            $('#ak').val(temp[3]);
            $('#kuantitas').val(temp[4]);
            $('#output').val(temp[5]);
            $('#mutu').val(temp[6]);
            $('#waktu').val(temp[7]);
            $('#thn_keg').val(temp[8]);
            $('#id_item').prop('readonly', true);                
        }
    })
}

function deletedata(id, no){
    swal({
        title       : "Apakah anda yakin ?",
        text        : "File yang dihapus tidak dapat dikembalikan !",
        icon        : "warning",
        buttons     : ["Batal", "Hapus"],
        dangerMode  : true,
    }).then((isConfirm) => {
        if (isConfirm) {
            $.post("modul/kegiatantahunan.php", {
                act: 'deldataitem',
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