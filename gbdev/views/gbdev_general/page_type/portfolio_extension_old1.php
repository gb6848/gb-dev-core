
<style>

/* Button Styles */

.button {
    display: inline-flex;
    height: 40px;
    width: 150px;
    border: 2px solid #BFC0C0;
    margin: 20px 20px 20px 20px;
    color: #BFC0C0;
    text-transform: uppercase;
    text-decoration: none;
    font-size: .8em;
    letter-spacing: 1.5px;
    align-items: center;
    justify-content: center;
    overflow: hidden;
}

a {
    color: #BFC0C0;
    text-decoration: none;
    letter-spacing: 1px;
}


/* First Button */

#arrow-hover {
    width: 15px;
    height: 10px;
    position: absolute;
    transform: translateX(60px);
    opacity: 0;
    -webkit-transition: all .25s cubic-bezier(.14, .59, 1, 1.01);
    transition: all .15s cubic-bezier(.14, .59, 1, 1.01);
    margin: 0;
    padding: 0 5px;
}

a#button-1:hover img {
    width: 15px;
    opacity: 1;
    transform: translateX(50px);
}


/* Second Button */

#button-2 {
    position: relative;
    overflow: hidden;
    cursor: pointer;
}

#button-2 a {
    position: relative;
    transition: all .35s ease-Out;
}

#slide {
    width: 100%;
    height: 100%;
    left: -200px;
    background: #BFC0C0;
    position: absolute;
    transition: all .35s ease-Out;
    bottom: 0;
}

#button-2:hover #slide {
    left: 0;
}

#button-2:hover a {
    color: #2D3142;
}


/* Third Button */

#button-3 {
    position: relative;
    overflow: hidden;
    cursor: pointer;
}

#button-3 a {
    position: relative;
    transition: all .45s ease-Out;
}

#circle {
    width: 0%;
    height: 0%;
    opacity: 0;
    line-height: 40px;
    border-radius: 50%;
    background: #BFC0C0;
    position: absolute;
    transition: all .5s ease-Out;
    top: 20px;
    left: 70px;
}

#button-3:hover #circle {
    width: 200%;
    height: 500%;
    opacity: 1;
    top: -70px;
    left: -70px;
}

#button-3:hover a {
    color: #2D3142;
}


/* Fourth Button */

#button-4 {
    position: relative;
    overflow: hidden;
    cursor: pointer;
}

#button-4 a {
    position: relative;
    transition: all .45s ease-Out;
}

#underline {
    width: 100%;
    height: 2.5px;
    margin-top: 15px;
    align-self: flex-end;
    left: -200px;
    background: #BFC0C0;
    position: absolute;
    transition: all .3s ease-Out;
    bottom: 0;
}

#button-4:hover #underline {
    left: 0;
}


/* Fifth Button */

#button-5 {
    position: relative;
    overflow: hidden;
    cursor: pointer;
}

#button-5 a {
    position: relative;
    transition: all .45s ease-Out;
}

#translate {
    transform: rotate(50deg);
    width: 100%;
    height: 250%;
    left: -200px;
    top: -30px;
    background: #BFC0C0;
    position: absolute;
    transition: all .3s ease-Out;
}

#button-5:hover #translate {
    left: 0;
}

#button-5:hover a {
    color: #2D3142;
}


/* Sixth Button */

#button-6 {
    position: relative;
    overflow: hidden;
    cursor: pointer;
}

#button-6 a {
    position: relative;
    transition: all .45s ease-Out;
}

#spin {
    width: 0;
    height: 0;
    opacity: 0;
    left: 70px;
    top: 20px;
    transform: rotate(0deg);
    background: none;
    position: absolute;
    transition: all .5s ease-Out;
}

#button-6:hover #spin {
    width: 200%;
    height: 500%;
    opacity: 1;
    left: -70px;
    top: -70px;
    background: #BFC0C0;
    transform: rotate(80deg);
}

#button-6:hover a {
    color: #2D3142;
}


/* Seventh Button */

#button-7 {
    position: relative;
    overflow: hidden;
    cursor: pointer;
}

#button-7 a {
    position: relative;
    left: 0;
    transition: all .35s ease-Out;
}

#dub-arrow {
    width: 100%;
    height: 100%;
    background: #BFC0C0;
    left: -200px;
    position: absolute;
    padding: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all .35s ease-Out;
    bottom: 0;
}

#button-7 img {
    width: 20px;
    height: auto;
}

#button-7:hover #dub-arrow {
    left: 0;
}

#button-7:hover a {
    left: 150px;
}

