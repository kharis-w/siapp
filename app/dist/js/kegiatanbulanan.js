$(document).ready(function() {
    $("table[id^='TABLE']").DataTable({
        "scrollCollapse": true,
        "searching": true,
        "paging": true
    });
});

var shortcut = document.kegiatanbulanan;
jQuery(document).ready(function() {
    // hide panelForm1
    jQuery('#panelForm1').show();
    jQuery('#panelForm2').hide();
    jQuery('#panelForm3').hide();
    // add button
    jQuery('#btn-add-kegiatan').click(function() {
        jQuery('#bookform_select')[0].reset();
        jQuery('#panelForm1').hide(500);
        jQuery('#panelForm2').show(500);
        jQuery('#panelForm3').hide(500);
        jQuery('#btn-add-kegiatan').hide(500);
    });

    // add button
    jQuery('#btn-add-kegiatan-bulanan').click(function() {
        jQuery('#bookform_input')[0].reset();
        jQuery('#panelForm1').hide(500);
        jQuery('#panelForm2').hide(500);
        jQuery('#panelForm3').show(500);
        jQuery('#btn-add-kegiatan').hide(500);
        jQuery('#act').val('add_kegiatan_bulanan');
        $('#id_kegiatan_bulanan').prop('readonly', false);
    });

    // cancel button
    jQuery('#btn-cancel1').click(function() {
        jQuery('#bookform_select')[0].reset();
        jQuery('#panelForm1').show(500);
        jQuery('#panelForm2').hide(500);
        jQuery('#panelForm3').hide(500);
        jQuery('#act').val('');
        jQuery('#next-form').val('');
    });
    // cancel button
    jQuery('#btn-cancel2').click(function() {
        jQuery('#bookform_input')[0].reset();
        jQuery('#panelForm1').show(500);
        jQuery('#panelForm2').hide(500);
        jQuery('#panelForm3').hide(500);
        jQuery('#act').val('');
        jQuery('#next-form').val('');
    });
});
