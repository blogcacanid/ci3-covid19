<!-- CK Editor -->
<script src="<?php echo base_url() . 'assets/bower_components/ckeditor/ckeditor.js'; ?>"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url() . 'assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js'; ?>"></script>
<script>
    $(function () {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('editor1')
        //bootstrap WYSIHTML5 - text editor
        $('.textarea').wysihtml5()
    })
</script>