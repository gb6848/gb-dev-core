<style>
    section.banner_part{
        display: none;
    }
</style>
<div class="container" style="margin-top: 70px; background: #faf5f0;margin-bottom: 15px;padding-bottom: 10px;margin-bottom: 70px;">
      <section>
          <div class="panel panel-primary">
              <div class="panel-heading bg-head"> <h1><?=_l('Change Passwrod',$this);?></h1></div>
              <div class="panel-body">
                  <?php if($this->session->flashdata('message_success')){ ?><div class="alert alert-success"><span class="fa fa-check"></span> <?=$this->session->flashdata('message_success')?></div><?php } ?>
                  <form class="form-horizontal" method="post" id="post_form" action="">
                      <div class="form-group <?=($this->session->flashdata('old_password_error') || $this->session->flashdata('error'))?"has-error":""?>">
                          <div class="col-lg-6">
                              <input type="password" name="old_password" placeholder="<?=_l('Last Password',$this);?>" onfocus="this.placeholder = ''" onblur="this.placeholder = '<?=_l('Last Password',$this);?>'" required="" class="single-input-primary">
                              <?php if($this->session->flashdata('old_password_error')){ ?><p class="help-block"><?=$this->session->flashdata('old_password_error')?></p><?php } ?>
                              <?php if($this->session->flashdata('error')){ ?><p class="help-block"><?=$this->session->flashdata('error')?></p><?php } ?>
                          </div>
                      </div>
                      <hr>
                      <div class="form-group <?=$this->session->flashdata('error')?"has-error":""?>">
                          <div class="col-lg-6">
                              <input type="password" name="password" placeholder="<?=_l('New password',$this);?>" onfocus="this.placeholder = ''" onblur="this.placeholder = '<?=_l('New password',$this);?>'" required="" class="single-input-primary">
                              <?php if($this->session->flashdata('error')){ ?><p class="help-block"><?=$this->session->flashdata('error')?></p><?php } ?>
                          </div>
                      </div>
                      <div class="form-group <?=$this->session->flashdata('error')?"has-error":""?>">
                          <div class="col-lg-6">
                              <input type="password" name="confirm_password" placeholder="<?=_l('Password Confirm',$this);?>" onfocus="this.placeholder = ''" onblur="this.placeholder = '<?=_l('Password Confirm',$this);?>'" required="" class="single-input-primary">
                              <?php if($this->session->flashdata('error')){ ?><p class="help-block"><?=$this->session->flashdata('error')?></p><?php } ?>
                          </div>
                      </div>

                      <div class="col-md-12" style="text-align: center; margin-top: 20px;">
                          <a href="#" onclick="$(this).closest('form').submit()"  class="genric-btn primary-border"><?=_l('Submit now',$this);?></a>

                          <a href="<?=base_url().$lang?>"  class="genric-btn success-border"><?=_l('Cancel',$this);?></a>
                      </div>
                      <input type="hidden" name="recaptcha_response" id="recaptchaResponse">
                  </form>
              </div>
          </div>
      </section>
</div>

<script type="text/javascript" src="<?=base_url()?>assets/flatlab/js/jquery.validate.min.js"></script>
<script>
    $("#post_form").validate({
        rules: {
            old_password: {
                required: true,
                minlength: 6
            },
            password: {
                required: true,
                minlength: 6
            },
            confirm_password: {
                required: true,
                minlength: 6
               // equalTo: "#password"
            }
        },
        messages: {
            old_password: {
                required: "<?=_l("Please provide a password",$this)?>",
                minlength: "<?=_l("Your password must be at least 6 characters long",$this)?>"
            },
            password: {
                required: "<?=_l("Please provide a password",$this)?>",
                minlength: "<?=_l("Your password must be at least 6 characters long",$this)?>"
            },
            confirm_password: {
                required: "<?=_l("Please provide a password",$this)?>",
                minlength: "<?=_l("Your password must be at least 6 characters long",$this)?>",
                equalTo: "<?=_l('Please enter the same password as above',$this)?>"
            }
        }
    });
</script>