<?php $this->load->view('_design/_head'); ?>
<?php $this->load->view('ui_elements/modals_link'); ?>
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Google Font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
<style>
    .example-modal .modal {
        position: relative;
        top: auto;
        bottom: auto;
        right: auto;
        left: auto;
        display: block;
        z-index: 1;
    }

    .example-modal .modal {
        background: transparent !important;
    }
</style>
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
            <?php $this->load->view('ui_elements/modals_main'); ?>
        </div>
        <!-- /.content-wrapper -->

        <?php $this->load->view('_design/footer'); ?>  

    </div>
    <!-- ./wrapper -->

    <?php $this->load->view('_design/_end'); ?>  
    <?php $this->load->view('ui_elements/modals_end'); ?>  

</body>
</html>
