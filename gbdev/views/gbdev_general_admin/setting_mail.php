<div class="container-fluid">

    <!-- ./row -->
    <div class="row">
        <div class="col-12">
        </div>
    </div>
    <!-- ./row -->
    <div class="row">
        <?php mk_use_uploadbox(); ?>

        <div class="col-12 col-sm-12 col-lg-12">
            <div class="card card-primary card-outline card-tabs">
                <div class="card-header p-0 pt-1 border-bottom-0">
                    <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link" id=""  href="<?php echo base_url()?>admin/settings/general" role="tab"  aria-selected="false"><?php echo _l('General settings',$this)?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id=""  href="<?php echo base_url()?>admin/settings/seo" role="tab"  aria-selected="false"><?php echo _l('SEO optimise',$this)?></a>
                        </li>
                        <li class="nav-item">
                            <a  class="nav-link" id=""  href="<?php echo base_url()?>admin/settings/contact" role="tab" aria-selected="false" ><?php echo _l('Contact settings',$this)?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" id=""  href="javascript:;" role="tab" aria-selected="true" ><?php echo _l('Send mail settings',$this)?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id=""  href="<?php echo base_url()?>admin/settings/gdpr" role="tab" aria-selected="false"><?php echo _l('GDPR',$this)?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id=""  href="<?php echo base_url()?>admin/settings/legalterm" role="tab" aria-selected="false"><?php echo _l('Legal term',$this)?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id=""  href="<?php echo base_url()?>admin/settings/recaptcha" role="tab" aria-selected="false"><?php echo _l('Recaptcha',$this)?></a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">

                    <?php
                    mk_hpostform();
                    ?>
                    <div class="form-group ">
                        <label class="control-label col-lg-2"><?php echo _l('Email protocol',$this); ?></label>
                        <div class="col-lg-10 col-sm-10">
                            <div class="btn-group">
                                <label class="btn btn-default"><input onchange="if($(this).is(':checked')){ $('.smtp_options').slideDown(500); }" name="data[use_smtp]" type="radio" value="1" checked> <?php echo _l('SMTP-protocol',$this); ?></label>
                                <label class="btn btn-default"><input onchange="if($(this).is(':checked')){ $('.smtp_options').slideUp(500); }" name="data[use_smtp]" type="radio" value="0" <?php echo (isset($settings['use_smtp']) && $settings['use_smtp']==0)?'checked':''; ?>> <?php echo _l('mail-protocol',$this); ?></label>
                            </div>
                        </div>
                    </div>
                    <div class="smtp_options" <?php echo (isset($settings['use_smtp']) && $settings['use_smtp']==0)?'style="display:none;"':''; ?>>
                        <?php
                        $option = "style='max-width:600px;'";
                        mk_htext("data[smtp_host]",_l('SMTP host name',$this),isset($settings['smtp_host'])?$settings['smtp_host']:'',$option);
                        mk_hnumber("data[smtp_port]",_l('SMTP port',$this),isset($settings['smtp_port'])?$settings['smtp_port']:'',$option);
                        mk_htext("data[smtp_username]",_l('SMTP username',$this),isset($settings['smtp_username'])?$settings['smtp_username']:'',$option);
                        mk_htext("data[smtp_password]",_l('SMTP password',$this),isset($settings['smtp_password'])?$settings['smtp_password']:'',$option);
                        ?>
                    </div>

                    <div class="card card-primary card-outline card-outline-tabs">
                        <div class="card-header p-0 border-bottom-0">
                            <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                                <?php
                                $i=0;
                                foreach ($languages as $item) {
                                    $active_class ="";
                                    if($i==0){
                                        $active_class = "active";
                                    }
                                    ?>
                                    <li class="nav-item">
                                        <a class="nav-link  <?php echo $active_class; ?>" id="custom-tabs-three-<?php echo $item["language_id"]?>-tab" data-toggle="pill" href="#custom-tabs-three-<?php echo $item["language_id"]?>" role="tab" aria-controls="custom-tabs-three-<?php echo $item["language_id"]?>" aria-selected="true"><img src="<?php echo base_url().$item["image"]; ?>" style="width:32px;">
                                            <?php echo $item["language_name"]; ?></a>
                                    </li>
                                <?php $i++;} ?>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="custom-tabs-three-tabContent">
                                <?php  $i=0;
                                foreach ($languages as $item) {
                                    $active_class ="";
                                    if($i==0){
                                        $active_class = "active";
                                    }
                                    ?>
                                <div class="tab-pane fade show  <?php echo $active_class; ?>" id="custom-tabs-three-<?php echo $item["language_id"]?>" role="tabpanel" aria-labelledby="custom-tabs-three-<?php echo $item["language_id"]?>-tab">
                                        <?php
                                        mk_vtextarea_shortkeys("msg_header".$item["language_id"],"data[options][".$item["language_id"]."][msg_header]",_l('All auto message headers',$this)." (".'<img src="'.base_url().$item["image"].'" style="width:18px;"> '.$item["language_name"].")",isset($options[$item["language_id"]])?$options[$item["language_id"]]["msg_header"]:"",'rows="6"',$public_keys);
                                        mk_vtextarea_shortkeys("msg_footer".$item["language_id"],"data[options][".$item["language_id"]."][msg_footer]",_l('All auto message footers',$this)." (".'<img src="'.base_url().$item["image"].'" style="width:18px;"> '.$item["language_name"].")",isset($options[$item["language_id"]])?$options[$item["language_id"]]["msg_footer"]:"",'rows="6"',$public_keys);
                                        mk_vtextarea_shortkeys("msg_register".$item["language_id"],"data[options][".$item["language_id"]."][msg_register]",_l('Auto message after register',$this)." (".'<img src="'.base_url().$item["image"].'" style="width:18px;"> '.$item["language_name"].")",isset($options[$item["language_id"]])?$options[$item["language_id"]]["msg_register"]:"",'rows="12"',$register_keys);
                                        mk_vtextarea_shortkeys("msg_active".$item["language_id"],"data[options][".$item["language_id"]."][msg_active]",_l('Auto message after users activate',$this)." (".'<img src="'.base_url().$item["image"].'" style="width:18px;"> '.$item["language_name"].")",isset($options[$item["language_id"]])?$options[$item["language_id"]]["msg_active"]:"",'rows="12"',$activate_keys);
                                        mk_vtextarea_shortkeys("msg_reset_pass".$item["language_id"],"data[options][".$item["language_id"]."][msg_reset_pass]",_l('Auto message after users request to reset password',$this)." (".'<img src="'.base_url().$item["image"].'" style="width:18px;"> '.$item["language_name"].")",isset($options[$item["language_id"]])?$options[$item["language_id"]]["msg_reset_pass"]:"",'rows="12"',$reset_pass_keys);
                                        ?>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                        <!-- /.card -->
                        <?php
                        mk_hsubmit(_l('Submit',$this),$base_url,_l('Cancel',$this));
                        mk_closeform();
                        ?>
                    </div>
                </div>
                <!-- /.card -->
            </div>
        </div>

    </div>
    <!-- /.row -->

    <!-- /.card -->
</div>


