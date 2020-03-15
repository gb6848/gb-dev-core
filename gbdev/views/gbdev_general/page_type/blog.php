<!--::catagory_post start::-->
<section class="catagory_post">
    <div class="container">
        <div class="row">
            <div class="col-xl-4">
                <div class="section_tittle">
                    <h2><?=_l('Latest From Our Blog page',$this);?></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php if(isset($data) && $data!=0){ ?>
            <?php foreach($data["body"] as $item){ ?>
                    <div class="col-sm-6 col-lg-4">
                        <div class="single_catagory_post post_2">
                            <div class="category_post_img">
                                <img src="<?=base_url().$item['image']?>" alt="">
                                <!--<a href="blog.html" class="category_btn">chemical research</a>-->
                            </div>
                            <div class="post_text_1 pr_30">
                                <p><!--<span> By User</span> /--> <?=date("d.m.Y ",$item['created_date'])?></p>
                                <a href="<?=base_url().$lang?>/extension/<?=$item["extension_id"]?>">
                                    <h3><?=$item['name']?></h3>
                                </a>
                                <div class="post_icon">
                                    <ul>
                                       <?php if (isset($data["comments_dic"]) && array_key_exists($item["extension_id"],$data["comments_dic"]))
                                        {?>
                                            <li><i class="ti-comment"></i><?=$data["comments_dic"][$item["extension_id"]]?> <?=_l("Comments",$this)?> Comment</li>
                                        <?php } ?>
                                        <!--<li><i class="ti-bookmark"></i>Petrolium, Gas</li>-->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php }} ?>
        </div>
    </div>
</section>
<!--::catagory_post end::-->