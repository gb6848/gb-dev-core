<style>
.pricingTable{
padding: 35px 20px !important;
margin: 0 10px!important;
background: #f4f4f4!important;
border-radius: 20px!important;
text-align: center!important;
box-shadow: 0 8px 6px -6px rgba(0,0,0,0.5)!important;
overflow: hidden!important;
position: relative!important;
transition: all 0.3s ease 0s!important;
}
.pricingTable .pricingTable-header{
display: block!important;
padding: 10px 30px 20px!important;
margin-bottom: 20px!important;
border-bottom: 2px solid #000!important;
position: relative!important;
}
.pricingTable .pricingTable-header:before{
content: "";
width: 70px;
height: 70px;
border-radius: 50%;
background: #fff;
box-shadow: inset 1px -5px 1px rgba(0,0,0,0.2);
position: absolute;
top: 0;
left: -52px;
transform: rotate(-110deg);
}
.pricingTable .title{
    margin: 0;
font-size: 25px;
font-weight: 700;
color: #ed0064;
letter-spacing: 2px;
text-transform: uppercase;
}
.pricingTable .pricing-content{
padding-left: 15px;
margin: 0 0 20px 30%;
text-align: left;
position: relative;
}
.pricingTable .pricing-content:after{
content: "";
width: 60px;
height: 60px;
border-radius: 50%;
background: #fff;
box-shadow: inset 1px -5px 1px rgba(0,0,0,0.2);
position: absolute;
bottom: 0;
right: -45px;
transform: rotate(110deg);
}
.pricingTable .price-value{
width: 100%;
height: 100%;
border-radius: 50%;
background: #ed0064;
text-align: right;
position: absolute;
top: 0;
left: -100%;
}
.pricingTable .price-value:after{
content: "";
width: 40px;
height: 40px;
border-radius: 50%;
background: #fff;
box-shadow: inset 1px -5px 1px rgba(0,0,0,0.2);
position: absolute;
bottom: 2px;
right: 45%;
transform: rotate(-110deg);
}
.pricingTable .amount{
display: inline-block;
font-size: 50px;
font-weight: 600;
color: #fff;
position: absolute;
top: 50%;
right: 20px;
transform: translateY(-50%);
}
.pricingTable .description{
font-size: 14px;
color: #4f4f4f;
line-height: 22px;
margin-bottom: 15px;
}
.pricingTable .pricing-content ul{
padding: 0;
    margin: 0 0 0 15px;
}
.pricingTable .pricing-content ul li{
font-size: 15px;
color: #4f4f4f;
line-height: 30px;
}
.pricingTable .pricingTable-signup{
display: inline-block;
padding: 10px 25px;
background: #ed0064;
font-size: 17px;
font-weight: 700;
color: #fff;
letter-spacing: 1px;
border-radius: 30px 0 30px 30px;
transition: all 0.3s ease 0s;
}
    .pricingTable:hover .pricingTable-signup{ border-radius: 30px 30px 30px 0; }
    .pricingTable.yellow .title{ color: #e0ac1e; }
    .pricingTable.yellow .price-value,
    .pricingTable.yellow .pricingTable-signup{ background: #e0ac1e; }
    .pricingTable.green .title{ color: #158163; }
    .pricingTable.green .price-value,
    .pricingTable.green .pricingTable-signup{ background: #158163; }
    @media only screen and (max-width: 1199px) and (min-width: 991px){
            .pricingTable .amount{ right: 5px; }
    }
    @media only screen and (max-width: 990px){
            .pricingTable{ margin-bottom: 30px; }
    }
    @media only screen and (max-width: 360px){
            .pricingTable .amount{ right: 5px; }
    }
</style>
<div class="container">
        <div class="row">
                <div class="col-md-4 col-sm-6">
                        <div class="pricingTable">
                                <div class="pricingTable-header">
                                        <h3 class="title">Standard</h3>
                                    </div>
                                <div class="pricing-content">
                                        <div class="price-value">
                                                <span class="amount">$10</span>
                                            </div>
                                        <p class="description">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque necessitatibus placeat tempore.
                                            </p>
                                        <ul>
                                                <li>50GB Disk Space</li>
                                                <li>50 Email Accounts</li>
                                                <li>50GB Monthly Bandwidth</li>
                                                <li>10 Subdomains</li>
                                                <li>15 Domains</li>
                                            </ul>
                                    </div>
                                <a href="#" class="pricingTable-signup">Order Now</a>
                            </div>
                    </div>
                <div class="col-md-4 col-sm-6">
                        <div class="pricingTable yellow">
                                <div class="pricingTable-header">
                                        <h3 class="title">Business</h3>
                                    </div>
                                <div class="pricing-content">
                                        <div class="price-value">
                                                <span class="amount">$20</span>
                                            </div>
                                        <p class="description">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque necessitatibus placeat tempore.
                                            </p>
                                        <ul>
                                                <li>60GB Disk Space</li>
                                                <li>60 Email Accounts</li>
                                                <li>60GB Monthly Bandwidth</li>
                                                <li>15 Subdomains</li>
                                                <li>20 Domains</li>
                                            </ul>
                                    </div>
                                <a href="#" class="pricingTable-signup">Order Now</a>
                            </div>
                    </div>
            </div>
</div>

<section class="service_part section_padding">
    <div class="container">

        <div class="row">
            <div class="col-xl-3">
                <div class="section_tittle">
                    <h2>Our Special Feature</h2>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-3 col-sm-6 col-md-6">
                <div class="single_service_part">
                    <i class="flaticon-chip"></i>
                    <span class="line"></span>
                    <h3>Advance Technology</h3>
                    <p>All fish day af emale very appear moved seas above Fifth them grass gathere above
                        male moveth whose life rule she gathering seas of is sea night</p>

                </div>

            </div>
            <div class="col-lg-3 col-sm-6 col-md-6">
                <div class="single_service_part">
                    <i class="flaticon-cap"></i>
                    <span class="line"></span>
                    <h3>world Quality SErvice</h3>
                    <p>All fish day af emale very appear moved seas above Fifth them grass gathere above
                        male moveth whose life rule she gathering seas of is sea night</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-md-6">
                <div class="single_service_part">
                    <i class="flaticon-wallet"></i>
                    <span class="line"></span>
                    <h3>world Quality SErvice</h3>
                    <p>All fish day af emale very appear moved seas above Fifth them grass gathere above
                        male moveth whose life rule she gathering seas of is sea night</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-md-6">
                <div class="single_service_part">
                    <i class="flaticon-audio"></i>
                    <span class="line"></span>
                    <h3>Lifetime support</h3>
                    <p>All fish day af emale very appear moved seas above Fifth them grass gathere above
                        male moveth whose life rule she gathering seas of is sea night</p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php if(isset($data) && count($data)!=0){ ?>

<div class="row-color">
    <div class="container">
        <div class="row fade-hover">
            <?php foreach($data as $item){ ?>
                <p>pricing-table </p>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" data-aos="flip-up">
                <div class="pricing-table <?=(isset($item['extension_more']["special"]) && $item['extension_more']["special"]==1)?'most-popular':''?>">
                    <div class="pricing-head">
                        <h1> <?=$item['name']?> </h1>
                        <h2>
                            <span class="note">€</span><?=$item['extension_more']["price"]?> </h2>
                    </div>
                    <ul class="list-unstyled">
                        <li><?=isset($item['extension_more']["row1"])?$item['extension_more']["row1"]:"-"?></li>
                        <li><?=isset($item['extension_more']["row2"])?$item['extension_more']["row2"]:"-"?></li>
                        <li><?=isset($item['extension_more']["row3"])?$item['extension_more']["row3"]:"-"?></li>
                        <li><?=isset($item['extension_more']["row4"])?$item['extension_more']["row4"]:"-"?></li>
                    </ul>
                    <div class="price-actions">
                        <a class="btn" href="<?=isset($item['extension_more']["button_link"])?$item['extension_more']["button_link"]:"#"?>"><?=isset($item['extension_more']["button_name"])?$item['extension_more']["button_name"]:"-"?></a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<?php } ?>