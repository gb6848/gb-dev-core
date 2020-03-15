<!DOCTYPE html>
<html lang="<?=$_SESSION["language"]["code"]?>">

<!-- Mirrored from thevectorlab.net/flatlab/login.html by HTTrack Website Copier/3.x [XR&CO'2010], Sun, 09 Feb 2014 08:47:28 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?=base_url()?><?=isset($settings["fav_icon"])?$settings["fav_icon"]:""?>">

    <title><?=_l('Administration',$this)?> <?=isset($settings["company"])?$settings["company"]:""?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?=base_url()?>assets/flatlab/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/flatlab/css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="<?=base_url()?>assets/flatlab/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="<?=base_url()?>assets/flatlab/css/style.css" rel="stylesheet">
    <?php if($_SESSION["language"]["rtl"]==1){ ?>
    <link href="<?=base_url()?>assets/flatlab/css/rtl.css" rel="stylesheet">
    <?php } ?>
    <link href="<?=base_url()?>assets/backend_custom/css/style.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/flatlab/css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="<?=base_url()?>assets/flatlab/js/html5shiv.js"></script>
    <script src="<?=base_url()?>assets/flatlab/js/respond.min.js"></script>
    <![endif]-->
</head>
<style>
/* Button Styles */

.button {
    display: inline-flex;
    height: 40px;
    width: 150px;
    border: 2px solid #BFC0C0;
    margin: 20px 20px 20px 20px;
    color: #BFC0C0;
    text-transform: uppercase;
    text-decoration: none;
    font-size: .8em;
    letter-spacing: 1.5px;
    align-items: center;
    justify-content: center;
    overflow: hidden;
}

a {
    color: #BFC0C0;
    text-decoration: none;
    letter-spacing: 1px;
}


/* First Button */

#arrow-hover {
    width: 15px;
    height: 10px;
    position: absolute;
    transform: translateX(60px);
    opacity: 0;
    -webkit-transition: all .25s cubic-bezier(.14, .59, 1, 1.01);
    transition: all .15s cubic-bezier(.14, .59, 1, 1.01);
    margin: 0;
    padding: 0 5px;
}

a#button-1:hover img {
    width: 15px;
    opacity: 1;
    transform: translateX(50px);
}


/* Second Button */

#button-2 {
    position: relative;
    overflow: hidden;
    cursor: pointer;
}

#button-2 a {
    position: relative;
    transition: all .35s ease-Out;
}

#slide {
    width: 100%;
    height: 100%;
    left: -200px;
    background: #BFC0C0;
    position: absolute;
    transition: all .35s ease-Out;
    bottom: 0;
}

#button-2:hover #slide {
    left: 0;
}

#button-2:hover a {
    color: #2D3142;
}


/* Third Button */

#button-3 {
    position: relative;
    overflow: hidden;
    cursor: pointer;
}

#button-3 a {
    position: relative;
    transition: all .45s ease-Out;
}

#circle {
    width: 0%;
    height: 0%;
    opacity: 0;
    line-height: 40px;
    border-radius: 50%;
    background: #BFC0C0;
    position: absolute;
    transition: all .5s ease-Out;
    top: 20px;
    left: 70px;
}

#button-3:hover #circle {
    width: 200%;
    height: 500%;
    opacity: 1;
    top: -70px;
    left: -70px;
}

#button-3:hover a {
    color: #2D3142;
}


/* Fourth Button */

#button-4 {
    position: relative;
    overflow: hidden;
    cursor: pointer;
}

#button-4 a {
    position: relative;
    transition: all .45s ease-Out;
}

#underline {
    width: 100%;
    height: 2.5px;
    margin-top: 15px;
    align-self: flex-end;
    left: -200px;
    background: #BFC0C0;
    position: absolute;
    transition: all .3s ease-Out;
    bottom: 0;
}

#button-4:hover #underline {
    left: 0;
}


/* Fifth Button */

#button-5 {
    position: relative;
    overflow: hidden;
    cursor: pointer;
}

#button-5 a {
    position: relative;
    transition: all .45s ease-Out;
}

#translate {
    transform: rotate(50deg);
    width: 100%;
    height: 250%;
    left: -200px;
    top: -30px;
    background: #BFC0C0;
    position: absolute;
    transition: all .3s ease-Out;
}

