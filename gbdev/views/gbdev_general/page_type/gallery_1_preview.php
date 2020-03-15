<!--================ Gallery Area =================-->
<link href ="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" rel = "stylesheet" crossorigin="anonymous">
<script src = "https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js" crossorigin="anonymous"></script>

<style>
    .gallery-area {
        /* padding: 240px 0 90px; */
        padding: 0!important;
        margin-bottom: 100px;
    }
    /* CSS for Lightbox */
    .imggallery{
        max-height: 250px;
    }
    .ekko-lightbox{
        z-index: 222222!important;
    }
</style>

<section class="gallery-area">
    <div class="container">
        <div class="">
            <div class="row gallery-item">

                <?php


                if(isset($gallery_image) && count($gallery_image)!=0){
                    $is_md_ = "col-md-4";
                    $four_in_line = 1;
                    $six_in_line = 0;
                    $width =360;
                    $height = 200;

                    $index=0;
                    ?>
                    <?php for($i =0; $i< count($gallery_image);$i++){

                        ?>
                       <div class="<?=$is_md_?>">
                            <a href="<?=base_url().$gallery_image[$i]['image']?>"  data-toggle = "lightbox" data-gallery="gallery">
                                <div class="single-gallery-image" style="background: url(<?=base_url()?><?=image($gallery_image[$i]['image'],$settings['default_image'],$width,$height)?>);"></div>
                            </a>
                        </div>
<?php
                        if($four_in_line==1 && $six_in_line==0){
                            $is_md_ = "col-md-4";
                            if($index== 2){
                                $index =0;
                                $four_in_line = 0;
                                $six_in_line = 1;
                                $is_md_ = "col-md-6";
                                $width =550;
                                $height = 200;
                            }else{
                                $index++;
                            }
                        }else{
                            if($four_in_line==0 && $six_in_line==1){
                                $is_md_ = "col-md-6";
                                if($index == 1){
                                    $index =0;
                                    $four_in_line = 1;
                                    $six_in_line = 0;
                                    $is_md_ = "col-md-4";
                                    $width =360;
                                    $height = 200;
                                }else{
                                    $index++;
                                }
                            }
                        }

                        ?>

                    <?php
                    } ?>
                <?php } ?>

            </div>
        </div>
    </div>
</section>
<!--================ End Gallery Area =================-->

<script>
    $(document).on("click", '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });
</script>