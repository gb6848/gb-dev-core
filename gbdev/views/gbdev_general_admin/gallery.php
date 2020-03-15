
<!-- DataTables -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin_lte/plugins/datatables-bs4/css/dataTables.bootstrap4.css">


<section class="content">
    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-header">
                    <a href="<?=$base_url?>edit<?=$page?>/0<?=isset($data_type)?"/".$data_type:""?><?=isset($relation_id)?"/".$relation_id:""?>" class="btn btn-success"><?=_l("Create a New",$this)?></a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="Grid" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th><?=_l("gallery name",$this)?></th>
                            <th><?=_l("order",$this)?></th>
                            <th><?=_l("status",$this)?></th>
                            <th><?=_l('Action',$this)?></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($data_list as $data){ ?>
                            <tr class="gradeX">
                                <td><?=$data["gallery_name"]?></td>
                                <td><?=$data["gallery_order"]?></td>
                                <td><i class="fa <?=$data["status"]==1?"fa-check":"fa-minus-circle"?>"></i></td>
                                <td>
                                    <a href="<?=$base_url?>gallery_upload/<?=$data["gallery_id"]?>/<?=$data["data_type"]?>/<?=$data["relation_id"]?>" class="btn btn-success btn-sm" title="<?=_l('Photo Edit',$this)?>"><i title="<?=_l('Photo Edit',$this)?>" class="fa fa-image"></i> <?=_l('Photo Edit',$this)?></a>
                                    <a href="<?=$base_url?>edit<?=$page?>/<?=$data["gallery_id"]?>" class="btn btn-primary btn-sm" title="<?=_l('Edit',$this)?>"><i title="<?=_l('Edit',$this)?>" class="fa fa-edit"></i></a>
                                    <a href="<?=$base_url?>delete<?=$page?>/<?=$data["gallery_id"]?>" class="btn btn-danger btn-sm" title="<?=_l('Delete',$this)?>"><i title="<?=_l('Delete',$this)?>" class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                        <tfoot>
                        <tr>
                            <th><?=_l("gallery name",$this)?></th>
                            <th><?=_l("order",$this)?></th>
                            <th><?=_l("status",$this)?></th>
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


