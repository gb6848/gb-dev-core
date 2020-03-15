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
                            <a class="nav-link active" id=""  href="javascript:;" role="tab" aria-selected="true"><?php echo _l('SEO optimise',$this)?></a>
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
                </div>
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="" role="tabpanel" >
                            <div class=" form">
                                <?php
                                mk_hpostform();
                                $option = "style='max-width:600px;'";
                                foreach ($languages as $item) {
                                    mk_htext("data[options][".$item["language_id"]."][site_title]",_l('site title',$this)." (".$item["language_name"].")",isset($options[$item["language_id"]])?$options[$item["language_id"]]["site_title"]:"",$option);
                                    mk_htextarea("data[options][".$item["language_id"]."][site_description]",_l('Site Description',$this)." (".$item["language_name"].")",isset($options[$item["language_id"]])?$options[$item["language_id"]]["site_description"]:"",$option);
                                    mk_htextarea("data[options][".$item["language_id"]."][site_keyword]",_l('site keywords',$this)." (".$item["language_name"].")",isset($options[$item["language_id"]])?$options[$item["language_id"]]["site_keyword"]:"",$option);
                                }
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


