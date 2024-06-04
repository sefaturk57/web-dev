<?php $this->load->view('admin/include/header')?>
<?php $this->load->view('admin/include/leftmenu') ?>
<?php $besin=besin::select();?>
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">besin tablosu</h4>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr>
                                        <th>besin</th>
                                        <th>Kalori</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($besin as $bes) {?>
                                        <tr><!--İF ELSE EKLE-->
                                        <td><?php if ($bes->besin ==1) {
                                            echo 'adana';}

                                        if ($bes->besin == 2) {
                                            echo 'mercimek köftesi';

                                        }
                                        if ($bes->besin == 3) {
                                            echo 'kurufasulye';

                                        }
                                        if ($bes->besin == 4) {
                                            echo 'pilav';

                                        }
                                        if ($bes->besin == 5) {
                                            echo ' iskender';

                                        }
                                        if ($bes->besin == 6) {
                                            echo 'bezelye';

                                        }
                                        if ($bes->besin == 7) {
                                            echo 'künefe';

                                        }
                                        if ($bes->besin == 8) {
                                            echo 'bulgur pilavi';

                                        }
                                        if ($bes->besin == 9) {
                                            echo 'manti';

                                        }
                                        if ($bes->besin == 10) {
                                            echo 'pide';

                                        }

                                        
                                            
                                            ?>
                                            </td>
                                        <td><?php echo $bes->kalori?></td>

                                    </tr>
                                    <?php }?>
                                    
                                    
                            


                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #/ container -->
</div>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<?php $this->load->view('admin/include/footer') ?>