<style>
    .text-area {
        width: 100%;
        padding: 20px 15px 15px 20px;
        background-color: #dcdcdc;
        text-align: justify;
        border: solid 2px #9C2000;
        height: 700px;
        overflow-y: auto;
    }
    .btn-danger{
        margin-top: 15px;
    }
    footer{display: none;}
</style>
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <section class="panel">
                <div class="panel-body">
                    <form class="cmxform form-horizontal tasi-form" method="post" action="<?=base_url().$lang."/legalTermView"?>">
                        <div class="col-md-12">
                            <div class="text-area" id="LegalTermsTextArea">
                                <p><?=$legal_term_message?><br></p>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <input type="submit" class="btn btn-danger" value="<?=_l('Potrdi',$this);?>"/>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div data-aos="fade-up">
</div>
