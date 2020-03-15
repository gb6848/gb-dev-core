<?php if(isset($data) && count($data)!=0){ ?>
    <div class="container" style="margin-top: 120px;margin-bottom: 50px;">
        <?php foreach($data["body"] as $item){ ?>
            <div class="row align-items-center">

            <?php if(isset($item['image_position']) && $item['image_position']==2){ ?>
                <div class="col-lg-5 col-md-6">
                    <div class="section-title relative">
                        <?php if(isset($item['name'])){ ?>
                            <h1>
                                <?=$item['name']?><br>
                            </h1>
                        <?php } ?>
                        <?=$item['description']?>
                    </div>
                </div>
                <div class="offset-lg-1 col-lg-6 col-md-6">
                    <div class="">
                        <?php
                        if(isset($item['image']) && $item['image']!=""){ ?>
                            <img class="img-fluid" src="<?=base_url().$item['image']?>" alt="<?=$item['name']?>" title="<?=$item['name']?>" style="width: 100%" />
                        <?php }?>
                    </div>
                </div>
            <?php }
        elseif(isset($item['image_position']) && $item['image_position']==1){ ?>
            <div class="col-lg-5 col-md-6">
                <div class="">
                    <?php
                    if(isset($item['image']) && $item['image']!=""){ ?>
                        <img class="img-fluid" src="<?=base_url().$item['image']?>" alt="<?=$item['name']?>" title="<?=$item['name']?>" style="width: 100%" />
                    <?php }?>
                </div>
            </div>
            <div class="offset-lg-1 col-lg-6 col-md-6">
                <div class="section-title relative">
                    <?php if(isset($item['name']) && $item['name'] !=""){ ?>
                        <h1>
                            <?=$item['name']?><br>
                        </h1>
                    <?php } ?>

                    <?=$item['description']?>
                </div>
            </div>
            <?php }
            else{
                ?>
                <div class="col-lg-12 col-md-12">
                    <div class="section-title relative">
                        <?php if(isset($item['name'])){ ?>
                            <h1>
                                <?=$item['name']?><br>
                            </h1>
                        <?php } ?>
                        <?=$item['description']?>
                    </div>
                </div>
                <?php
            }
            ?>
            </div>
        <?php } ?>
    </div>
<?php } ?>