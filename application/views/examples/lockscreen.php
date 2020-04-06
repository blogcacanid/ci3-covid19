<?php $this->load->view('_design/_head'); ?>
<?php $this->load->view('examples/lockscreen_link'); ?>
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Google Font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
</head>
<body class="hold-transition lockscreen">
    <!-- Automatic element centering -->
    <div class="lockscreen-wrapper">
        <div class="lockscreen-logo">
            <a href="<?= site_url('examples'); ?>"><b>Admin</b>LTE</a>
        </div>
        <!-- User name -->
        <div class="lockscreen-name">Cacan Blog</div>

        <!-- START LOCK SCREEN ITEM -->
        <div class="lockscreen-item">
            <!-- lockscreen image -->
            <div class="lockscreen-image">
                <img src="<?php echo base_url() . 'assets/dist/img/cacan-128x128.jpg'; ?>" alt="User Image">
            </div>
            <!-- /.lockscreen-image -->

            <!-- lockscreen credentials (contains the form) -->
            <form class="lockscreen-credentials">
                <div class="input-group">
                    <input type="password" class="form-control" placeholder="password">

                    <div class="input-group-btn">
                        <button type="button" class="btn"><i class="fa fa-arrow-right text-muted"></i></button>
                    </div>
                </div>
            </form>
            <!-- /.lockscreen credentials -->

        </div>
        <!-- /.lockscreen-item -->
        <div class="help-block text-center">
            Enter your password to retrieve your session
        </div>
        <div class="text-center">
            <a href="<?= site_url('examples/login'); ?>">Or sign in as a different user</a>
        </div>
        <div class="lockscreen-footer text-center">
            Copyright &copy; 2014-2016 <b><a href="https://adminlte.io" class="text-black">Almsaeed Studio</a></b><br>
            All rights reserved
        </div>
    </div>
    <!-- /.center -->
    <?php $this->load->view('examples/lockscreen_end'); ?>  

</body>
</html>
