
<?php
if(isset($data) && count($data)!=0){ ?>
<section class="about_part section_bg section_padding">
    <div class="container">
        <?php foreach($data["body"] as $item){
            $content_class = "col-lg-12 col-md-12";
            $pic_class = "";
            if(isset($item['image']) && $item['image']!="") {
                $pic_class = "col-md-6 col-lg-6";
                $content_class = "col-lg-5 col-md-5";
            }
            ?>
        <div class="row align-items-center justify-content-between">
                <?php if(isset($item['image_position']) && $item['image_position']==2){ ?>
                    <div class="<?=$content_class?>">
                        <div class="about_text">
                            <h2><?=$item['name']?></h2>
                            <h4><?=$item['description']?></h4>
                        </div>
                    </div>
                    <?php if($pic_class!=""){ ?>
                        <div class="<?=$pic_class?>">
                            <div class="about_img">
                                <?php
                                if(isset($item['image']) && $item['image']!=""){ ?>
                                    <img src="<?=base_url().$item['image']?>" alt="<?=$item['name']?>" title="<?=$item['name']?>" style="width: 100%" />
                                <?php }?>
                            </div>
                        </div>
                    <?php } ?>
                <?php }
                elseif(isset($item['image_position']) && $item['image_position']==1){ ?>
                    <?php if($pic_class!=""){ ?>
                        <div class="<?=$pic_class?>">
                            <div class="about_img">
                                <?php
                                if(isset($item['image']) && $item['image']!=""){ ?>
                                    <img src="<?=base_url().$item['image']?>" alt="<?=$item['name']?>" title="<?=$item['name']?>" style="width: 100%" />
                                <?php }?>
                            </div>
                        </div>
                    <?php } ?>
                    <div class="<?=$content_class?>">
                        <div class="about_text">
                            <h2><?=$item['name']?></h2>
                            <h4><?=$item['description']?></h4>
                        </div>
                    </div>

                <?php }
                else{ ?>
                    <div class="col-md-12 col-lg-12">
                        <div class="about_text">
                            <h2><?=$item['name']?></h2>
                            <h4><?=$item['description']?></h4>
                        </div>
                    </div>
                <?php }
                ?>
            </div>
        <?php } ?>
    </div>
</section>
<?php } ?>




