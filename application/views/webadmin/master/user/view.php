
<div class="modal-dialog modal-sm">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title"><?php echo $title_content ?></h4>
        </div>
        <form id="myform" action="<?php echo site_url('master/user/process/edit/' . $data->id); ?>" method="post" data-parsley-validate novalidate>
            <div class="modal-body font-13">
                <div class="row">
                    
                </div>
            </div>
        </form>
    </div>
</div>