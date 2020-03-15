<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php echo $lang?>">
<head>
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
    <title><?=isset($settings["company"])?$settings["company"]:''?><?php echo isset($title)?" - ".$title:""; ?></title>
    <meta name="robots" content="index, follow" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0" />
    <meta name="keywords" content="<?php if(isset($keyword)) echo $keyword; ?>" />
    <meta name="description" content="<?php if(isset($description)) echo substr_string(strip_tags($description),0,50); ?>" />

    <link rel="sitemap" type="application/xml" title="Sitemap" href="<?php echo base_url().$lang; ?>/sitemap.xml" /> <!-- No www -->
    <link rel="shortcut icon" href="<?=base_url().$settings["fav_icon"]?>">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="<?=base_url()?>assets/gbdev_general/css/frontend-style.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/gbdev_general/css/aos.css" rel="stylesheet">
    <!--external css-->
    <link href="<?=base_url()?>assets/flatlab/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <?php if($_SESSION["language"]["rtl"]==1){ ?>
        <link href="<?=base_url()?>assets/gbdev_general/css/rtl.css" rel="stylesheet">
    <?php } ?>
    <?php if($_SESSION["language"]["code"]=="fa"){ ?>
        <link href="<?=base_url()?>assets/flatlab/fonts_fa/ed-fonts.css" rel="stylesheet">
    <?php } ?>

    <script src="<?=base_url()?>assets/gbdev_general/js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript">
        $('img').error(function(){
            <?php if(isset($settings['default_image']) && $settings['default_image']!="") {?>
            $(this).attr('src','<?php echo base_url(); ?><?php echo image($settings['default_image'],$settings['default_image'],220,120);?>');
            <?php } else {?>
            $(this).attr('src','<?php echo base_url(); ?><?php echo image("assets/frontend/img/noimage.jpg","assets/frontend/img/noimage.jpg",220,120);?>');
            <?php }?>
        });
    </script>
    <script type="text/javascript">
        function check_search() {
            var url = '<?=base_url().$lang?>/search?';
            var filter_search = $('input[name=\'filter_search\']').val();
            if (filter_search) {
//            url += encodeURIComponent(filter_search);
                url += "filter=" + filter_search.replace(/ /g,"_");
                window.location = url;
            }
            return false;
        }
    </script>
</head>
<body>
<style>
    html {
        position: relative;
        min-height: 100%;
    }
    footer {
        display:none;
        position: absolute;
        left: 0;
        bottom: 0;
        height: auto;
        width: 100%;
    }
</style>
<header>
</header>
<?php echo isset($content)?$content:""; ?>
<footer>
    <div class="modal-footer">
        <div class="container">
            <?=date("Y")?>
            <i class="fa fa-copyright"></i>
            <a href="<?=base_url()?>"><?=substr(str_replace(array("http://","https://"),"",base_url()),0,-1)?></a>
        </div>
    </div>
</footer>
<script src="<?=base_url()?>assets/gbdev_general/js/bootstrap.min.js"></script>
<script src="<?=base_url()?>assets/gbdev_general/js/aos.js"></script>

<script type="text/javascript">
    function footerAlign() {
        $('footer').css('display', 'block');
        $('footer').css('height', 'auto');
        var footerHeight = $('footer').outerHeight();
        $('body').css('padding-bottom', footerHeight);
        $('footer').css('height', footerHeight);
    }


    $(document).ready(function(){
        footerAlign();
    });

    $( window ).resize(function() {
        footerAlign();
    });

    AOS.init({
        duration: 1200
    });

    $(function(){
        $(function () {
            $('.carousel').carousel();
        });
        $(".top-nav-toggle-btn").click(function(){
            $(".top-nav-toggle").toggleClass("top-nav-toggle-show");
        });
    });
</script>
</body>
</html>