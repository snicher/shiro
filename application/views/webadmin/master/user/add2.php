<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="btn-group pull-right m-t-15">
                    <button class="btn btn-default waves-effect waves-light" data-toggle="modal" data-target="#modal-add2">Registrasi +</button>
                </div>
                <h4 class="page-title"><?php echo $modul; ?></h4>
                <?php $this->load->view('webadmin/master/user/breadcrumbs'); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <?php view_message(); ?>
                <div class="card-box table-responsive fontsmall">
                    <form id="myform" action="<?php echo site_url('master/user/process/add'); ?>" enctype="multipart/form-data" method="post" data-parsley-validate novalidate>
                    <div class="modal-body font-13">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">Email</label>
                                    <input type="email" name="inp_email" class="form-control input-sm" required=""  placeholder="email user.." />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">Nama</label>
                                    <input type="text" name="inp_nama" id="inp_nama" class="form-control input-sm" required=""  placeholder="nama user.." />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">Password</label>
                                    <input type="password" name="inp_pass" id="" class="form-control input-sm" required=""  placeholder="password.." />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">Re Password</label>
                                    <input type="password" name="inp_repass" id="" class="form-control input-sm" required=""  placeholder="re password.." />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">Gender</label>
                                    <input type="text" name="inp_nama" id="inp_nama" class="form-control input-sm" required=""  placeholder="nama user.." />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">Telp</label>
                                    <input type="text" name="inp_telp" onkeypress="return isNumberKey(event)" class="form-control input-sm" required=""  placeholder="telp.." />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field-2" class="control-label">Pekerjaan</label>                                
                                    <?= getPekerjaan('inp_pekerjaan', null, 'form-control input-sm select2', 'inp_pekerjaan', 1, 0) ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">Photo</label>
                                    <input type="file" name="inp_photo" class="form-control input-sm" required=""  placeholder="foto user.." />
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-default waves-effect waves-light">Simpan</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
