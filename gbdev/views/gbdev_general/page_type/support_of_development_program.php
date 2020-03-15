
<?php if(isset($data) && count($data)!=0){ ?>
    <div class="container" style="margin-top: 70px;">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <?php foreach($data["body"] as $item){ ?>
                    <h4 data-aos="fade-up">
                        <?php if($item['extension_icon']!=""){ ?><i class="fa <?=$item['extension_icon']?>"></i><?php } ?>
                        <?=$item['name']?>
                    </h4>
                    <div data-aos="fade-up">
                        <?=$item['description']?>
                    </div>
                    <br>
                <?php } ?>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"  data-aos="fade-up">
                <?php if($data["avatar"]!=""){ ?><img style="width:100%;" src="<?=base_url().$data["avatar"]?>"><?php } ?>
            </div>
        </div>
    </div>
<?php } ?>