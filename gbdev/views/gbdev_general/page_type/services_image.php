<?php if(isset($data) && $data!=0){ ?>
    <section class="our_industries padding_top">
        <div class="container">
            <div class="row">
                <div class="col-xl-3">
                    <div class="section_tittle">
                        <h2>Naše storitve</h2>
                    </div>
                </div>
            </div>
            <div class="row">

    <?php foreach($data["body"] as $item){ ?>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_industries">
                        <img alt="" height="240" src="<?=base_url().$item['image']?>">
                        <h3> <a href="#"> <?=$item['name']?></a></h3>
                        <p> <?=$item['description']?></p>
                    </div>
                </div>
    <?php } ?>

            </div>
        </div>
    </section>
<?php } ?>