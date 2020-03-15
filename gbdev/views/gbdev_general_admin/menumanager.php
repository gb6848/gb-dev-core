<style>
    .btn-group-sm>.btn, .btn-sm
    {
        padding: 2px 2px 2px 2px!important;
    }
</style>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-12">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title"><?=_l("Insert New Item",$this)?></h3>
                    </div>
                    <?php
                    mk_hpostform($base_url.$page."_manipulate".(isset($data['menu_id'])?"/".$data['menu_id']:""));
                    ?>
                    <div class="card-body">
                        <?php
                        //mk_hselect_faicon("data[menu_icon]",_l('Icon',$this),$faicons,isset($data['menu_icon'])?$data['menu_icon']:null,null,'style="width:200px"');
                        mk_htext("data[menu_name]",_l('menu Name',$this),isset($data['menu_name'])?$data['menu_name']:'');
                        foreach ($languages as $item) {
                            mk_htext("data[titles][".$item["language_id"]."]",_l('menu name',$this)." (".$item["language_name"].")",isset($titles[$item["language_id"]])?$titles[$item["language_id"]]["title_caption"]:"");
                        }
                        mk_hselect("data[sub_menu]",_l('Parent',$this),$parents,"menu_id","menu_name",isset($data['sub_menu'])?$data['sub_menu']:null,"<--"._l("Main Menu",$this)."-->");
                        mk_hselect("data[page_id]",_l('Type',$this),$pages,"page_id","page_name",isset($data['page_id'])?$data['page_id']:null,"<--"._l("use link",$this)."-->");
                        mk_hurl("data[menu_url]",_l('URL',$this),isset($data['menu_url'])?$data['menu_url']:'',"style='direction:ltr'");
                        mk_hnumber("data[menu_order]",_l('order',$this),isset($data['menu_order'])?$data['menu_order']:'');
                        //mk_hcheckbox("data[is_left_banner_url]",_l('Left banner ',$this),(isset($data['is_left_banner_url']) && $data['is_left_banner_url']==1)?1:null);
                        mk_hcheckbox_onOff("data[public]",_l('public',$this),(isset($data['public']) && $data['public']==1)?1:null);
                        mk_hcheckbox_onOff("data[is_default]",_l('Default tab',$this),(isset($data['is_default']) && $data['is_default']==1)?1:null);
                        ?>
                    </div>
                    <div class="card-footer">
                        <?php
                        mk_hsubmit(_l('Submit',$this),$base_url."edit".$page,_l('Cancel',$this));
                        ?>
                    </div>
                    <?php
                    mk_closeform();
                    ?>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-12">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title"><?=_l("Items list",$this)?></h3>
                    </div>
                    <div class="card-body p-0">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th><?=_l("Number",$this)?></th>
                                <th><?=_l("Name",$this)?></th>
                                <th><?=_l("Icon",$this)?></th>
                                <th><?=_l("order",$this)?></th>
                                <th><?=_l("public",$this)?></th>
                                <th><?=_l("default tab",$this)?></th>
                                <th><?=_l('Action',$this)?></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i=0; foreach($data_list as $item){ $i++; ?>
                                <tr class="gradeX">
                                    <td><?php echo $i; ?>.</td>
                                    <td><?=$item["menu_name"]?></td>
                                    <td class="text-center"><span class="fa <?=$item["menu_icon"]?> fa-2x"></span> </td>
                                    <td><?=$item["menu_order"]?></td>
                                    <td><i class="fa <?=(isset($item["public"]) && $item["public"]==1)?"fa-check":"fa-minus-circle"?>"></i></td>
                                    <td><i class="fa <?=(isset($item["is_default"]) && $item["is_default"]==1)?"fa-check":"fa-minus-circle"?>"></i></td>
                                    <td style="width: 100px">
                                        <a href="<?=$base_url?>edit<?=$page?>/<?=$item["menu_id"]?>" class="btn btn-danger btn-sm" title="<?=_l('Edit',$this)?>"><i title="<?=_l('Edit',$this)?>" class="fa fa-edit"></i></a>
                                        <a href="<?=$base_url?>delete<?=$page?>/<?=$item["menu_id"]?>" class="btn btn-primary btn-sm" title="<?=_l('Delete',$this)?>"><i title="<?=_l('Delete',$this)?>" class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <?php if(isset($item['sub_menu_data']) && count($item['sub_menu_data'])!=0){ ?>
                                    <?php $j=0; foreach($item['sub_menu_data'] as $item2){ $j++; ?>
                                        <tr class="gradeX" style="font-style: italic;">
                                            <td><?php echo $i; ?>-<?php echo $j; ?>.</td>
                                            <td><?=$item2["menu_name"]?></td>
                                            <td class="text-center"><span class="fa <?=$item2["menu_icon"]?> fa-2x"></span> </td>
                                            <td><?=$item2["menu_order"]?></td>
                                            <td><i class="fa <?=(isset($item2["public"]) && $item2["public"]==1)?"fa-check":"fa-minus-circle"?>"></i></td>
                                            <td><i class="fa <?=(isset($item2["is_default"]) && $item2["is_default"]==1)?"fa-check":"fa-minus-circle"?>"></i></td>

                                            <td style="width: 100px">
                                                <a href="<?=$base_url?>edit<?=$page?>/<?=$item2["menu_id"]?>" class="btn btn-danger btn-sm" title="<?=_l('Edit',$this)?>"><i style="width: 3px!important;" title="<?=_l('Edit',$this)?>" class="fa fa-edit"></i></a>
                                                <a href="<?=$base_url?>delete<?=$page?>/<?=$item2["menu_id"]?>" class="btn btn-primary btn-sm" title="<?=_l('Delete',$this)?>"><i style="width: 3px!important;" title="<?=_l('Delete',$this)?>" class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                <?php } ?>
                            <?php } ?>

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>