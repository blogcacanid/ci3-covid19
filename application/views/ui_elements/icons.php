<?php $this->load->view('_design/_head'); ?>
<?php $this->load->view('ui_elements/icons_link'); ?>
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Google Font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
<style>
    /* FROM HTTP://WWW.GETBOOTSTRAP.COM
     * Glyphicons
     *
     * Special styles for displaying the icons and their classes in the docs.
     */

    .bs-glyphicons {
        padding-left: 0;
        padding-bottom: 1px;
        margin-bottom: 20px;
        list-style: none;
        overflow: hidden;
    }

    .bs-glyphicons li {
        float: left;
        width: 25%;
        height: 115px;
        padding: 10px;
        margin: 0 -1px -1px 0;
        font-size: 12px;
        line-height: 1.4;
        text-align: center;
        border: 1px solid #ddd;
    }

    .bs-glyphicons .glyphicon {
        margin-top: 5px;
        margin-bottom: 10px;
        font-size: 24px;
    }

    .bs-glyphicons .glyphicon-class {
        display: block;
        text-align: center;
        word-wrap: break-word; /* Help out IE10+ with class names */
    }

    .bs-glyphicons li:hover {
        background-color: rgba(86, 61, 124, .1);
    }

    @media (min-width: 768px) {
        .bs-glyphicons li {
            width: 12.5%;
        }
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
            <?php $this->load->view('ui_elements/icons_main'); ?>
        </div>
        <!-- /.content-wrapper -->

        <?php $this->load->view('_design/footer'); ?>  

    </div>
    <!-- ./wrapper -->

    <?php $this->load->view('_design/_end'); ?>  
    <?php $this->load->view('ui_elements/icons_end'); ?>  

</body>
</html>
