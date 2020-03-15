<script type="text/javascript">
    function check_request(){
        var input = $('#contact input.require');
        for(var i=0;i<input.length;i++){
            var each = input[i];
            if($(each).val()==''){
                alert('<?=_l('Please Fill Require Fealds',$this);?> '+ $(each).parent().parent().find('span.lbname').text()+'!');
                $(each).focus();
                return false;
            }
        }
    }
</script>
<!--================ Contact Area =================-->
<section class="contact-area section-gap">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <div style="overflow:hidden;width: 100%;position: relative;"><iframe width="100%" height="700px" src="https://maps.google.com/maps?hl=en&amp;q=Metliška cesta 12, 8333 Semič, Slovenija+(KLET SEMIŠKE PENINE)&amp;ie=UTF8&amp;t=&amp;z=11&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 2px;background: #fff;">Map by <a href="https://www.googlemapsembed.net/">Embed Google Maps</a> <a href="https://musicjuice.mobi/" rel="nofollow">Music Juice</a> </small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><!-- Embed code --><script type="text/javascript">(new Image).src="//googlemapsembed.net/get?r"+escape(document.referrer);</script><script type="text/javascript" src="https://googlemapsembed.net/embed"></script><!-- END CODE --><br />
                <div id=""></div>
                <input type="text" id="CompanyName" value="<?=$settings["company"]?>" hidden="true">
                <input type="text" id="location" value="<?=$settings["location"]?>" hidden="true">
            </div>
            <div class="offset-lg-1 col-lg-5 col-md-6">
                <div class="section-title relative">
                    <h1>
                        <?=$settings["company"]?>
                    </h1>
                    <div class="mb-40">
                        <p><i class="fa fa-map-marker" aria-hidden="true" style=" padding-right: 10px;"></i><?=$settings["address"]?></p>
                    </div>
                    <div class="mb-40">
                        <p><i class="fa fa-phone" aria-hidden="true" style=" padding-right: 10px;"></i><?=$settings["phone"]?></p>
                    </div>
                    <div class="mail">
                        <p><i class="fa fa-envelope-o" aria-hidden="true" style=" padding-right: 10px;"></i><?=$settings["email"]?></p>
                    </div>
                </div>
                <?php if($this->session->flashdata('message_success')){?>
                    <div class="alert alert-success fade in">
                        <button type="button" class="close close-sm" data-dismiss="alert">
                            <i class="fa fa-times"></i>
                        </button>
                        <strong><?=_l('Success:',$this);?>  </strong> <?=_l('Your Request have been successfully sent!',$this);?>
                    </div>
                <?php } ?>

                <?php if($this->session->flashdata('message_error')){?>
                    <div class="alert alert-block alert-danger fade in">
                        <button type="button" class="close close-sm" data-dismiss="alert">
                            <i class="fa fa-times"></i>
                        </button>
                        <strong><?=_l('Oh snap!',$this);?></strong><?=_l('Problem with messages. Please notify the site administrator via the phone numbers listed',$this);?>
                    </div>
                <?php } ?>
                <form class="" id="contact" onsubmit="return check_request();" action="" method="post" enctype="multipart/form-data">
                    <div class="row" style="background: #faf5f0; padding-top: 15px;padding-bottom: 15px;">
                        <div class="col-lg-12 d-flex flex-column mb-20">
                            <input name="data[name]" placeholder="<?=_l('Full Name',$this);?>" onfocus="this.placeholder = ''" onblur="this.placeholder = '<?=_l('Full Name',$this);?>'"
                                   class="form-control" required="true" type="text">
                        </div>
                        <div class="col-lg-12 d-flex flex-column mb-20">
                            <input name="data[email]" placeholder="<?=_l('Email address',$this);?>" onfocus="this.placeholder = ''" onblur="this.placeholder = '<?=_l('Email address',$this);?>'"
                                   class="form-control" required="true" type="email">
                        </div>
                        <div class="col-lg-12 d-flex flex-column mb-20">
                            <input name="data[subject]" placeholder="<?=_l('Subject',$this);?>" onfocus="this.placeholder = ''" onblur="this.placeholder = '<?=_l('Subject',$this);?>'"
                                   class="form-control" required="true" type="text">
                        </div>
                        <div class="col-lg-12 d-flex flex-column">
                            <textarea class="form-control" name="data[text]" placeholder="<?=_l('Request',$this);?>" onfocus="this.placeholder = ''"
                                      onblur="this.placeholder = '<?=_l('Request',$this);?>'" required=""></textarea>
                        </div>

                        <div class="col-lg-12 d-flex justify-content-end">
                            <button class="primary-btn mt-30 text-uppercase"><?=_l('Send email',$this);?></button>
                        </div>
                        <div class="alert-msg"></div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>
<!--================ End Contact Area =================-->