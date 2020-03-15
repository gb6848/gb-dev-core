<style>
    section.banner_part{
        display: none;
    }
    div.page-title{
        margin-top: 70px;
    }
</style>
<div class="page-title">
    <div class="container">
        <h1><?php echo $title; ?></h1>
    </div>
</div>
<div class="container" style="background: #f9f9ff; padding-top: 50px;padding-bottom: 50px; margin-bottom: 70px">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
            <h4><?php echo _l('Some Tips',$this); ?></h4>
            <ul>
                <li>
                    <p><?php echo _l("This form is just for who is already our website's member!",$this); ?></p>
                </li>
                <li>
                    <p>
                        <?php echo _l("If you don't have any account and didn't sign in before, use the below link before use this form!",$this); ?>
                        <br>
                        <a href="<?=base_url().$lang?>/register"><?=_l('Sign Up',$this);?></a>
                    </p>
                </li>
                <li>
                    <p><?php echo _l('You can use your email address or username for sign.',$this); ?></p>
                </li>
            </ul>
            <?php if($this->session->flashdata('message_success')){ ?>
                <div class="alert alert-success"><?php echo $this->session->flashdata('message_success'); ?></div>
            <?php } ?>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12"  style="background: #faf5f0; padding-top: 15px;padding-bottom: 15px;">
            <form class="" action="" method="post" id="post_form">
                <div class="mt-10">
                    <input type="text" name="data[email]" placeholder="<?=_l('Email',$this);?>" onfocus="this.placeholder = ''" onblur="this.placeholder = '<?=_l('Email',$this);?>'" required="" class="single-input-primary">
                </div>

                <div class="mt-10">
                    <input type="password" name="data[password]" placeholder="<?=_l('Password',$this);?>" onfocus="this.placeholder = ''" onblur="this.placeholder = '<?=_l('Password',$this);?>'" required="" class="single-input-primary">
                </div>
               <!-- <div class="mt-10">
                    <div class="switch-wrap d-flex justify-content-between">
                        <p><?=_l('Keep me logged in',$this);?></p>
                        <div class="confirm-checkbox">
                            <input type="checkbox" id="confirm-checkbox" name="keep_login">
                            <label for="confirm-checkbox"></label>
                        </div>
                    </div>
                </div>-->

                <div class="col-md-12" style="text-align: center; margin-top: 20px;">

                    <a href="#" onclick="$(this).closest('form').submit()" class="genric-btn primary-border"><?=_l('Sign in',$this);?></a>

                    <a href="<?=base_url().$lang?>/forget-password" class="genric-btn success-border"><?=_l("I forgot My Password",$this)?></a>
                    <?php if(isset($login_error) && $login_error!=null){ ?>
                        <div class="alert alert-danger text-center" style="margin: 10px 0;"><?=$login_error?></div>
                    <?php } ?>
                </div>
                <input type="hidden" name="recaptcha_response" id="recaptchaResponse">
            </form>
        </div>
    </div>
</div>

<script type="text/javascript" src="<?=base_url()?>assets/flatlab/js/jquery.validate.min.js"></script>
<script>
    $(function() {
        $("#post_form").validate({
            rules: {
                "data[email]": {
                    required: true
                },
                "data[password]": {
                    required: true
                }
            },
            messages: {
                "data[email]":{
                    required: "<?=_l("Please enter a username or email address.",$this)?>"
                },
                "data[password]":{
                    required: "<?=_l("Please enter your password.",$this)?>"
                }
            }
        });
    });

</script>