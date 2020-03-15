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
                            <a class="nav-link" id=""  href="<?php echo base_url()?>admin/settings/contact" role="tab"  aria-selected="false" ><?php echo _l('Contact settings',$this)?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id=""  href="<?php echo base_url()?>admin/settings/mail" role="tab" aria-selected="false"><?php echo _l('Send mail settings',$this)?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" id=""  href="javascript:;" role="tab" aria-selected="true"><?php echo _l('GDPR',$this)?></a>
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
                                <a href="<?=$base_url?>edit_setting_gdpr/0" class="btn btn-success"><?=_l("Create a New",$this)?></a>
                                <?php if(isset($data_list) && count($data_list)!=0){ ?>
                                    <div class="adv-table">
                                        <table  class="display table table-bordered table-striped" id="data_list">
                                            <thead>
                                            <tr>
                                                <th><?=_l("Valid from",$this)?></th>
                                                <th><?=_l("Valid to",$this)?></th>
                                                <th><?=_l("Active",$this)?></th>
                                                <th><?=_l("Languages",$this)?></th>
                                                <th><?=_l('Action',$this)?></th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            <?php
                                            foreach($data_list as $data){ ?>
                                                <tr class="gradeX">
                                                    <td><?=isset($data["valid_from"])?date('d.m.Y', strtotime($data["valid_from"])):""?></td>
                                                    <td><?=isset($data["valid_to"])?date('d.m.Y', strtotime($data["valid_to"])):""?></td>
                                                    <td><i class="fa <?=(isset($data["active"]) && $data["active"]==1)?"fa-check":"fa-minus-circle"?>"></i></td>
                                                    <td><?=$data["languages"]?> </td>
                                                    <td>
                                                        <?php if(!(isset($data["valid_from"]))){echo( isset($data["valid_from"]));?>
                                                            <a href="<?=$base_url?>edit_setting_gdpr<?=isset($data["setting_gdpr_id"])?"/".$data["setting_gdpr_id"]:""?>/0" class="btn btn-primary btn-sm" title="<?=_l('Edit',$this)?>"><i title="<?=_l('Edit',$this)?>" class="fa fa-edit"></i></a>
                                                            <a href="<?=$base_url?>delete_gdpr_by_id<?=isset($data["setting_gdpr_id"])?"/".$data["setting_gdpr_id"]:""?>/0" class="btn btn-danger btn-sm" title="<?=_l('Delete',$this)?>"><i title="<?=_l('Delete',$this)?>" class="fa fa-trash"></i></a>
                                                            <a href="<?=$base_url?>activate_gdpr_by_id<?=isset($data["setting_gdpr_id"])?"/".$data["setting_gdpr_id"]:""?>" class="btn btn-success btn-sm" title="<?=_l('Activate',$this)?>"><i title="<?=_l('Activate',$this)?>" class="fa fa-power-off"></i> <?=_l('Activate',$this)?></a>

                                                        <?php }else {?>
                                                            <a href="<?=$base_url?>edit_setting_gdpr<?=isset($data["setting_gdpr_id"])?"/".$data["setting_gdpr_id"]:""?>/1" class="btn btn-success btn-sm" title="<?=_l('Preview',$this)?>"><i title="<?=_l('Preview',$this)?>" class="fas fa-search"></i> <?=_l('Preview',$this)?></a>
                                                        <?php } ?>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                <?php } ?>
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


<script type="text/javascript" charset="utf-8">
    $(document).ready(function() {
        $('#data_list').dataTable( {
            "aaSorting": [[ 1, "desc" ]],
            "oLanguage": {
                "sSearch": "<?=_l("Search",$this)?>:",
                "oPaginate":{
                    "sNext": "<?=_l("Next",$this)?>",
                    "sPrevious": "<?=_l("Previous",$this)?>"
                },
                "sZeroRecords": "<?=_l("No matching records found",$this)?>",
                "sLengthMenu": "<?=_l("_MENU_ Records per page",$this)?>",
                "sInfoEmpty": "<?=_l("Showing 0 to 0 of 0 entries",$this)?>",
                "sInfo": "<?=_l("Showing _START_ to _END_ of _TOTAL_ entries",$this)?>"
            }
        } );
    } );
</script>