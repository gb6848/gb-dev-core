<script type="text/javascript">
    function check_request(){
        var input = $('#booking input.require');
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
<!--================ Reservation Area =================-->
<section class="reservation-area" style="padding-bottom: 20px;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-5">
                <div class="section-title relative reservation-top-text">
                    <h1>
                        <?=_l('BOOK A TIME FOR PRIVATE TASTING',$this);?><br>
                    </h1>
                    <p class="reservation-top-p" style="text-align: justify;">
                        <?=_l('Reservation description',$this);?>
                    </p>
                    <hr>
                    <h4>
                        <?=_l('Reservation basic data',$this);?>
                    </h4>
                </div>
            </div>
            <div class="col-lg-7 col-md-7">
                <div class="menu-list">
                    <div class="single-menu">
                        <h3><?=_l('Reservation offer title',$this);?><br>
                            <?=_l('Reservation offer subtitle',$this);?>
                        </h3>
                        <ul class="list">
                            <li>
                                <p class="menu-item"><?=_l('Three sparkling wines (excluding gold)',$this);?><span><?=_l('Three sparkling wines (excluding gold) price',$this);?></span></p>
                            </li>
                            <li>
                                <p class="menu-item"><?=_l('Three sparkling wines with gold',$this);?><span><?=_l('Three sparkling wines with gold price',$this);?></span></p>
                            </li>
                            <li>
                                <p class="menu-item"><?=_l('Five sparkling wines (excluding gold)',$this);?><span><?=_l('Five sparkling wines (excluding gold) price',$this);?></span></p>
                            </li>
                            <li>
                                <p class="menu-item"><?=_l('Five sparkling wines with gold',$this);?><span><?=_l('Five sparkling wines with gold price',$this);?></span></p>
                            </li>
                            <li>
                                <p class="menu-item"><?=_l('Eight sparkling wines with gold',$this);?><span><?=_l('Eight sparkling wines with gold price',$this);?></span></p>
                            </li>
                            <?php if(_l('Delux sparkling wines',$this)!=""){ ?>
                            <li>
                                <div class="section-top-border" style="padding: 0!important;">
                                    <div class="row">
                                        <div class="col-md-12 mt-sm-30 typo-sec">
                                            <h3 style="padding-bottom: 0!important; margin-bottom: 10px!important;" class="mb-20"><?=_l('Delux sparkling wines',$this);?><?=_l('Delux sparkling wines price',$this);?></h3>
                                            <div>
                                                <ul class="unordered-list" style="text-align: left;">
                                                    <?php if(_l('Delux sparkling wines subline 1',$this)!="" && _l('Delux sparkling wines subline 1',$this)!="Delux sparkling wines subline 1"){ ?>
                                                        <li style="margin-left: 50px; padding-bottom: 10px"><?=_l('Delux sparkling wines subline 1',$this);?></li>
                                                    <?php } ?>
                                                    <?php if(_l('Delux sparkling wines subline 2',$this)!="" && _l('Delux sparkling wines subline 2',$this)!="Delux sparkling wines subline 2"){ ?>
                                                        <li style="margin-left: 50px; padding-bottom: 10px"><?=_l('Delux sparkling wines subline 2',$this);?></li>
                                                    <?php } ?>
                                                    <?php if(_l('Delux sparkling wines subline 3',$this)!="" && _l('Delux sparkling wines subline 3',$this)!="Delux sparkling wines subline 3"){ ?>
                                                        <li style="margin-left: 50px; padding-bottom: 10px"><?=_l('Delux sparkling wines subline 3',$this);?></li>
                                                    <?php } ?>
                                                    <?php if(_l('Delux sparkling wines subline 4',$this)!="" && _l('Delux sparkling wines subline 4',$this)!="Delux sparkling wines subline 4"){ ?>
                                                        <li style="margin-left: 50px; padding-bottom: 10px"><?=_l('Delux sparkling wines subline 4',$this);?></li>
                                                    <?php } ?>
                                                    <?php if(_l('Delux sparkling wines subline 5',$this)!="" && _l('Delux sparkling wines subline 5',$this)!="Delux sparkling wines subline 5"){ ?>
                                                        <li style="margin-left: 50px; padding-bottom: 10px"><?=_l('Delux sparkling wines subline 5',$this);?></li>
                                                    <?php } ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-lg-7 col-md-12">
                    <form class="booking-form" id="booking" onsubmit="return check_request();" action="" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-lg-12 d-flex flex-column mb-20">
                            <input name="data[event-name]" placeholder="<?=_l('Reservation event name',$this);?>" onfocus="this.placeholder = ''" onblur="this.placeholder = '<?=_l('Reservation event name',$this);?>'"
                                   class="form-control" required="true" type="text">
                        </div>
                        <div class="input-group col-lg-6 mb-20">
                            <input id="event_date" name="data[event-date]" class="form-control datepicker" placeholder="<?=_l('Reservation event date',$this);?>" onfocus="this.placeholder = ''"
                                   onblur="this.placeholder = '<?=_l('Reservation event date',$this);?> '" class="form-control" required="true" type="text">
								<span class="input-group-append">
									<button class="btn btn-outline-secondary border-left-0 border-0" type="button">
                                        <i class="fa fa-calendar reservation-calendar"></i>
                                    </button>
								</span>
                        </div>
                        <div class="col-lg-6 d-flex flex-column mb-20">
                            <input name="data[event-time]" placeholder="<?=_l('Reservation event time',$this);?>" onfocus="this.placeholder = ''" onblur="this.placeholder = '<?=_l('Reservation event time',$this);?>'"
                                   class="form-control" required="true" type="text">
                        </div>

                        <div class="col-lg-6 d-flex flex-column mb-20">
                            <input name="data[event-number-of-guest]" placeholder="<?=_l('Reservation event number of guest',$this);?>" onfocus="this.placeholder = ''" onblur="this.placeholder = '<?=_l('Reservation event number of guest',$this);?>'"
                                   class="form-control" required="true" type="text">
                        </div>
                       <!-- <div class="col-lg-6 d-flex flex-column mb-20">
                            <input name="data[meat-cut]" placeholder="<?=_l('Reservation event number of guest',$this);?>" onfocus="this.placeholder = ''" onblur="this.placeholder = '<?=_l('Reservation event number of guest',$this);?>'"
                                   class="form-control" required="true" type="text">
                        </div>
                        -->

                        <div class="col-lg-12 d-flex flex-column mb-20">
                            <input name="data[contact-firstName]" placeholder="<?=_l('Reservation contact firstName',$this);?>" onfocus="this.placeholder = ''" onblur="this.placeholder = '<?=_l('Reservation contact firstName',$this);?>'"
                                   class="form-control" required="true" type="text">
                        </div>
                        <div class="col-lg-12 d-flex flex-column mb-20">
                            <input name="data[contact-lastName]" placeholder="<?=_l('Reservation contact lastName',$this);?>" onfocus="this.placeholder = ''" onblur="this.placeholder = '<?=_l('Reservation contact lastName',$this);?>'"
                                   class="form-control" required="true" type="text">
                        </div>
                        <div class="col-lg-12 d-flex flex-column mb-20">
                            <input name="data[email-address]" placeholder="<?=_l('Reservation email address',$this);?>" onfocus="this.placeholder = ''" onblur="this.placeholder = '<?=_l('Reservation email address',$this);?>'"
                                   class="form-control" required="true" type="email">
                        </div>
                        <div class="col-lg-12 d-flex flex-column mb-20">
                            <input name="data[phone-number]" placeholder="<?=_l('Reservation phone number',$this);?>" onfocus="this.placeholder = ''" onblur="this.placeholder = '<?=_l('Reservation phone number',$this);?>'"
                                   class="form-control" required="true" type="text">
                        </div>
                        <div class="col-lg-12 d-flex flex-column">
                            <textarea class="form-control" name="data[post-message]" placeholder="<?=_l('Reservation Post a message',$this);?>" onfocus="this.placeholder = ''"
                                      onblur="this.placeholder = '<?=_l('Reservation Post a message',$this);?>'" required=""></textarea>
                        </div>

                        <div class="col-lg-12 d-flex justify-content-end">
                            <button class="primary-btn dark mt-30 text-uppercase"><?=_l('Reservation send request',$this);?></button>
                        </div>
                        <div class="alert-msg"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!--================End Reservation Area =================-->