.shadow {
    -moz-box-shadow:    inset 0 0 10px #000000;
    -webkit-box-shadow: inset 0 0 10px #000000;
    box-shadow:         inset 0 0 10px #000000;
}
</style>
<div class="page-title" style="margin-top: 50px;">
    <div class="container">
        <h1><?php echo isset($title)?$title:""; ?></h1>
        <hr>
    </div>
</div>

<?php if(isset($data) && $data!=0){ ?>
    <div class="container">
        <div class="row">
            fsdfsdfsfdsf
            <div class="col-lg-8 col-md-8 col-sm-10 col-xs-12" data-aos="fade-up">
                <div class="col-md-12" style="padding: 6px;     background-color: #EBEBEB;">
                <?php if(isset($data["image"]) && $data["image"] !=""){  ?>
                    <img src="<?=base_url()?><?=(isset($data['image']) && $data['image']!="")?$data['image']:$settings['default_image']?>" alt="<?=$data['name']?>" title="<?=$data['name']?>" style="width:100%;"/>
                <?php } ?>
        </div>
    <?php if(isset($data["price"]) && $data["price"] != 0){
        ?>
            <div class="col-md-12" style="text-align: right;">
                <h3><?=_l("Price",$this)?> <?=$data["price"]?>€</h3>
            </div>
    <?php } ?>
                <div class="col-md-12">

                    <hr>
                    <?=$data['description']?>

                </div>

            </div>

            <div class="col-lg-4 sidebar-widgets">
                <div class="widget-wrap">
                    <div class="single-sidebar-widget popular-post-widget">
                        <h4 class="popular-title"><?=_l("Popular Posts",$this)?></h4>
                        <div class="container">
                            <?php if(isset($relations) && count($relations)!=0){ ?>
                                <?php foreach($relations as $item){
                                    if ( isset($item["is_other"]) &&  $item["is_other"] ==1) { // skip even members
                                        continue;
                                    }
                                    ?>
                                    <div class="row shadow" style="margin-bottom: 15px; margin-top: 15px;">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <article class="panel">
                                                <?php
                                                if(isset($item['image']) && $item['image']!=""){
                                                    ?>
                                                    <div class="pro-img-box">
                                                        <a title="<?=$item['name']?>" href="<?=base_url().$lang?>/extension/<?=$item['extension_id']?>"><img src="<?=base_url()?><?=image($item['image'],$settings['default_image'],300,200)?>" alt="<?=$item['name']?>" title="<?=$item['name']?>" style="width:100%;"/></a>
                                                    </div>
                                                <?php }
                                                ?>

                                                <div class="panel-body">
                                                    <div class="row">
                                                        <div class="col-md-12" style="text-align: center;">
                                                            <h4><?=$item['name']?></h4>
                                                            <hr>
                                                        </div>
                                                        <?php if(isset($item["price"]) && $item["price"] !=0 ){ ?>
                                                            <div class="col-md-12" style="text-align: center;">
                                                                <h3><?=_l("Price",$this)?> <?=$item['price']?>€</h3>
                                                            </div>
                                                        <?php }
                                                        ?>
                                                        <div class="col-md-12" style="text-align: right;">
                                                            <div class="button" id="button-6">
                                                                <div id="spin"></div>
                                                                <a href="<?=base_url().$lang?>/extension/<?=$item["extension_id"]?>"><?=_l("Read More",$this)?></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>

                                        </div>
                                    </div>
                                <?php } ?>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
<!--
            <div class="col-lg-4 col-md-4 col-sm-2 col-xs-12" >
                <?php if(isset($relations) && count($relations)!=0){ ?>
                    <div class="row">
                        <?php foreach($relations as $item){ ?>
                            <article class="shadow" style="margin-bottom: 25px;">

                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" >
                                        <a title="<?=$item['name']?>" href="<?=base_url().$lang?>/extension/<?=$item['extension_id']?>"><img src="<?=base_url()?><?=image($item['image'],$settings['default_image'],300,200)?>" alt="<?=$item['name']?>" title="<?=$item['name']?>" style="width:100%;"/></a>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="text-align: center">
                                        <h5 style="padding-top: 10px;"><?=$item['name']?></h5>
                                        <?php if(isset($item["price"])){ ?>
                                            <h4 style="padding-top: 10px;"><?=_l("Price",$this)?> <?=$item['price']?>€</h4>
                                        <?php }
                                        ?>

                                        <div class="button" id="button-6">
                                            <div id="spin"></div>
                                            <a href="<?=base_url().$lang?>/extension/<?=$item["extension_id"]?>"><?=_l("View more",$this)?></a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
            -->
        </div>
    </div>
<?php } ?>