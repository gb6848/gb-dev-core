<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php echo $lang?>">
<head>
    <?=$settings["google_analytic_code"] ?>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <?php
    $pageURL = 'http';
    $pageURL .= "://";
    if ($_SERVER["SERVER_PORT"] != "80") {
        $pageURL .= $_SERVER["SERVER_NAME"] . ":" . $_SERVER["SERVER_PORT"] . $_SERVER["REQUEST_URI"];
    } else {
        $pageURL .= $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
    }
    ?>

    <!-- Mobile Specific Meta new design-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="<?=base_url().$settings["fav_icon"]?>">

    <!-- Author Meta -->
    <meta name="gb-dev" content="Web application development">
    <!-- Meta Description -->
    <meta name="description" content="<?php if(isset($settings["options"]["site_description"])) echo substr_string(strip_tags($settings["options"]["site_description"]),0,50); ?>">
    <!-- Meta Keyword -->
    <meta name="keywords" content="<?php if(isset($settings["options"]["site_keyword"])) echo $settings["options"]["site_keyword"]; ?>">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title><?=isset($settings["company"])?$settings["company"]:''?><?php echo isset($title)?" - ".$title:""; ?></title>

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i|Roboto:400,500" rel="stylesheet">
    <!--
            CSS
            ============================================= -->

    <!--<script src="<?=base_url()?>assets/gbdev_general/js/new/vendor/jquery-2.2.4.min.js"></script>-->

    <link rel="stylesheet" href="<?=base_url()?>assets/gbdev_general/new/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/gbdev_general/css/animate.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/gbdev_general/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/gbdev_general/css/flaticon.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/gbdev_general/css/magnific-popup.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/gbdev_general/css/slick.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/gbdev_general/css/style.css">
    <script src="https://kit.fontawesome.com/333c397f09.js" crossorigin="anonymous"></script>
    <script src="<?=base_url()?>assets/gbdev_general/js/jquery-1.12.1.min.js"></script>

    <?php
    $controller_action = preg_replace('/\s+/','',$this->router->fetch_method());
    if (isset($settings['enabled_reCAPTCHA']) && $settings['enabled_reCAPTCHA'] == 1 &&
    isset($settings['reCAPTCHA_site_key']) && $settings['reCAPTCHA_site_key'] != "" && !($controller_action == "page" || $controller_action  =="extensionDetail")
    ){
        ?>
    <script src="https://www.google.com/recaptcha/api.js?render=<?=$settings['reCAPTCHA_site_key']?>"></script>
    <script>
        grecaptcha.ready(function () {
            grecaptcha.execute('<?=$settings['reCAPTCHA_site_key']?>', { action: '<?=$this->router->fetch_method();?>' }).then(function (token) {
                var recaptchaResponse = document.getElementById('recaptchaResponse');
                recaptchaResponse.value = token;
            });
        });
    </script>
    <?php
    }
    ?>


