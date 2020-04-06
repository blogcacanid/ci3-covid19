<!-- Main content -->
<section class="content">
    <!-- Info boxes -->
    <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="fa fa-group"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">POSITIF</span>
                    <?php //echo $datasumpositif['value'].['0']; ?>
                    <span class="info-box-number"><?php echo $recSumPositif['value']; ?></span>
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
                    <span class="info-box-number"><?php echo $recSumSembuh['value']; ?></span>
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
                    <span class="info-box-number"><?php echo $recSumMeninggal['value']; ?></span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
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
                    <table id="internasional" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Country</th>
                                <th>Confirmed</th>
                                <th>Active</th>
                                <th>Recovered</th>
                                <th>Deaths</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php foreach ($recDetails as $datadetails) : ?>
                            <tr>
                                <td><?php echo $datadetails['attributes']['Country_Region']; ?></td>
                                <td><?php echo $datadetails['attributes']['Confirmed']; ?></td>
                                <td><?php echo $datadetails['attributes']['Active']; ?></td>
                                <td><?php echo $datadetails['attributes']['Recovered']; ?></td>
                                <td><?php echo $datadetails['attributes']['Deaths']; ?></td>
                            </tr>
                <?php endforeach ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Country</th>
                                <th>Confirmed</th>
                                <th>Active</th>
                                <th>Recovered</th>
                                <th>Deaths</th>
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