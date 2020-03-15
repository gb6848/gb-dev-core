<style>
    .demo{ background: #e7e7e7; }
    .pricingTable{
        background: linear-gradient(to bottom,transparent 24%,#fff 25%);
        font-family: 'Ubuntu', sans-serif;
        text-align: center;
        padding: 0 0 40px;
        margin: 0 15px;
        -webkit-clip-path: polygon(0 0, 100% 0%, 100% 93%, 0% 100%);
        clip-path: polygon(0 0, 100% 0%, 100% 93%, 0% 100%);
    }
    .pricingTable .pricingTable-header{
        color: #fff;
        padding: 45px 15px 35px;
        position: relative;
    }
    .pricingTable .pricingTable-header:before,
    .pricingTable .pricingTable-header:after{
        content: '';
        background: #36474f;
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        z-index: -2;
        -webkit-clip-path: polygon(100% 20%, 100% 100%, 50% 90%, 0 100%, 0 0);
        clip-path: polygon(100% 20%, 100% 100%, 50% 90%, 0 100%, 0 0);
    }
    .pricingTable .pricingTable-header:after{
        background: #35c2ff;
        height: 95%;
        z-index: -1;
        -webkit-clip-path: polygon(100% 0, 100% 100%, 50% 90%, 0 100%, 0 20%);
        clip-path: polygon(100% 0, 100% 100%, 50% 90%, 0 100%, 0 20%);
    }
    .pricingTable .title{
        font-size: 35px;
        font-weight: 600;
        text-transform: uppercase;
        margin: 0;
    }
    .pricingTable .currency{
        font-size: 60px;
        line-height: 60px;
    }
    .pricingTable .amount{
        font-size: 60px;
        line-height: 70px;
    }
    .pricingTable .amount-sm{
        font-size: 22px;
        line-height: 35px;
        vertical-align: top;
    }
    .pricingTable .pricing-content{
        padding: 10px 0;
        margin: 0 30px;
        list-style: none;
    }
    .pricingTable .pricing-content li{
        color: #505050;
        font-size: 18px;
        line-height: 40px;
        text-transform: capitalize;
        letter-spacing: 1px;
        border-bottom: 2px solid rgba(0, 0, 0, 0.15);
        margin-bottom: 10px;
    }
    .pricingTable .pricing-content li:last-child{ border-bottom: none; }
    .pricingTable .pricingTable-signup{
        color: #35c2ff;
        background-color: #fff;
        font-size: 18px;
        font-weight: 700;
        letter-spacing: 1px;
        text-transform: uppercase;
        padding: 10px 30px;
        border: 2px solid #35c2ff ;
        display: inline-block;
        overflow: hidden;
        position: relative;
        z-index: 1;
        transition: all 0.3s ease 0s;
    }
    .pricingTable .pricingTable-signup:hover{ color: #fff; }
    .pricingTable .pricingTable-signup:before{
        content: "";
        background-color: #35c2ff;
        height: 150px;
        width: 220px;
        border-radius: 50%;
        position: absolute;
        bottom: 100%;
        left: -15px;
        z-index: -1;
        transition: all 0.7s ease 0s;
    }
    .pricingTable .pricingTable-signup:hover:before{ bottom: -50px; }
    .pricingTable.orange .pricingTable-header:after{ background-color: #FF9F00; }
    .pricingTable.orange .pricingTable-signup{
        color: #FF9F00;
        border-color: #FF9F00;
    }
    .pricingTable.orange .pricingTable-signup:hover{ color: #fff; }
    .pricingTable.orange .pricingTable-signup:before{ background-color: #FF9F00; }
    .pricingTable.magenta .pricingTable-header:after{ background-color: #EC407A;  }
    .pricingTable.magenta .pricingTable-signup{
        color: #EC407A;
        border-color: #EC407A;
    }
    .pricingTable.magenta .pricingTable-signup:hover{ color: #fff; }
    .pricingTable.magenta .pricingTable-signup:before{ background-color: #EC407A; }
    @media only screen and (max-width: 990px){
        .pricingTable{ margin: 0 0 30px; }
    }
</style>
    <div class="container">
        <div class="row">
        <?php foreach($data as $item){ ?>
            <div class="col-md-4 col-sm-6">
                <div class="pricingTable <?=(isset($item['extension_more']["special"]) && $item['extension_more']["special"]==1)?'magenta':''?>"">
                        <div class="pricingTable-header">
                                <h3 class="title"><?=$item['name']?> </h3>
                                <div class="price-value">
                                        <span class="currency">€</span>
                                        <span class="amount"><?=$item['extension_more']["price"]?>.</span>
                                        <span class="amount-sm">00</span>
                                    </div>
                            </div>
                        <ul class="pricing-content">
                                <li><?=isset($item['extension_more']["row1"])?$item['extension_more']["row1"]:"-"?></li>
                                <li><?=isset($item['extension_more']["row2"])?$item['extension_more']["row2"]:"-"?></li>
                                <li><?=isset($item['extension_more']["row3"])?$item['extension_more']["row3"]:"-"?></li>
                                <li><?=isset($item['extension_more']["row4"])?$item['extension_more']["row4"]:"-"?></li>
                            </ul>
                    <a class="pricingTable-signup" href="<?=isset($item['extension_more']["button_link"])?$item['extension_more']["button_link"]:"#"?>"><?=isset($item['extension_more']["button_name"])?$item['extension_more']["button_name"]:"-"?></a>
                    </div>
            </div>
        <?php } ?>
            <!--<div class="col-md-4 col-sm-6">
                <div class="pricingTable orange">
                        <div class="pricingTable-header">
                                <h3 class="title">Business</h3>
                                <div class="price-value">
                                        <span class="currency">$</span>
                                        <span class="amount">20</span>
                                        <span class="amount-sm">00</span>
                                    </div>
                            </div>
                        <ul class="pricing-content">
                                <li>50GB Disk Space</li>
                                <li>50 Email Accounts</li>
                                <li>50GB Bandwidth</li>
                                <li>15 Subdomains</li>
                                <li>20 Domains</li>
                            </ul>
                        <a href="#" class="pricingTable-signup">Sign Up</a>
                    </div>
            </div>-->
        </div>
    </div>
