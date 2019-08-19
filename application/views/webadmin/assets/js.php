<script src="<?php echo base_url() . 'assets/webadmin/' ?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url() . 'assets/webadmin/' ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() . 'assets/webadmin/' ?>assets/js/detect.js"></script>
<script src="<?php echo base_url() . 'assets/webadmin/' ?>assets/js/fastclick.js"></script>
<script src="<?php echo base_url() . 'assets/webadmin/' ?>assets/js/jquery.slimscroll.js"></script>
<script src="<?php echo base_url() . 'assets/webadmin/' ?>assets/js/jquery.blockUI.js"></script>
<script src="<?php echo base_url() . 'assets/webadmin/' ?>assets/js/waves.js"></script>
<script src="<?php echo base_url() . 'assets/webadmin/' ?>assets/js/wow.min.js"></script>
<script src="<?php echo base_url() . 'assets/webadmin/' ?>assets/js/jquery.nicescroll.js"></script>
<script src="<?php echo base_url() . 'assets/webadmin/' ?>assets/js/jquery.scrollTo.min.js"></script>

<!-- Datatable js -->
<script src="<?php echo base_url() . 'assets/webadmin/' ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() . 'assets/webadmin/' ?>assets/plugins/datatables/dataTables.bootstrap.js"></script>
<script src="<?php echo base_url() . 'assets/webadmin/' ?>assets/plugins/datatables/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url() . 'assets/webadmin/' ?>assets/plugins/datatables/buttons.bootstrap.min.js"></script>
<script src="<?php echo base_url() . 'assets/webadmin/' ?>assets/plugins/datatables/dataTables.responsive.min.js"></script>

<script src="<?php echo base_url() . 'assets/webadmin/' ?>assets/plugins/select2/select2.min.js" type="text/javascript"></script>

<!-- Data table init -->
<script src="<?php echo base_url() . 'assets/webadmin/' ?>assets/pages/datatables.init.js"></script>
<script type="text/javascript" src="<?php echo base_url() . 'assets/webadmin/' ?>assets/plugins/parsleyjs/dist/parsley.min.js"></script>

<script src="<?php echo base_url() . 'assets/webadmin/' ?>assets/js/jquery.core.js"></script>
<script src="<?php echo base_url() . 'assets/webadmin/' ?>assets/js/jquery.app.js"></script>
<script type="text/javascript">
    $('#datatable-responsive').DataTable();

    TableManageButtons.init();
    function isNumberKey(evt)
    {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
        return true;
    }
</script>
<!--highchart-->