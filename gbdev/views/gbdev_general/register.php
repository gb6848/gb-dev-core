<style>
    section.banner_part{
        display: none;
    }
</style>
<div class="container" style="background: #f9f9ff; padding-top: 50px;padding-bottom: 50px; margin-top: 70px;margin-bottom: 70px;">
    <div class="panel">
        <h1 class="panel-heading bio-graph-heading"><?=_l("Register",$this)?></h1>
        <div class="panel-body">
            <!--<h3><?=_l("Quick Registration",$this)?></h3>-->
            <?php if($this->session->flashdata('message_success')){ ?>
            <div class="alert alert-success"><?php echo $this->session->flashdata('message_success'); ?></div>
            <p class="text-center">
                <a href="<?=base_url().$lang?>/login" class="genric-btn primary-border"><?=_l('Login now',$this);?></a>
                <a href="<?=base_url().$lang?>" class="genric-btn primary-border"><?=_l('Back to home',$this);?></a>
            </p>
            <?php } ?>
            <p><?=_l("You can enter your email address using the box below, and get the latest news!",$this)?></p>
            <form class="" action="" method="post" id="post_form">
                <div class="form-group">
                    <div class="mt-10">
                        <input type="text" name="email" placeholder="<?=_l("Enter your email address",$this)?>" onfocus="this.placeholder = ''" onblur="this.placeholder = '<?=_l("Enter your email address",$this)?>'" required="" class="single-input-primary">
                    </div>
                </div>
                <?php if( isset($settings["enable_gdpr"]) && $settings["enable_gdpr"] ==1){
                ?>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="is_gdpr_selected" name="is_gdpr_selected">
                    <label class="form-check-label" for="is_gdpr_selected" style=" display: inline-block;"><?=_l("I m aware of",$this)?><a href="#registerGDPR" data-toggle="modal" ><h3> GDPR </h3></a> <?=_l("let me know via email about my account information",$this)?></label>
                </div>
                <?php } ?>
                <!-- Trigger the modal with a button -->



                <div class="form-group text-center">
                    <a href="#" onclick="$(this).closest('form').submit()" class="genric-btn primary-border"><?=_l('Register now',$this);?></a>
                </div>
                <?php if($this->session->flashdata('message_error')){ ?>
                <div class="alert alert-danger"><?php echo $this->session->flashdata('message_error'); ?></div>
                <?php } ?>
                <input type="hidden" name="recaptcha_response" id="recaptchaResponse">
            </form>
        </div>
    </div>
</div>

<script type="text/javascript" src="<?=base_url()?>assets/flatlab/js/jquery.validate.min.js"></script>
<script>
    $("#post_form").validate({
        rules: {
            email: {
                required: true,
                email: true
            },
            is_gdpr_selected:{
                required: true
            }
        },
        messages: {
            email:{
                required: "<?=_l("Please enter a valid email address.",$this)?>",
                email: "<?=_l("Please enter a valid email address.",$this)?>"
            },
            is_gdpr_selected:{
                required: "<?=_l("GDPR checkbox is required.",$this)?>"
            }
        }
    });
</script>