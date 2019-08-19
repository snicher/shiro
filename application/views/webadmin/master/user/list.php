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
                    <table id="dt" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Email</th>                                
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Telp</th>
                                <th>Pekerjaan</th>
                                <th>Photo</th>
                                <th style="width: 10%"></th>
                            </tr>
                        </thead>                       
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('webadmin/master/user/add'); ?>

<script src="<?php echo base_url() . 'assets/webadmin/' ?>assets/js/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#dt').DataTable({
            "ajax": '<?php echo site_url('master/user/get_row') ?>'
        });
    });
</script>
