<!--datatable-->
<link href="<?php echo base_url() . 'assets/webadmin/' ?>assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url() . 'assets/webadmin/' ?>assets/plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url() . 'assets/webadmin/' ?>assets/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css" />

<link href="<?php echo base_url() . 'assets/webadmin/' ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url() . 'assets/webadmin/' ?>assets/css/core.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url() . 'assets/webadmin/' ?>assets/css/components.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url() . 'assets/webadmin/' ?>assets/css/icons.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url() . 'assets/webadmin/' ?>assets/css/pages.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url() . 'assets/webadmin/' ?>assets/css/menu.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url() . 'assets/webadmin/' ?>assets/css/responsive.css" rel="stylesheet" type="text/css" />

<!-- Bootstrap-datepicker -->
<link href="<?php echo base_url() . 'assets/webadmin/' ?>assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css" rel="stylesheet">
<!-- Daterangepicker -->
<link href="<?php echo base_url() . 'assets/webadmin/' ?>assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

<!-- multiselect css-->
<link href="<?php echo base_url() . 'assets/webadmin/' ?>assets/plugins/multiselect/css/multi-select.css"  rel="stylesheet" type="text/css" />
<!-- select2 css-->
<link href="<?php echo base_url() . 'assets/webadmin/' ?>assets/plugins/select2/select2.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url() . 'assets/webadmin/' ?>assets/plugins/hopscotch/css/hopscotch.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url() . 'assets/webadmin/' ?>assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css" rel="stylesheet" />
<style>
    #topnav .topbar-main {
        background-color: <?php echo $common->setting['litbang'] != null ? $common->setting['litbang']->color_header : '11.png'?>;
    }
    #topnav .topbar-main .logo {
        color: <?php echo $common->setting['litbang'] != null ? $common->setting['litbang']->color_menu : '#ffffff' ?> !important;
        font-size: 20px;
        font-weight: 700;
        letter-spacing: .05em;
        margin-top: 8px;
        text-transform: uppercase;
        float: left;
    }
    #topnav .navigation-menu > li > a {
        display: block;
        /*color: #36404a;*/
        color: <?php echo $common->setting['litbang'] != null ? $common->setting['litbang']->color_menu : '#ffffff' ?>;
        font-weight: 500;
        -webkit-transition: all .3s ease;
        transition: all .3s ease;
        line-height: 20px;
        padding-left: 20px;
        padding-right: 20px;

        margin-right: 5px;
    }
    #topnav .navigation-menu > li > a i {
        font-size: 18px;
        text-align: center;
        color: <?php echo $common->setting['litbang'] != null ? $common->setting['litbang']->color_menu : '#ffffff' ?>;
    }
    html,body{
        /*background: url(<?php echo base_url() . 'assets/webadmin/assets/images/agsquare.png' ?>) repeat-x repeat-y;*/
    }
    
    table.rpt td{
        padding: 3px;
    }
    
    table.rpt th{
        text-align: center;
        padding: 3px;
    }
    
    .alert{
        position: fixed;
        display: block;
        z-index: 1;
        bottom: 10px;
        left: 10px;
    }
</style>