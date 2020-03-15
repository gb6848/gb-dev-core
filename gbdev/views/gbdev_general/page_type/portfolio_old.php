
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

@media screen and (min-width:1000px) {
    h1 {
        font-size: 2.2em;
    }
    #container {
        width: 50%;
    }
}

.one-edge-shadow {
    -webkit-box-shadow: 0 8px 6px -6px black;
    -moz-box-shadow: 0 8px 6px -6px black;
    box-shadow: 0 8px 6px -6px black;
}
.shadow {
    -moz-box-shadow:    inset 0 0 10px #000000;
    -webkit-box-shadow: inset 0 0 10px #000000;
    box-shadow:         inset 0 0 10px #000000;
}
ul{
    list-style-type: none;
}
ul.list{
    padding-left: 15px;
    padding-right: 15px;
}
ul.list li{

}
li span + span:before{
    content: "......................";
    white-space: nowrap;
}
</style>
<?php if(isset($data) && $data!=0){
    //https://codepen.io/davidicus/pen/emgQKJ
    // https://codepen.io/emanuelgsouza/pen/YVJOZo -> button effect
    //https://css-tricks.com/snippets/css/css-box-shadow/
    $show_other_items = false;
    $other_data = (array) null;
    ?>

    <div class="container" style="margin-top: 70px;">
        <div class="row">
            <?php foreach($data["body"] as $item){
                if ( isset($item["is_other"]) &&  $item["is_other"] ==1) { // skip even members
                    array_push($other_data, $item);
                    continue;
                }
                ?>

            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 " data-aos="flip-up" style="margin-bottom: 30px;">
                <article class="panel portfolio-effect-item shadow">
                    <div class="pro-img-box">
                        <a class="fancybox" rel="group<?=$data["page_id"]?>" title="<?=$item['name']?>" href="<?=base_url().$lang?>/extension/<?=$item["extension_id"]?>">
                            <!--<img src="<?=base_url()?><?=image($item['image'],$settings['default_image'],300,200)?>" alt="<?=$item['name']?>" title="<?=$item['name']?>" style="width:100%;"/>-->
                            <?php if(isset($item["image"]) && $item["image"] !=""){  ?>
                                <img style="height: 250px;" src="<?=base_url().$item["image"]?>" class="img-fluid"/>
                            <?php } ?>
                        </a>
                    </div>
                    <div class="panel-body">
                        <div class="row" style="text-align: center!important;">
                            <div class="col-lg-12 co-md-12 col-sm-12 col-xs-12" style=" height: 66px; text-align:center">
                                <h4><?=$item['name']?></h4>
                            </div>
                            <?php if(isset($item["price"]) && $item["price"] !=0){?>
                                <div class="col-lg-12 co-md-12 col-sm-12 col-xs-12" style="text-align: center">
                                    <h3><?=_l("Price",$this)?> <?=$item["price"]?>€</h3>
                                </div>
                            <?php } ?>
                            <?php if(isset($item["offer_basic_text"]) && $item["offer_basic_text"] !=""){?>
                                <div class="col-lg-12 co-md-12 col-sm-12 col-xs-12" style="text-align: center">
                                    <h3><?=$item["offer_basic_text"]?></h3>
                                </div>
                            <?php } ?>

                            <div class="col-lg-12 co-md-12 col-sm-12 col-xs-12" style="text-align: center!important;">
                                <div class="button" id="button-6">
                                    <div id="spin"></div>
                                    <a href="<?=base_url().$lang?>/extension/<?=$item["extension_id"]?>"><?=_l("View more",$this)?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <?php } ?>
        </div>
        <?php if(isset($other_data) &&  !empty($other_data)){ ?>
        <div class="row">
            <div class="col-md-12">
                <h3><?=_l("Other offer",$this)?></h3>
                <hr>
            </div>
        </div>
           <div class="row">
               <?php foreach($other_data as $item){ ?>
                   <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 " data-aos="flip-up" style="margin-bottom: 30px;">
                       <article class="panel portfolio-effect-item shadow">
                           <div class="pro-img-box">
                               <a class="fancybox" rel="group<?=$data["page_id"]?>" title="<?=$item['name']?>" href="<?=base_url().$lang?>/extension/<?=$item["extension_id"]?>">
                                   <!--<img src="<?=base_url()?><?=image($item['image'],$settings['default_image'],300,200)?>" alt="<?=$item['name']?>" title="<?=$item['name']?>" style="width:100%;"/>-->
                                   <?php if(isset($item["image"]) && $item["image"] !=""){  ?>
                                       <img style="height: 250px;" src="<?=base_url().$item["image"]?>" class="img-fluid"/>
                                   <?php } ?>
                               </a>
                           </div>
                           <div class="panel-body">
                               <div class="row" style="text-align: center!important;">
                                   <div class="col-lg-12 co-md-12 col-sm-12 col-xs-12" style=" height: 66px; text-align:center">
                                       <h4><?=$item['name']?></h4>
                                   </div>
                                   <?php if(isset($item["price"]) && $item["price"] !=0){?>
                                       <div class="col-lg-12 co-md-12 col-sm-12 col-xs-12" style="text-align: center">
                                           <h3><?=_l("Price",$this)?> <?=$item["price"]?>€</h3>
                                       </div>
                                   <?php } ?>

                                   <div class="col-lg-12 co-md-12 col-sm-12 col-xs-12" style="text-align: center!important;">
                                       <div class="button" id="button-6">
                                           <div id="spin"></div>
                                           <a href="<?=base_url().$lang?>/extension/<?=$item["extension_id"]?>"><?=_l("View more",$this)?></a>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </article>
                   </div>
               <?php } ?>
           </div>


    <?php } ?>

    </div>

<?php } ?>