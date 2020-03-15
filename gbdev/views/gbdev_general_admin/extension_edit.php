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
                    mk_hpostform($base_url.$page."_manipulate".(isset($data['extension_id'])?"/".$data['extension_id']:""));
                    ?>
                    <div class="card-body">
                        <?php
                        mk_hselect("data[language_id]",_l('language',$this),$languages,"language_id","language_name",isset($data['language_id'])?$data['language_id']:null,null,'style="width:200px"');
                        //if(isset($page_type) && allowed_extension_fields("icon",$page_type))
                          //  mk_hselect_faicon("data[extension_icon]",_l('Icon',$this),$faicons,isset($data['extension_icon'])?$data['extension_icon']:null,null,'style="width:200px"');
                        mk_htext("data[name]",_l('extension Name',$this),isset($data['name'])?$data['name']:'');

                       if(isset($page_type) && allowed_extension_fields("enabled_read_more",$page_type)){
                           mk_hcheckbox_onOff("data[enabled_read_more]",_l('Enable full description',$this),(isset($data['enabled_read_more']) && $data['enabled_read_more']==1)?1:null,(isset($data['enabled_read_more']) && $data['enabled_read_more']==1)?1:0);
                       }
                        if(isset($page_type) && allowed_extension_fields("description",$page_type)){
                            mk_htexteditor("data[description]",_l('extension description',$this),isset($data['description'])?$data['description']:'');
                        }
                        if(isset($page_type) && allowed_extension_fields("full_description",$page_type)){
                            mk_htexteditor("data[full_description]",_l('extension full description',$this),isset($data['full_description'])?$data['full_description']:'');
                        }
                        if(isset($page_type) && allowed_extension_fields("image",$page_type))
                            mk_hurl_upload("data[image]",_l('image',$this),isset($data['image'])?$data['image']:'',"image");

                        if(isset($page_type) && ($page_type["id"]==204 ||$page_type["id"]==209  )){
                            mk_hradio_button("data[image_position]",
                                _l('Image position',$this),
                                $image_positions,
                                "position_id",
                                "name",
                                isset($data['image_position'])?$data['image_position']:null,$this);
                        }

                        if(isset($page_type) && allowed_extension_fields("order",$page_type))
                            mk_hnumber("data[extension_order]",_l('order',$this),isset($data['extension_order'])?$data['extension_order']:'');
                        // Make more Options
                        if(allowed_extension_more($page_type)){
                            foreach (get_extension_more($page_type) as $key=>$value) {
                                if(is_array($value)){
                                    $caption = isset($value["caption"])?$value["caption"]:"";
                                    $type = isset($value["type"])?$value["type"]:"";
                                }else{
                                    $caption = $key;
                                    $type = $value;
                                }
                                if($type == "text"){
                                    mk_htext("data[extension_more][$key]",_l($caption,$this),isset($data['extension_more'][$key])?$data['extension_more'][$key]:'');
                                }elseif($type == "num"){
                                    mk_hnumber("data[extension_more][$key]",_l($caption,$this),isset($data['extension_more'][$key])?$data['extension_more'][$key]:'');
                                }elseif($type == "url"){
                                    mk_hurl("data[extension_more][$key]",_l($caption,$this),isset($data['extension_more'][$key])?$data['extension_more'][$key]:'');
                                }elseif($type == "textarea"){
                                    mk_htextarea("data[extension_more][$key]",_l($caption,$this),isset($data['extension_more'][$key])?$data['extension_more'][$key]:'');
                                }elseif($type == "check"){
                                    mk_hcheckbox_onOff("data[extension_more][$key]",_l($caption,$this),(isset($data['extension_more'][$key]) && $data['extension_more'][$key]==1)?1:0);
                                }
                            }
                        }
                        if(isset($page_type) && $page_type["id"]==210){
                            mk_hcheckbox_onOff("data[is_rsd]",_l('Recipient of support from the Development Program',$this),(isset($data['is_rsd']) && $data['is_rsd']==1)?1:null);
                        }
                        if(isset($page_type) && $page_type["id"]==206){
                            //mk_hnumber("data[wine_year]",_l('wine year:',$this),isset($data['wine_year'])?$data['wine_year']:'');
                            mk_hnumber("data[price]",_l('wine price:',$this),isset($data['price'])?$data['price']:'');
                            mk_hnumber("data[offer_basic_text]",_l('Basic offer text',$this),isset($data['offer_basic_text'])?$data['offer_basic_text']:'');

                            mk_hcheckbox_onOff("data[is_top_product]",_l('Top product',$this),(isset($data['is_top_product']) && $data['is_top_product']==1)?1:null);
                            mk_hcheckbox_onOff("data[is_other]",_l('Other',$this),(isset($data['is_other']) && $data['is_other']==1)?1:null);
                        }

                        mk_hcheckbox_onOff("data[public]",_l('public',$this),(isset($data['public']) && $data['public']==1)?1:null);
                        mk_hcheckbox_onOff("data[status]",_l('status',$this),(isset($data['status']) && $data['status']==1)?1:null);

                        ?>
                    </div>
                    <div class="card-footer">
                        <?php
                        mk_hsubmit(_l('Submit',$this),$base_url.$page."s".(isset($data_type)?"/".$data_type:'').(isset($relation_id)?"/".$relation_id:""),_l('Cancel',$this));
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
mk_popup_uploadfile(_l('Upload Image',$this),"image",$base_url."upload_image/20/");
?>
