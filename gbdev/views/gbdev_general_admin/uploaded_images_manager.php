<!-- Ekko Lightbox -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin_lte/plugins/ekko-lightbox/ekko-lightbox.css">

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <div class="card-title">
                            Ekko Lightbox
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <?php if(isset($data_list) && count($data_list)!=0){ ?>
                                <?php foreach($data_list as $data){ ?>
                                    <div class="col-sm-3" imageid ="<?=$data['image_id']?>">
                                        <a href="<?=base_url().$data["image"]?>" data-toggle="lightbox" data-title="<?=$data["name"]?>" data-gallery="gallery">
                                            <img src="<?=base_url().image($data['image'],$settings['default_image'],300,200)?>" class="img-fluid mb-2" alt="">
                                        </a>
                                        <p class="text-center"><?=$data["name"]?></p>
                                        <p class="text-center"><?=$data["width"]?> <?=_l("px",$this)?> X <?=$data["height"]?> <?=_l("px",$this)?></p>
                                        <p class="text-center"><?=$data["size"]?> <?=_l("KG",$this)?></p>
                                        <p class="text-center">
                                            <a href="javascript:;"  class="btn btn-danger btn-shadow removeImage"><i class="fa fa-trash"></i> <?=_l("Delete",$this)?></a>
                                        </p>
                                    </div>
                                <?php } ?>
                            <?php } ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Ekko Lightbox -->
<script src="<?php echo base_url(); ?>assets/admin_lte/plugins/ekko-lightbox/ekko-lightbox.min.js"></script>

<script>
    $( document ).ready(function() {

    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox({
            alwaysShowClose: true
        });
    });

        $(".removeImage").on("click",function(){
            var $that =$(this);

            Swal.fire({
                title: '<?=_l('Are you sure to remove this image?',$this)?>',
               // text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: '<?=_l('Yes, delete it!',$this)?>',
                cancelButtonText: '<?=_l('Cancel',$this)?>'
            }).then((result) => {
                if (result.value) {
                var $element= $that.closest("div");
                var imageid = $($element).attr("imageid")
                $.ajax({
                    url: "<?=$base_url?>deleteuploaded_image/" + imageid,
                    context: document.body
                }).done(function(data) {
                    eval("var resultFile = " + data);
                    if(resultFile.status == "success"){
                        $element.remove();
                    }
                });
                Swal.fire(
                    '<?=_l('Deleted!',$this)?>',
                    '<?=_l('Your file has been deleted.',$this)?> ',
                    'success'
                )
            }
        })
        });
    });

</script>