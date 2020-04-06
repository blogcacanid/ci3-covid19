<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
        <div class="pull-left image">
            <img src="<?php echo base_url() . 'assets/dist/img/cacan-160x160.jpg'; ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
            <p>Cacan Blog</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
        <li class="header">NASIONAL</li>
        <li class="<?php echo $this->uri->segment(1) == 'nasional' ? 'active' : '' ?>">
            <a href="<?= site_url('nasional/indonesia'); ?>">
                <i class="fa fa-flag-o"></i> <span>Indonesia</span>
            </a>
        </li>
        <li class="header">INTERNASIONAL</li>
        <li class="<?php echo $this->uri->segment(1) == 'internasional' ? 'active' : '' ?>">
            <a href="<?= site_url('internasional/dunia'); ?>">
                <i class="fa fa-globe"></i> <span>Dunia</span>
            </a>
        </li>
    </ul>
</section>
<!-- /.sidebar -->
