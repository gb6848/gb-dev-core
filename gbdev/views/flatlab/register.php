<div class="container">
    <div class="panel">
        <h1 class="panel-heading bio-graph-heading"><?=_l("Register",$this)?></h1>
        <div class="panel-body">
            <h3><?=_l("Quick Registration",$this)?></h3>
            <?php if(isset($submit_success)){ ?>
            <div class="alert alert-success"><?=$submit_success?></div>
            <p class="text-center">
                <a class="btn btn-danger" href="<?=base_url().$lang?>/login"><span class="fa fa-key"></span> <?=_l("Login now",$this)?></a>
                <a class="btn btn-primary" href="<?=base_url().$lang?>"><span class="fa fa-home"></span> <?=_l("Back to home",$this)?></a>
            </p>
            <?php }else{ ?>
            <p><?=_l("You can enter your email address using the box below, and get the latest news!",$this)?></p>
            <form class="" action="" method="post" id="post_form">
                <div class="form-group">
                    <label for="email" class="control-label text-center"><?=_l("Enter your email address",$this)?></label>
                    <input name="email" id="email" type="email" class="form-control input-lg" placeholder="example@webmail.com">
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-success"><?=_l("Register now",$this)?></button>
                </div>
                <?php if(isset($submit_error)){ ?>
                <div class="alert alert-danger"><?=$submit_error?></div>
                <?php } ?>
                <?php } ?>
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
            }
        },
        messages: {
            email:{
                required: "<?=_l("Please enter a valid email address.",$this)?>",
                email: "<?=_l("Please enter a valid email address.",$this)?>"
            }
        }
    });
</script>