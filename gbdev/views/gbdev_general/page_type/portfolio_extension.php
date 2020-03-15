<section class="project_details section_padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-sm-12">
                <div class="project_details_img" style="padding: 6px;     background-color: #EBEBEB;">
                        <?php if(isset($data["image"]) && $data["image"] !=""){  ?>
                            <img src="<?=base_url()?><?=(isset($data['image']) && $data['image']!="")?$data['image']:$settings['default_image']?>" alt="<?=$data['name']?>" title="<?=$data['name']?>" style="width:100%;"/>
                        <?php } ?>
                </div>
            </div>
            <div class="col-lg-7 col-sm-8">
                <div class="project_details_content">
                    <?=$data['description']?>
                </div>
            </div>
            <!--<div class="col-lg-3 col-sm-4">
                <div class="project_details_widget">
                    <div class="single_project_details_widget">
                        <span class="ti-time"></span>
                        <h5>Start Time</h5>
                        <p>09:00 AM</p>
                        <h6>Friday, Mar 10, 2019</h6>
                    </div>
                    <div class="single_project_details_widget">
                        <span class="ti-check-box"></span>
                        <h5>Start Time</h5>
                        <p>09:00 AM</p>
                        <h6>Wed, Feb 06, 2019</h6>
                    </div>
                    <div class="single_project_details_widget">
                        <span class="ti-location-pin"></span>
                        <h5>Start Time</h5>
                        <p>09:00 AM</p>
                        <h6>Wed, Feb 06, 2019</h6>
                    </div>
                </div>
            </div>-->
        </div>

    </div>
</section>