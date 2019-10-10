var shortcut = document.produktifitas;

jQuery(document).ready(function() {
    // hide panelForm1
    jQuery('#panelForm1').hide();
    // add button
    jQuery('#btn-add-produktifitas').click(function() {
        jQuery('#bookform_input')[0].reset();
        jQuery('#panelForm1').show(500);
        jQuery('#panelForm2').hide(500);
        jQuery('#act').val('add_produktifitas');
        $('#id_siswa').prop('readonly', false);
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