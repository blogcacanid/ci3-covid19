<!-- iCheck -->
<script src="<?php echo base_url() . 'assets/plugins/iCheck/icheck.min.js'; ?>"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url() . 'assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js'; ?>"></script>
<!-- Page Script -->
<script>
    $(function () {
        //Add text editor
        $("#compose-textarea").wysihtml5();
    });
</script>