</head>
<body>
<!--::header part start::-->
<header class="main_menu">
    <div class="sub_menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-8">
                    <div class="sub_menu_right_content">
                        <a href="#"><i class="fa fa-phone-volume"></i><?=$settings["phone"]?></a> <span>|</span>
                        <a href="#"><i class="fa fa-at"></i><?=$settings["email"]?></a>
                    </div>
                </div>
                 <div class="col-lg-6 col-sm-4">
                      <div class="sub_menu_social_icon">


                          <?php if( isset($settings["facebook_link"]) && $settings["facebook_link"] !==""){
                              ?>
                              <a href="<?=$settings["facebook_link"]?>"><i class="flaticon-facebook"></i></a>
                          <?php
                          } ?>
                          <?php if( isset($settings["instagram_link"]) && $settings["instagram_link"] !==""){
                              ?>
                              <a href="<?=$settings["instagram_link"]?>"><i class="flaticon-instagram"></i></a>
                          <?php
                          } ?>
                          <?php if( isset($settings["twitter_link"]) && $settings["twitter_link"] !==""){
                              ?>
                              <a href="<?=$settings["twitter_link"]?>"><i class="flaticon-twitter"></i></a>
                          <?php
                          } ?>
                          <?php if( isset($settings["skype_link"]) && $settings["skype_link"] !==""){
                              ?>
                              <a href="<?=$settings["skype_link"]?>"><i class="flaticon-skype"></i></a>
                          <?php
                          } ?>
                      </div>
                  </div>
            </div>
        </div>
    </div>
    <div class="main_menu_iner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="<?=base_url().$lang?>">
                            <?php if(isset($settings["logo"]) && $settings["logo"]!=="" && isset($settings["show_logo"]) && $settings["show_logo"] ==1){ ?>
                                <img src="<?php echo base_url(); ?><?=$settings["logo"]?>" alt="Logo" class="brand-image <?=(isset($settings["enabled_logo_circle"]) && $settings["enabled_logo_circle"] ==1)?"img-circle":""?>  elevation-3"
                                     style="opacity: .8; height: 80px;">
                            <?php }
                            else { ?>
                                <h1 style=" font-weight: bold;color: #ffffff;padding-top: 20px;"><?=isset($settings["company"])?$settings["company"]:""?></h1>
                            <?php } ?>
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-end"
                             id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <?php if(isset($data_menu) && count($data_menu)!=0) {?>
                                    <?php
                                    $all_menu_items = count($data_menu);
                                    for($i=0;$i<$all_menu_items;$i++){
                                        $hide_class = "";
                                        if($data_menu[$i]["is_left_banner_url"]!=null && $data_menu[$i]["is_left_banner_url"] ){
                                            $left_banner_offer_url = $data_menu[$i]["url"];
                                            $menu_name = $data_menu[$i]['name'];
                                        }
                                        ?>
                                        <?php if(isset($data_menu[$i]["sub_menu_data"]) && count($data_menu[$i]["sub_menu_data"])!=0){ ?>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" id="navbardrop<?=$i?>" role="button" data-toggle="dropdown" aria-haspopup="true"
                                                   aria-expanded="false">
                                                    <?php echo $data_menu[$i]['name']; ?>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                    <?php foreach($data_menu[$i]["sub_menu_data"] as $suh_menu){ ?>
                                                        <a class="dropdown-item" href="<?php echo $suh_menu['url']; ?>"><?php echo $suh_menu['name']; ?></a>
                                                    <?php } ?>
                                                </div>
                                            </li>
                                        <?php }else{ ?>
                                            <li class="nav-item <?=$hide_class?>">
                                                <a class="nav-link" href="<?=$data_menu[$i]["url"]?>"><?=$data_menu[$i]['name']?></a>
                                            </li>
                                        <?php } ?>
                                    <?php } ?>
                                <?php } ?>

                                <li class="nav-item active">
                                    <a  class="nav-link"  href="<?=base_url().$lang?>/contact"><?=_l("Contact us",$this)?></a>
                                </li>
                                <?php if(count($languages)>1) { ?>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown"> <?php if(isset($_SESSION["language"]['image'])){ ?><img src="<?=base_url().$_SESSION["language"]["image"]?>" style="width: 18px"><?php } ?> <?=$_SESSION["language"]['language_name']?> </a>
                                        <div class="dropdown-menu">
                                            <?php
                                            foreach($languages as $item) {
                                                if($item["language_id"]!=$_SESSION["language"]["language_id"]){ ?>
                                                    <a class="dropdown-item" href="<?=$item["lang_url"]?>"> <?php if(isset($item['image'])){ ?><img src="<?=base_url().$item["image"]?>" style="width: 24px"><?php } ?> <?=$item['language_name']?></a>
                                                <?php }
                                            }
                                            ?>
                                        </div>
                                    </li>
                                <?php }  ?>
                                <?php

                                if(isset($settings["enabled_visitor_login"]) && $settings["enabled_visitor_login"]==1 ){

                                    if(!isset($_SESSION['user'])){ ?>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                                <i class="fa fa-sign-in fa-lg" aria-hidden="true"></i>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="<?=base_url().$lang."/"?>login"><?=_l('Login',$this);?></a>
                                                <a class="dropdown-item" href="<?=base_url().$lang."/"?>register"><?=_l('Sign Up',$this);?></a>
                                            </div>
                                        </li>
                                    <?php } else {?>

                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                                <i class="fa fa-sign-out fa-lg" aria-hidden="true"></i>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#"><?=isset($_SESSION["user"]["username"])?$_SESSION["user"]["username"]:"Unknown"?></a>
                                                <a class="dropdown-item" href="<?=base_url().$lang."/"?>profile-password"><?=_l('Change pass',$this);?></a>
                                                <a class="dropdown-item" href="<?php echo base_url().$lang."/"; ?>login/true"><?=_l('Log Out',$this);?></a>
                                            </div>
                                        </li>
                                    <?php }
                                }
                                ?>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header part end-->

