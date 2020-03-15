<!-- portfolio_part start-->
<section class="portfolio_part section_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card-columns">
                    <div class="card tittle">
                        <blockquote class="blockquote mb-0">
                            <h2>Nedavno zaključeni <br>
                                Projekti</h2>
                        </blockquote>
                    </div>
                    <?php foreach($data["body"] as $item){

                        ?>

                        <div class="card ">
                            <div class="card_iner overlay">
                                <img  src="<?=base_url().$item["image"]?>" class="card-img-top"/>
                                <div class="card-body">
                                    <h5 class="card-title"><?=$item['name']?></h5>
                                    <p class="card-text"><?=$item["offer_basic_text"]?></p>

                                    <?php if(isset($item["enabled_read_more"]) && $item["enabled_read_more"]==1){ ?>
                                        <a class="portfolio_btn" href="<?=base_url().$lang?>/extension/<?=$item["extension_id"]?>"><?=_l("Read more",$this)?> <img alt="" src="<?=base_url()?>/assets/gbdev_general/img/right-arrow.svg"></a>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- portfolio_part part end-->