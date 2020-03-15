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
    //https://embedgooglemap.1map.com/
</script>
<!--================ Contact Area =================-->
<section class="contact-section">
    <div class="container">
        <div class="d-none d-sm-block mb-5 pb-4">
            <div id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3">
                <div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3"></div><script>(function () {
                        var setting = {"height":540,"width":1200,"zoom":17,"queryString":"Drašiči 2b, 8330 Metlika, Slovenia","place_id":"ChIJidC4z6pPZEcRMceTxsRetBs","satellite":false,"centerCoord":[45.66649081625412,15.368548850000007],"cid":"0x1bb45ec4c693c731","lang":"en","cityUrl":"/slovenia/catez-ob-savi-42888","cityAnchorText":"Map of Catez ob Savi, Podravje, Slovenia","id":"map-9cd199b9cc5410cd3b1ad21cab2e54d3","embed_id":"168589"};
                        var d = document;
                        var s = d.createElement('script');
                        s.src = 'https://embedgooglemap.1map.com/js/script-for-user.js?embed_id=168589';
                        s.async = true;
                        s.onload = function (e) {
                            window.OneMap.initMap(setting)
                        };
                        var to = d.getElementsByTagName('script')[0];
                        to.parentNode.insertBefore(s, to);
                    })();</script><a href="https://embedgooglemap.1map.com?embed_id=168589">1 Map</a></div>
        </div>


        <div class="row">
            <div class="col-12">
                <h2 class="contact-title">Stopite v stik z nami</h2>
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

            <div class="col-lg-8">
                <form class="form-contact contact_form" id="contact" onsubmit="return check_request();" action="" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <textarea cols="30" rows="9" class="form-control" name="data[text]" placeholder="<?=_l('Request',$this);?>" onfocus="this.placeholder = ''"
                                          onblur="this.placeholder = '<?=_l('Request',$this);?>'" required=""></textarea>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input name="data[name]" placeholder="<?=_l('Full Name',$this);?>" onfocus="this.placeholder = ''" onblur="this.placeholder = '<?=_l('Full Name',$this);?>'"
                                       class="form-control" required="true" type="text">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input name="data[email]" placeholder="<?=_l('Email address',$this);?>" onfocus="this.placeholder = ''" onblur="this.placeholder = '<?=_l('Email address',$this);?>'"
                                       class="form-control" required="true" type="email">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input name="data[subject]" placeholder="<?=_l('Subject',$this);?>" onfocus="this.placeholder = ''" onblur="this.placeholder = '<?=_l('Subject',$this);?>'"
                                       class="form-control" required="true" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <button class="btn_2"><?=_l('Send email',$this);?></button>
                    </div>
                    <div class="alert-msg"></div>
                    <input type="hidden" name="recaptcha_response" id="recaptchaResponse">
                </form>
            </div>
            <div class="col-lg-4">
                <div class="media contact-info">
                    <div class="media-body">
                        <h3><?=$settings["company"]?></h3>
                        <p><i class="fa fa-home" style="padding-right: 10px;"></i><?=$settings["address"]?></p>
                    </div>
                </div>
                <div class="media contact-info">
                    <div class="media-body">
                        <h3><i class="fa fa-mobile-alt" style="padding-right: 10px;margin-left: 5px;"></i><?=$settings["phone"]?></h3>
                        <!--<p>Mon to Fri 9am to 6pm</p>-->
                    </div>
                </div>
                <div class="media contact-info">
                    <div class="media-body">
                        <h3><i class="fa fa-at" style="padding-right: 10px;"></i><?=$settings["email"]?></h3>
                        <p>Kadar koli nam pošljite poizvedbo!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ End Contact Area =================-->