
<!-- DataTables -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin_lte/plugins/datatables-bs4/css/dataTables.bootstrap4.css">


<section class="content">
    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-header">
                    <a href="<?=$base_url?>edit<?=$page?>" class="btn btn-success"><?=_l("Create a New",$this)?></a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="Grid" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th><?=_l("Language Name",$this)?></th>
                            <th><?=_l("Language Code",$this)?></th>
                            <th><?=_l("Public",$this)?></th>
                            <th><?=_l("Order",$this)?></th>
                            <th><?=_l('Action',$this)?></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i=0; foreach($data_list as $data){ $i++; ?>
                            <tr class="gradeX">
                                <td><?php echo $i; ?>.</td>
                                <td>
                                    <?php if($data["image"]!=''){ ?>
                                        <img style="width: 24px;" src="<?php echo base_url().$data["image"]; ?>">
                                    <?php } ?>
                                    <?=$data["language_name"]?> <?=$data["default"]==1?"("._l('Default',$this).")":""?>
                                </td>
                                <td><?=$data["code"]?></td>
                                <td><i class="fa <?=$data["public"]==1?"fa-check":"fa-minus-circle"?>"</td>
                                <td><?=$data["sort_order"]?></td>
                                <td>
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                        <i class="fa fa-cog"></i> <span class="caret"></span>
                                    </a>
                                    <div class="dropdown-menu"  x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 40px, 0px);">
                                        <a class="dropdown-item" tabindex="-1" class="dropdown-item"  tabindex="-1" href="<?=$base_url?>edit<?=$page?>/<?=$data["language_id"]?>"><i class="fa fa-edit"></i> <?=_l('Edit',$this)?></a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" tabindex="-1" href="<?=$base_url?>edit_lang_file/<?=$data["language_id"]?>/<?=$data["code"]?>"><i class="fa fa-edit"></i> <?=_l('Edit Language',$this)?> (<?=$data["code"]?>_lang.php)</a>
                                        <a class="dropdown-item" tabindex="-1" href="<?=$base_url?>edit_lang_file/<?=$data["language_id"]?>/backend"><i class="fa fa-edit"></i> <?=_l('Edit Language',$this)?> (backend_lang.php)</a>
                                        <a class="dropdown-item" tabindex="-1" href="<?=$base_url?>delete<?=$page?>/<?=$data["language_id"]?>"><i class="fa fa-trash"></i> <?=_l('Delete',$this)?></a>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>#</th>
                            <th><?=_l("Language Name",$this)?></th>
                            <th><?=_l("Language Code",$this)?></th>
                            <th><?=_l("Public",$this)?></th>
                            <th><?=_l("Order",$this)?></th>
                            <th><?=_l('Action',$this)?></th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>


            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->

<!-- DataTables -->
<script src="<?php echo base_url(); ?>assets/admin_lte/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url(); ?>assets/admin_lte/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>


<!-- page script -->

<script type="text/javascript" charset="utf-8">
    $(document).ready(function() {
        var table =  $('#Grid').dataTable( {
            "aaSorting": [[ 2, "asc" ]],
            "oLanguage": {
                "sSearch": "<?=_l("Search",$this)?>:",
                "oPaginate":{
                    "sNext": "<?=_l("Next",$this)?>",
                    "sPrevious": "<?=_l("Previous",$this)?>"
                },
                "sZeroRecords": "<?=_l("No matching records found",$this)?>",
                "sLengthMenu": "<?=_l("_MENU_ Records per page",$this)?>",
                "sInfoEmpty": "<?=_l("Showing 0 to 0 of 0 entries",$this)?>",
                "sInfo": "<?=_l("Showing _START_ to _END_ of _TOTAL_ entries",$this)?>"
            }
        } );

        $('#Grid tbody').on( 'click', 'tr', function () {
            if ( $(this).hasClass('selected') ) {
                $(this).removeClass('selected');
            }
            else {
                table.$('tr.selected').removeClass('selected');
                $(this).addClass('selected');
            }
        } );

        $('#button').click( function () {
            table.row('.selected').remove().draw( false );
        } );
    });
</script>
