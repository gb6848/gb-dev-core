<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title"><a href="<?=$base_url?>settings/legalterm" class="btn btn-success"><?=_l("Back",$this)?></a></h3>
                    </div>
                    <?php
                    mk_hpostform();
                    ?>
                    <div class="card-body">
                        <div class="form-group ">
                        <label class="control-label col-lg-2"><?php echo _l('Legal term message',$this); ?></label>
                        <div class="col-lg-10">
                            <ul class="nav nav-tabs nav-languages" role="tablist">
                                <?php foreach ($languages as $item) { ?>
                                    <li role="presentation">
                                        <a href="#langtab<?php echo $item["language_id"]?>" aria-controls="langtab<?php echo $item["language_id"]?>" role="tab" data-toggle="tab">
                                            <img src="<?php echo base_url().$item["image"]; ?>" style="width:32px;">
                                            <?php echo $item["language_name"]; ?>
                                        </a>
                                    </li>
                                <?php } ?>
                            </ul>
                            <div class="tab-content nav-languages">
                                <?php foreach ($languages as $item) { ?>
                                    <div role="tabpanel" class="tab-pane" id="langtab<?php echo $item["language_id"]?>">
                                        <?php
                                        mk_htexteditor("data[options][".$item["language_id"]."][message]",_l('All auto message headers',$this)." (".'<img src="'.base_url().$item["image"].'" style="width:18px;"> '.$item["language_name"].")",isset($options[$item["language_id"]])?$options[$item["language_id"]]["message"]:"");
                                        ?>
                                    </div>
                                <?php } ?>

                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="card-footer">
                        <?php
                        mk_hsubmit(_l('Submit',$this),$base_url,_l('Cancel',$this));
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



<script type="text/javascript">
    $(function(){
        $('.nav.nav-tabs.nav-languages > li:first-child').addClass('active');
        $('.nav-languages .tab-pane:first-child').addClass('active');
    });
</script>