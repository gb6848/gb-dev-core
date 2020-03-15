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
<!-- Start post-content Area -->
<section class="post-content-area single-post-area">

<div class="container">
<div class="row">
<div class="col-lg-8 posts-list">
<?php if(isset($data) && $data!=0){ ?>
<div class="single-post row">
    <div class="col-lg-12">
        <div class="feature-img">
            <img class="img-fluid" src="<?=base_url().$data['image']?>" alt="">
        </div>
    </div>
    <div class="col-lg-3  col-md-3 meta-details">
        <div class="user-details row">
            <p class="date col-lg-12 col-md-12 col-6"><a href="#"><?=date("d.m.Y",$data['created_date'])?></a> <span class="lnr lnr-calendar-full"></span></p>
           <?php if(isset($number_of_all_comments) && isset($number_of_all_comments[0])){ ?>
               <p class="comments col-lg-12 col-md-12 col-6"><a href="#"><?=$number_of_all_comments[0]["all_comments"]?> <?=_l("Comments",$this)?></a> <span class="lnr lnr-bubble"></span></p>
           <?php } ?>
        </div>
    </div>
    <div class="col-lg-9 col-md-9">
        <h3 class="mt-20 mb-20"><?=$data['name']?></h3>
        <p class="excert">
            <?=$data['description']?>
        </p>
    </div>
</div>

<?php } ?>

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
</div>
</div>
</div>
</section>
<!-- End post-content Area -->