<?php

if(isset($defaultMenuItem) &&  isset($data) && $data["page_id"]!= $defaultMenuItem["page_id"] ){ ?>
    <section class="breadcrumb breadcrumb_bg">

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <h2><?=$data["title_caption"]?></h2>
                            <p> <a href="<?=base_url().$lang?>"><?=_l('Home',$this);?></a> <span>-</span><?=$data["title_caption"]?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
}else{
    ?>
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-10">
                    <div class="banner_text text-center">
                        <div class="banner_text_iner">
                            <h5>Od <span>2002</span> </h5>
                            <h1> Imamo prave rešitve za vas!</h1>
                            <!--<h3></h3>
                            <a href="#" class="btn_1">Beri več </a>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
}
?>


<!-- Modal -->
<div id="registerGDPR" class="modal fade" role="dialog" style="z-index: 999999!important;">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h5>GDPR</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <?php if(isset($gdpr)){ ?>
                    <p><?=$gdpr["message"]?></p>
                <?php }?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><?=_l('Close',$this)?></button>
            </div>
        </div>

    </div>
</div>

<?php echo isset($content)?$content:""; ?>


<!-- footer part start-->
<footer class="footer-area">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-sm-6 col-md-3 col-xl-3">

                <div class="single-footer-widget">
                    <h4>GRADBENA MEHANIZACIJA MARKO MAVRETIČ S.P.</h4>
                    <ul>
                        <li><a href="#">Davčna številka <?=$settings["VATIN"]?></a></li>
                        <li><a href="#">Matična:<?=$settings["registration_number"]?></a></li>
                    </ul>

                </div>
            </div>

            <div class="col-sm-6 col-md-2 col-xl-2 offset-xl-1">

            </div>
            <div class="col-sm-6 col-md-4 col-xl-3">
            </div>
            <div class="col-sm-6 col-md-3 col-xl-3">
                <div class="single-footer-widget footer_icon">
                    <h4>Kontakt info.</h4>
                    <p><i class="fa fa-map-marker-alt" style="padding-right: 15px;"></i><?=$settings["address"]?></p>
                    <ul>
                        <li><a href="#"><i class="fa fa-mobile-alt"></i><?=$settings["phone"]?></a></li>
                        <li><a href="#"><i class="fa fa-at"></i><?=$settings["email"]?></a></li>
                        <li><a href="#"><i class="fa fa-globe"></i><?=base_url()?></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12">
                <div class="copyright_part_text text-center">
                    <p class="footer-text m-0">
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> MAVRETIČ
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer part end-->

<!-- jquery plugins here-->

<script src="<?=base_url()?>assets/gbdev_general/js/popper.min.js"></script>
<script src="<?=base_url()?>assets/gbdev_general/new/js/bootstrap.min.js"></script>
<script src="<?=base_url()?>assets/gbdev_general/js/jquery.magnific-popup.js"></script>
<script src="<?=base_url()?>assets/gbdev_general/js/swiper.min.js"></script>
<script src="<?=base_url()?>assets/gbdev_general/js/masonry.pkgd.js"></script>
<script src="<?=base_url()?>assets/gbdev_general/js/jquery.form.js"></script>
<script src="<?=base_url()?>assets/gbdev_general/js/jquery.validate.min.js"></script>
<script src="<?=base_url()?>assets/gbdev_general/js/mail-script.js"></script>
<script src="<?=base_url()?>assets/gbdev_general/js/contact.js"></script>
<script src="<?=base_url()?>assets/gbdev_general/js/slick.min.js"></script>
<script src="<?=base_url()?>assets/gbdev_general/js/custom.js"></script>
<!--<script src="js/jquery.ajaxchimp.min.js"></script>-->

</body>

</html>