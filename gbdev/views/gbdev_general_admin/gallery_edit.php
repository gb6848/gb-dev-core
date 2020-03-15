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
                        <h3 class="card-title"><?=$title?> <?=isset($data['title'])?_l("Edit",$this)." ".$data['title']:_l("Add",$this)?></h3>
                    </div>
                    <?php
                    mk_hpostform($base_url.$page."_manipulate".(isset($data['gallery_id'])?"/".$data['gallery_id']:""));
                    ?>
                    <div class="card-body">
                        <?php
                        mk_htext("data[gallery_name]",_l('gallery name',$this),isset($data['gallery_name'])?$data['gallery_name']:'');
                        /*foreach ($languages as $item) {
                            mk_htext("data[titles][".$item["language_id"]."]",_l('gallery name',$this)." (".$item["language_name"].")",isset($titles[$item["language_id"]])?$titles[$item["language_id"]]["title_caption"]:"");
                        } todo*/
                        mk_hnumber("data[gallery_order]",_l('gallery order',$this),isset($data['gallery_order'])?$data['gallery_order']:'');
                        mk_hcheckbox("data[status]",_l('status',$this),(isset($data['status']) && $data['status']==1)?1:null);
                        ?>
                    </div>
                    <div class="card-footer">
                        <?php
                        mk_hsubmit(_l('Submit',$this),$base_url.$page.(isset($data_type)?"/".$data_type:'').(isset($relation_id)?"/".$relation_id:""),_l('Cancel',$this));
                        ?>
                    </div>
                    <?php
                    mk_hidden("data[relation_id]",isset($relation_id)?$relation_id:0);
                    mk_hidden("data[data_type]",isset($data_type)?$data_type:'');
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