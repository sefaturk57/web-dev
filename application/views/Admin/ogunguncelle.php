<?php $this->load->view('admin/include/header') ?>
<?php $this->load->view('admin/include/leftmenu') ?>
<?php $gunluk = gunluk::find($this->uri->segment(3)); ?>
<div class="content-body">

    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Günlük Kalori</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Öğün Ekle</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-validation">
                            <form class="form-valide" action="<?php echo base_url('admin/ogunekle') ?>" method="post">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-skill">Günler <span
                                            class="text-danger">*</span>
                                    </label>
                                    <div class="col-md-6">
    
                                        <input type="text" name="gun" class="form-control" value="<?php echo $gunluk->gun?>" id="mdate">
                                        </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-skill">Yemekler <span
                                            class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <select class="form-control" id="val-skill" name="gunlukkalori">

                                            <option value="123">Adana</option>
                                            <option value="124">Mercimek Köftesi</option>
                                            <option value="255">Kuru fasülye</option>
                                            <option value="450">Pilav</option>
                                            <option value="110">İskender</option>
                                            <option value="100">Bezelye</option>
                                            <option value="235">Künefe</option>
                                            <option value="55">Bulgur Pilavı</option>
                                            <option value="85">Mantı</option>
                                            <option value="357">Pide</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-lg-8 ml-auto">
                                        <button type="submit" class="btn btn-primary">Ekle</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #/ container -->
</div>
<?php $this->load->view('admin/include/footer') ?>