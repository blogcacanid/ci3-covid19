<?php $this->load->view('_design/_head'); ?>
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Google Font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <header class="main-header">
            <?php $this->load->view('_design/main_header'); ?>  
        </header>

        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <?php $this->load->view('_design/main_sidebar'); ?>  
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <?php $this->load->view('_design/breadcrumb'); ?>  
            <?php $this->load->view('nasional/_main'); ?>
        </div>
        <!-- /.content-wrapper -->

        <?php $this->load->view('_design/footer'); ?>  
    </div>
    <!-- ./wrapper -->
    <?php $this->load->view('_design/_end'); ?>  

    <!-- DataTables -->
    <script src="<?php echo base_url() . 'assets/bower_components/datatables.net/js/jquery.dataTables.min.js'; ?>"></script>
    <script src="<?php echo base_url() . 'assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js'; ?>"></script>
    <!-- SlimScroll -->
    <script src="<?php echo base_url() . 'assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js'; ?>"></script>
    <script>
        $(function () {
            $('#nasional').DataTable({
                'ordering': true,
            })

            $('#example2').DataTable({
                'paging': true,
                'lengthChange': false,
                'searching': false,
                'ordering': true,
                'info': true,
                'autoWidth': false
            })
        })
    </script>

</body>
</html>
