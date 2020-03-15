
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12">
                <div class="card card-info">
                    <div class="card-header">
                        <?php if(isset($data['language_name'])){ ?>
                            <?php echo _l("Edit File",$this); ?>:
                            <b>

                                <?php if(isset($languages) && count($languages)!=0){ ?>
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                        <i class="fa fa-cog"></i><?php echo $data['language_name']; ?> <span class="caret"></span>
                                    </a>
                                    <div class="dropdown-menu"  x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 40px, 0px);">
                                        <?php foreach($languages as $item){ ?>
                                            <?php if($item['language_id']!=$data['language_id']){ ?>
                                                <a style=" color: #000000!important;" class="dropdown-item" tabindex="-1" href="<?php echo $base_url."edit_lang_file/".$item['language_id']."/".($file_name!=$data['code']?$file_name:$item['code']); ?>"> <i class="fa fa-cog"></i>  <?php echo $item['language_name']; ?></a>
                                            <?php } ?>
                                        <?php } ?>
                                    </div>
                                <?php }else{ ?>
                                    <?php echo $data['language_name']; ?>
                                <?php } ?>

                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                    <i class="fa fa-cog"></i><?php echo (isset($file_name)?'/'.$file_name:''); ?>_lang.php <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu"  x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 40px, 0px);">
                                    <?php if($file_name!=$data['code']){ ?>
                                        <a style=" color: #000000!important;" class="dropdown-item" tabindex="-1" href="<?php echo $base_url."edit_lang_file/".$data['language_id']."/".$data['code']; ?>"><?php echo $data['code']; ?>_lang.php (<?php echo _l('Frontend',$this); ?>)</a>
                                    <?php } ?>
                                    <?php if($file_name!='backend'){ ?>
                                        <a style=" color: #000000!important;" class="dropdown-item" tabindex="-1" href="<?php echo $base_url."edit_lang_file/".$data['language_id']."/backend"; ?>">backend_lang.php (<?php echo _l('Admin Side',$this); ?>)</a>
                                    <?php } ?>
                                </div>

                            </b>
                        <?php }else{ ?>
                            <?php echo _l("Add", $this); ?>
                        <?php } ?>
                    </div>
                    <?php
                    mk_hpostform($base_url."edit_lang_file".(isset($data['language_id'])?"/".$data['language_id']:"").(isset($file_name)?"/".$file_name:""));
                    ?>
                    <div class="card-body p-0">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th><?php echo _l('Language Key',$this); ?></th>
                                <th><?php echo _l('Show in Website',$this); ?></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            if(isset($lang_list) && count($lang_list)!='') {
                                $i = 0;
                                ?>
                                <?php foreach ($lang_list as $key => $value) {
                                    $i++; ?>
                                    <tr>
                                        <td style="width: 50%;">
                                            <label style="display: block;" for="data<?php echo $i; ?>"
                                                   class="control-label"><?php echo $key; ?></label>
                                        </td>
                                        <td>
                                            <input
                                                style="direction: <?php echo (isset($data['rtl']) && $data['rtl'] == 1) ? 'rtl' : 'ltr'; ?>;"
                                                class="form-control" id="data<?php echo $i; ?>" name="data[]"
                                                type="text" value="<?php echo $value ?>"/>
                                        </td>
                                    </tr>
                                <?php
                                }
                            } ?>
                            </tbody>
                        </table>
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
