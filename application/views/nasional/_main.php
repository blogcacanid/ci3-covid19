<!-- Main content -->
<section class="content">
    <!-- Info boxes -->
    <div class="row">
        <?php foreach ($recSum as $datasum) : ?>
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="fa fa-group"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">POSITIF</span>
                    <span class="info-box-number"><?php echo $datasum['positif']; ?></span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-green"><i class="fa fa-smile-o"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">SEMBUH</span>
                    <span class="info-box-number"><?php echo $datasum['sembuh']; ?></span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fa fa-ambulance"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">MENINGGAL</span>
                    <span class="info-box-number"><?php echo $datasum['meninggal']; ?></span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <?php endforeach ?>
    </div>
    <!-- /.row -->
    
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Informasi Penyebaran Corona (COVID-19) - <?php echo $sub_title; ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="nasional" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Propinsi</th>
                                <th>Positif</th>
                                <th>Sembuh</th>
                                <th>Meninggal</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php foreach ($recDetails as $datadetails) : ?>
                            <tr>
                                <td><?php echo $datadetails['attributes']['Provinsi']; ?></td>
                                <td><?php echo $datadetails['attributes']['Kasus_Posi']; ?></td>
                                <td><?php echo $datadetails['attributes']['Kasus_Semb']; ?></td>
                                <td><?php echo $datadetails['attributes']['Kasus_Meni']; ?></td>
                            </tr>
                <?php endforeach ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Propinsi</th>
                                <th>Positif</th>
                                <th>Sembuh</th>
                                <th>Meninggal</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->