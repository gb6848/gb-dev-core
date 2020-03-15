

<!-- Start post-content Area -->
<section class="post-content-area" style="margin-top: 70px;">
<div class="container">
<div class="row">
<div class="col-lg-12 posts-list">

    <?php if(isset($data) && $data!=0){ ?>
    <?php foreach($data["body"] as $item){ ?>
    <div class="single-post row">
        <div class="col-lg-3  col-md-3 meta-details">
            <div class="user-details row">
                <p class="date col-lg-12 col-md-12 col-6"><a href="<?=base_url().$lang?>/extension/<?=$item["extension_id"]?>"><?=date("d.m.Y ",$item['created_date'])?></a> <span class="lnr lnr-calendar-full"></span></p>
                <?php
                if (isset($data["comments_dic"]) && array_key_exists($item["extension_id"],$data["comments_dic"]))
                {?>
                    <p class="comments col-lg-12 col-md-12 col-6"><a href="<?=base_url().$lang?>/extension/<?=$item["extension_id"]?>"><?=$data["comments_dic"][$item["extension_id"]]?> <?=_l("Comments",$this)?></a> <span class="lnr lnr-bubble"></span></p>
                <?php } ?>
            </div>
        </div>
        <div class="col-lg-9 col-md-9 ">
            <div class="feature-img">
                <img class="img-fluid" src="q" alt="">
            </div>
            <a class="posts-title" href=<?=base_url().$lang?>/extension/<?=$item["extension_id"]?>">
                <h3><?=$item['name']?></h3>
            </a>
            <p class="excert">
                <?=substr_string($item['description'])?>
            </p>
            <a href="<?=base_url().$lang?>/extension/<?=$item["extension_id"]?>" class="primary-btn"><?=_l("Read More",$this)?></a>
        </div>
    </div>
        <?php } ?>
<?php } ?>

</div>

</div>
</div>
</section>
<!-- End post-content Area -->

<script>
    $(function(){
        var displayAll = 0;
        var lastofset = 0;
        $(window).scroll(function(){
            if ($(document).height() <= $(window).scrollTop() + $(window).height() && displayAll==0) {
                $("#loading").show();
                lastofset+=10;
                $.ajax({
                    url: "<?=base_url().$lang?>/page/<?=$data['article_id']?>?offset=" + lastofset + "&ajax"
                }).done(function(data) {
                    if(data!=""){
                        $("#ajax_load").before(data);
                    }else{
                        displayAll = 1;
                    }
                    $("#loading").hide();
                });
            }
        });
    });
</script>