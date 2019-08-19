<div id="modal-add2" class="modal fade" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div id="modal_content">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title"><?php echo $title_content ?></h4>
                </div>
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
                                    <div class="radio radio-primary">
                                        <input id="checkbox"  name="inp_gender" type="radio" value="L" checked="true">
                                        <label for="checkbox1"> Laki Laki </label>
                                    </div>
                                    <div class="radio radio-pink">
                                        <input id="checkbox"  name="inp_gender" type="radio" value="P">
                                        <label for="checkbox1"> Perempuan </label>
                                    </div>
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