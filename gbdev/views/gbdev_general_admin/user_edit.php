<script src="<?php echo base_url(); ?>assets/mini-upload-image/js/jquery.knob.js"></script>
<script src="<?php echo base_url(); ?>assets/mini-upload-image/js/jquery.ui.widget.js"></script>
<script src="<?php echo base_url(); ?>assets/mini-upload-image/js/jquery.iframe-transport.js"></script>
<script src="<?php echo base_url(); ?>assets/mini-upload-image/js/jquery.fileupload.js"></script>
<script src="<?php echo base_url(); ?>assets/mini-upload-image/js/script.js"></script>
<script src="<?php echo base_url(); ?>assets/mini-upload-form/js/script.js"></script>
<link href="<?=base_url()?>assets/mini-upload-image/css/style.css" rel="stylesheet" >


<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title"><?=$title?> - <?=isset($data['title'])?_l("Edit",$this)." ".$data['title']:_l("Add",$this)?></h3>
                    </div>
                    <?php
                    mk_hpostform($base_url.$page."_manipulate".(isset($data['user_id'])?"/".$data['user_id']:""));
                    ?>
                    <div class="card-body">
                        <?php
                        mk_hurl_upload("data[avatar]",_l('avatar',$this),isset($data['avatar'])?$data['avatar']:'',"avatar");
                        mk_htext("data[username]",_l('Username',$this),isset($data['username'])?$data['username']:'');
                        mk_hemail("data[email]",_l('Email',$this),isset($data['email'])?$data['email']:'');
                        mk_htext("data[fullname]",_l('Full Name',$this),isset($data['fullname'])?$data['fullname']:'');
                        mk_hpassword("data[password]",_l('Password',$this));
                        mk_hcheckbox("data[status]",_l('status',$this),(isset($data['status']) && $data['status']==1)?1:null);
                        ?>
                    </div>
                    <div class="card-footer">
                        <?php
                        mk_hsubmit(_l('Submit',$this),$base_url.$page,_l('Cancel',$this));
                        ?>
                    </div>
                    <?php
                    mk_closeform();
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
mk_popup_uploadfile(_l('Upload Avatar',$this),"avatar",$base_url."upload_image/20/");
?>
