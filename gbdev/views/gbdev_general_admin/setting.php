
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
                        <a class="nav-link active" id=""  href="javascript:;" role="tab" aria-selected="true"><?php echo _l('General settings',$this)?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id=""  href="<?php echo base_url()?>admin/settings/seo" role="tab"aria-selected="false"><?php echo _l('SEO optimise',$this)?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id=""  href="<?php echo base_url()?>admin/settings/contact" role="tab"  aria-selected="false"><?php echo _l('Contact settings',$this)?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id=""  href="<?php echo base_url()?>admin/settings/mail" role="tab" aria-selected="false"><?php echo _l('Send mail settings',$this)?></a>
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
                <?=$this->session->flashdata('message')?>
                <?=$this->session->flashdata('error')?>
            </div>
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="" role="tabpanel" >
                        <div class=" form">
                            <?php
                            print_r($this->session->flashdata('success'));
                            mk_hpostform();
                            mk_hselect("data[language_id]",_l('Admin language',$this),$languages,"language_id","language_name",isset($settings['language_id'])?$settings['language_id']:null,null,'style="width:200px"');
                            $option = "style='max-width:600px;'";
                            mk_htext("data[company]",_l('Company Name',$this),isset($settings['company'])?$settings['company']:'',$option);
                            foreach ($languages as $item) {
                                mk_htext("data[options][".$item["language_id"]."][company]",_l('company name',$this)." (".$item["language_name"].")",isset($options[$item["language_id"]])?$options[$item["language_id"]]["company"]:"",$option);
                            }
                            mk_hurl_upload("data[logo]",_l('Logo',$this),isset($settings['logo'])?$settings['logo']:'',"logo");
                            mk_hcheckbox_onOff("data[show_logo]",_l('Show logo',$this),(isset($settings['show_logo']) && $settings['show_logo']==1)?1:null, (isset($settings['show_logo']) && $settings['show_logo']==1)?1:0);
                            mk_hcheckbox_onOff("data[enabled_logo_circle]",_l('Logo in circle',$this),(isset($settings['enabled_logo_circle']) && $settings['enabled_logo_circle']==1)?1:null, (isset($settings['show_logo']) && $settings['show_logo']==1)?1:0);

                            mk_hurl_upload("data[fav_icon]",_l('Fav Icon',$this),isset($settings['fav_icon'])?$settings['fav_icon']:'',"fav_icon");

                            mk_hnumber("data[registration_number]",_l('Company registration number',$this),isset($settings['registration_number'])?$settings['registration_number']:'',$option);
                            mk_htext("data[VATIN]",_l('VAT identification number',$this),isset($settings['VATIN'])?$settings['VATIN']:'',$option);

                            mk_hcheckbox_onOff("data[enabled_visitor_login]",_l('Enable Visitor logon',$this),(isset($settings['enabled_visitor_login']) && $settings['enabled_visitor_login']==1)?1:null,(isset($settings['enabled_visitor_login']) && $settings['enabled_visitor_login']==1)?1:0);
                            mk_hcheckbox_onOff("data[enable_gdpr]",_l('Enable GDPR',$this),(isset($settings['enable_gdpr']) && $settings['enable_gdpr']==1)?1:null, (isset($settings['enable_gdpr']) && $settings['enable_gdpr']==1)?1:0);
                            mk_hcheckbox_onOff("data[enable_legalterm]",_l('Enable legal term',$this),(isset($settings['enable_legalterm']) && $settings['enable_legalterm']==1)?1:null,(isset($settings['enable_legalterm']) && $settings['enable_legalterm']==1)?1:0);
                            mk_hcheckbox_onOff("data[enabled_user_tasks_list]",_l('Enable ToDo list',$this),(isset($settings['enabled_user_tasks_list']) && $settings['enabled_user_tasks_list']==1)?1:null,(isset($settings['enabled_user_tasks_list']) && $settings['enabled_user_tasks_list']==1)?1:0);
                            mk_hcheckbox_onOff("data[enabled_calendar]",_l('Enable calendar list',$this),(isset($settings['enabled_calendar']) && $settings['enabled_calendar']==1)?1:null,(isset($settings['enabled_calendar']) && $settings['enabled_calendar']==1)?1:0);
                            mk_hcheckbox_onOff("data[enabled_comments]",_l('Enable comment',$this),(isset($settings['enabled_comments']) && $settings['enabled_comments']==1)?1:null,(isset($settings['enabled_comments']) && $settings['enabled_comments_chart']==1)?1:0);
                            mk_hcheckbox_onOff("data[enabled_comments_chart]",_l('Enable comment chart',$this),(isset($settings['enabled_comments_chart']) && $settings['enabled_comments_chart']==1)?1:null,(isset($settings['enabled_comments_chart']) && $settings['enabled_comments_chart']==1)?1:0);
                            mk_hcheckbox_onOff("data[enabled_content_chart]",_l('Enable content chart',$this),(isset($settings['enabled_content_chart']) && $settings['enabled_content_chart']==1)?1:null,(isset($settings['enabled_content_chart']) && $settings['enabled_content_chart']==1)?1:0);


                            mk_htext("data[google_map_api_key]",_l('Google map api key',$this),isset($settings['google_map_api_key'])?$settings['google_map_api_key']:'',$option);
                            mk_htextarea("data[google_analytic_code]",_l('Google analytic tracking code',$this),isset($settings['google_analytic_code'])?$settings['google_analytic_code']:'',$option);

                            mk_htext("data[facebook_link]",_l('Facebook link',$this),isset($settings['facebook_link'])?$settings['facebook_link']:'',$option);
                            mk_htext("data[instagram_link]",_l('Instagram link',$this),isset($settings['instagram_link'])?$settings['instagram_link']:'',$option);
                            mk_htext("data[twitter_link]",_l('Twitter link',$this),isset($settings['twitter_link'])?$settings['twitter_link']:'',$option);
                            mk_htext("data[skype_link]",_l('Skype link',$this),isset($settings['skype_link'])?$settings['skype_link']:'',$option);

                            mk_hsubmit(_l('Submit',$this),$base_url,_l('Cancel',$this));
                            mk_closeform();
                            ?>
                        </div>
                    </div>

                </div>
            </div>
            <!-- /.card -->
        </div>
    </div>

</div>
<!-- /.row -->

<!-- /.card -->
</div>
<?php
mk_popup_uploadfile(_l('Upload Logo',$this),"logo",$base_url."upload_image/1/");
mk_popup_uploadfile(_l('Upload Fav',$this),"fav_icon",$base_url."upload_image/1/");
?>

