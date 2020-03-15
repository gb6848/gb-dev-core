<!--================Blog Area =================-->
<section class="blog_area single-post-area section_padding">
<div class="container">
<div class="row">
<div class="col-lg-8 posts-list">
<div class="single-post">
    <div class="feature-img">
        <img class="img-fluid" src="<?=base_url().$data['image']?>" alt="">
    </div>
    <div class="blog_details">
        <h2><?=$data['name']?>
        </h2>
        <ul class="blog-info-link mt-3 mb-4">
            <!--<li><a href="#"><i class="far fa-user"></i> Travel, Lifestyle</a></li>-->
            <?php if(isset($number_of_all_comments) && isset($number_of_all_comments[0])){ ?>
                <li class="comments col-lg-12 col-md-12 col-6"><a href="#"><i class="far fa-comments"></i> <?=$number_of_all_comments[0]["all_comments"]?> <?=_l("Comments",$this)?></a></li>
            <?php } ?>
        </ul>
        <p class="excert">
            <?=$data['description']?>
        </p>

    </div>
</div>
<div class="navigation-top">
    <!--<div class="d-sm-flex justify-content-between text-center">
        <p class="like-info"><span class="align-middle"><i class="far fa-heart"></i></span> Lily and 4
            people like this</p>
        <div class="col-sm-4 text-center my-2 my-sm-0">
             <p class="comment-count"><span class="align-middle"><i class="far fa-comment"></i></span> 06 Comments</p>
        </div>
        <ul class="social-icons">
            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
            <li><a href="#"><i class="fab fa-behance"></i></a></li>
        </ul>
    </div>-->
    <div class="navigation-area">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">

                <?php if(isset($previous_blog) && isset($previous_blog[0])){
                    ?>
                    <div class="detials">
                        <a href="<?=base_url().$lang?>/extension/<?=$previous_blog[0]["extension_id"]?>"  class="primary-btn"><i class="fa fa-angle-left" aria-hidden="true"></i> <span class="hide-text"><?=_l("Previous Post",$this)?></span></a>
                        <a href="#">
                            <h4><?=$previous_blog[0]["name"]?></h4>
                        </a>
                    </div>
                <?php } ?>
            </div>
            <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">

                <?php if(isset($next_blog) && isset($next_blog[0])){
                    ?>
                    <div class="detials">
                        <a href="<?=base_url().$lang?>/extension/<?=$next_blog[0]["extension_id"]?>"  class="primary-btn"><span class="hide-text"><?=_l("Next Post",$this)?></span> <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        <a href="#">
                            <h4><?=$next_blog[0]["name"]?></h4>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>


    <div class="comments-area">
        <h4><?=_l("Comments",$this)?></h4>
        <p class="t-info"><?=_l("Please send us your feedback",$this)?></p>

        <?php if(isset($comments) && count($comments)!=0){ $i=0; ?>
            <?php foreach($comments as $item){ $i++; ?>
                <div class="comment-list">
                    <div class="single-comment justify-content-between d-flex">
                        <div class="user justify-content-between d-flex">
                            <div class="thumb">
                                <i class="fa fa-comment-o"></i>
                            </div>
                            <div class="desc">
                                <h5><a href="#"><?=$item["username"]?></a></h5>
                                <p class="date"><?= date('d.m.Y H:i', $item["created_date"])?></p>
                                <p class="comment">
                                    <?=$item["content"]?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <?php if(isset($item["sub_comments"]) && count($item["sub_comments"]) !=0 ){ ?>
                    <?php foreach($item["sub_comments"] as $sub_item){ ?>
                        <div class="comment-list left-padding">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <i class="fa fa-comments-o"></i>
                                    </div>
                                    <div class="desc">
                                        <h5><?=$sub_item["username"]?></h5>
                                        <p class="date"><?= date('d.m.Y H:i', $sub_item["created_date"])?></p>
                                        <p class="comment">
                                            <?=$sub_item["content"]?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php } ?>
                <?php } ?>
            <?php } ?>
        <?php } ?>
    </div>

    <?php if(isset($_SESSION["user"])){ ?>
        <h4><?=_l("Leave a Comment",$this)?></h4>
        <div class="comment-form">
            <label for="comment_text" class="control-label"> <i class="fa fa-user"></i> <?=$_SESSION["user"]["username"]?></label>
            <div class="row">
                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-8">
                    <div class="form-group">
                        <textarea id="comment_text" data-ext-id="<?=$data["extension_id"]?>" type="text" class="form-control col-lg-12" placeholder="<?=_l("Type a message here",$this)?>..." rows="5"></textarea>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-4">
                    <a href="javascript:;" id="comment_send" class="primary-btn"><?=_l("Send",$this)?></a>
                </div>
            </div>
        </div>
    <?php } ?>
    <?php if(isset($_SESSION["user"])){ ?>
        <script>
            $("#comment_text").keyup(function(){
                var thistext = $(this).val(); if(thistext.match(/\n/g)==null){ $(this).attr('rows',5); }else{ $(this).attr('rows',parseInt(thistext.match(/\n/g).length)+1); }
            });
            $("#comment_send").click(function(){
                $("#comment_text").parent().removeClass("has-error").find(".help-block").remove();
                $.post("<?=base_url().$lang?>/ajax/addcomment",{"comment":$("#comment_text").val(),"ext_id":$("#comment_text").attr("data-ext-id")},function(msg){
                    eval("var data = " + msg);
                    if(data.status == 1){
                        $("#comment_text").val("");
                        $("#comment_text").parent().addClass("has-success").append("<p class='help-block'>" + data.success +"</p>");
                    }else{
                        $("#comment_text").parent().addClass("has-error").append("<p class='help-block'>" + data.errors +"</p>");
                    }
                });
            });
        </script>
    <?php } ?>
</div>

    <div class="col-lg-4 sidebar-widgets">
        <div class="widget-wrap">
            <div class="single-sidebar-widget popular-post-widget">
                <h4 class="popular-title"><?=_l("Popular Posts",$this)?></h4>
                <div class="container">
                    <?php if(isset($relations) && count($relations)!=0){ ?>
                        <?php foreach($relations as $item){ ?>
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
                                                <div class="col-md-12">
                                                    <h3><?=$item['name']?></h3>
                                                    <div class="date-description"><?=date("d.m.Y | l H:i",$item['created_date'])?></div>
                                                    <hr>
                                                    <?=substr_string($item['description'])?>
                                                </div>
                                                <div class="col-md-12" style="text-align: center;padding-bottom: 15px">
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
</div>
</div>
</section>
<!--================ Blog Area end =================-->