<?php mk_use_uploadbox(); ?>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title"> <?=$title?> <?=isset($data['title'])?_l("Edit",$this)." ".$data['title']:_l("Add",$this)?></h3>
                    </div>
                    <?php
                    mk_hpostform($base_url.$page."_manipulate".(isset($data['page_id'])?"/".$data['page_id']:""));
                    ?>
                    <div class="card-body">
                        <?php
                        mk_hselect("data[page_type]",_l('page type',$this),$page_type,"id","name",isset($data['page_type'])?$data['page_type']:null,null,'style="width:400px"',null,$this);
                        mk_htext("data[page_name]",_l('page Name',$this),isset($data['page_name'])?$data['page_name']:'');
                        foreach ($languages as $item) {
                            mk_htext("data[titles][".$item["language_id"]."]",_l('page name',$this)." (".$item["language_name"].")",isset($titles[$item["language_id"]])?$titles[$item["language_id"]]["title_caption"]:"");
                        }
                        mk_hnumber("data[page_order]",_l('page order ',$this),isset($data['page_order'])?$data['page_order']:'');
                        if(isset($data["page_type"]) && !($data["page_type"] == 208 || $data["page_type"] == 207 || $data["page_type"] == 211 || $data["page_type"] == 212  )){
                            mk_hcheckbox("data[preview]",_l('preview',$this),(isset($data['preview']) && $data['preview']==1)?1:null);
                            mk_hcheckbox("data[public]",_l('public',$this),(isset($data['public']) && $data['public']==1)?1:null);
                        }
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

<script>
    $('[name="data[page_type]"]').change(function(){
        var data= $(this).val();
        if(data==208 || data ==207 || data ==211){
            //hide public option
            $('[name="data[preview]"]').closest( ".form-group" ).hide();
            $('[name="data[public]"]').closest( ".form-group" ).hide();
        }else{
            $('[name="data[preview]"]').closest(".form-group" ).show();
            $('[name="data[public]"]').closest(".form-group" ).show();
        }
    });
</script>