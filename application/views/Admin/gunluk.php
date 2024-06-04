<?php $this->load->view('admin/include/header') ?>
<?php $this->load->view('admin/include/leftmenu') ?>
<?php $gunluk = gunluk::select(); ?>
<?php $gunluk_kalori = 1000;?>
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            
            <div class="col-12">
                <div class="card">
                    <div class="card-body ">
                        <h4 class="card-title">besin tablosu</h4>
                        <div class="btn btn-success">
                            <a href="<?php echo base_url('admin/ogunekle')?>">Öğün Ekle</a></div>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr>

                                        <th>günler</th>
                                        <th>günlük kalori toplami</th>
                                        <th>kalori açiği</th>
                                        <th>İşlemler</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($gunluk as $gun) {?>                                   
                                    <tr>
                                        <td><?php echo $gun->gun ?>
                                        </td>
                                        <td><?php echo $gun->gunlukkalori?></td>
                                        <td><?php echo $gunluk_kalori-$gun->gunlukkalori ?></td>
                                        <td>
                                            <a  class="btn btn-warning" href="<?php echo base_url('admin/ogunguncelle/'.$gun->id)?>"><i class="fa fa-edit"></i>Düzenle</a>
                                            <a class="btn btn-danger" href="<?php echo base_url('admin/ogunsil/'.$gun->id)?>"><i class="fa fa-remove"></i> Sil</a>
                                         
                                          
                                        </td>


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