#button-5:hover #translate {
    left: 0;
}

#button-5:hover a {
    color: #2D3142;
}


/* Sixth Button */

#button-6 {
    position: relative;
    overflow: hidden;
    cursor: pointer;
}

#button-6 a {
    position: relative;
    transition: all .45s ease-Out;
}

#spin {
    width: 0;
    height: 0;
    opacity: 0;
    left: 70px;
    top: 20px;
    transform: rotate(0deg);
    background: none;
    position: absolute;
    transition: all .5s ease-Out;
}

#button-6:hover #spin {
    width: 200%;
    height: 500%;
    opacity: 1;
    left: -70px;
    top: -70px;
    background: #BFC0C0;
    transform: rotate(80deg);
}

#button-6:hover a {
    color: #2D3142;
}


/* Seventh Button */

#button-7 {
    position: relative;
    overflow: hidden;
    cursor: pointer;
}

#button-7 a {
    position: relative;
    left: 0;
    transition: all .35s ease-Out;
}

#dub-arrow {
    width: 100%;
    height: 100%;
    background: #BFC0C0;
    left: -200px;
    position: absolute;
    padding: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all .35s ease-Out;
    bottom: 0;
}

#button-7 img {
    width: 20px;
    height: auto;
}

#button-7:hover #dub-arrow {
    left: 0;
}

#button-7:hover a {
    left: 150px;
}

@media screen and (min-width:1000px) {
    h1 {
        font-size: 2.2em;
    }
    #container {
        width: 50%;
    }
}

.one-edge-shadow {
    -webkit-box-shadow: 0 8px 6px -6px black;
    -moz-box-shadow: 0 8px 6px -6px black;
    box-shadow: 0 8px 6px -6px black;
}
.shadow {
    -moz-box-shadow:    inset 0 0 10px #000000;
    -webkit-box-shadow: inset 0 0 10px #000000;
    box-shadow:         inset 0 0 10px #000000;
}
</style>
<body class="login-body">
<div class="container">
    <form class="form-signin" action="<?=base_url()?>admin-sign/login/" method="post">
        <div class="login-wrap">
            <div class="col-lg-12 co-md-12 col-sm-12 col-xs-12" style="text-align: center!important; padding: 0px;background-color: #494949!important;padding-bottom: 15px; padding-top: 15px;">
                <?php if(isset($basicdata[0]["logo"]) && $basicdata[0]["logo"]!=="" && isset($basicdata[0]["show_logo"]) && $basicdata[0]["show_logo"] ==1){ ?>
                    <img src="<?php echo base_url(); ?><?=$basicdata[0]["logo"]?>" alt="Logo" class="brand-image <?=(isset($basicdata[0]["enabled_logo_circle"]) && $basicdata[0]["enabled_logo_circle"] ==1)?"img-circle":""?>  elevation-3"
                         style="opacity: .8; height: 150px;">
                <?php }
                else { ?>
                    <h1 style=" font-weight: bold;color: #ffffff;padding-top: 20px;"><?=isset($basicdata[0]["company"])?$basicdata[0]["company"]:""?></h1>
                <?php } ?>
            </div>
            <input style="margin-top: 15px;" name="username" id="username" type="text" class="form-control" placeholder="<?=_l('Username',$this)?>" autofocus>
            <input name="password" id="password" type="password" class="form-control" placeholder="<?=_l('Password',$this)?>">

            <div class="col-lg-12 co-md-12 col-sm-12 col-xs-12" style="text-align: center!important;">
                <div class="button" id="button-6">
                    <div id="spin"></div>
                    <a href="#" onclick="$(this).closest('form').submit()"><?=_l('Sign in',$this)?></a>
                </div>
            </div>

            <p><?=_l('This is just for Administrators',$this)?></p>
            <?php if($this->session->flashdata('message')!=''){ ?><div class="alert alert-danger"><?=$this->session->flashdata('message')?></div><?php } ?>
        </div>
    </form>

</div>



<!-- js placed at the end of the document so the pages load faster -->
<script src="<?=base_url()?>assets/flatlab/js/jquery.js"></script>
<script src="<?=base_url()?>assets/flatlab/js/bootstrap.min.js"></script>


</body>
