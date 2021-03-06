
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
    <th><?=_l("page name",$this)?></th>
    <th><?=_l("page type",$this)?></th>
    <th><?=_l("order",$this)?></th>
    <th><?=_l("preview",$this)?></th>
    <th><?=_l("public",$this)?></th>
    <th><?=_l('Action',$this)?></th>
</tr>
</thead>
<tbody>
<?php foreach($data_list as $data){ ?>
    <tr>
        <td><?=$data["page_name"]?></td>
        <td><?=_l($page_type[$data["page_type"]]["name"],$this)?></td>
        <td><?=$data["page_order"]?></td>
        <td><i class="fa <?=$data["preview"]==1?"fa-check":"fa-minus-circle"?>"></i></td>
        <td><i class="fa <?=$data["public"]==1?"fa-check":"fa-minus-circle"?>"></i></td>
        <td>
            <?php if(allowed_page_fields($data["page_type"],"extension",$page_type)){ ?>
                <a href="<?=$base_url?>extensions/<?=$page?>/<?=$data["page_id"]?>" class="btn btn-warning btn-sm" title="<?=_l('Extension Edit',$this)?>"><i title="<?=_l('Extension Edit',$this)?>" class="fa fa-edit"></i></a>
            <?php } ?>
            <?php if(allowed_page_fields($data["page_type"],"gallery",$page_type)){ ?>
                <a href="<?=$base_url?>gallery/<?=$page?>/<?=$data["page_id"]?>" class="btn btn-info btn-sm" title="<?=_l('Photo Edit',$this)?>"><i title="<?=_l('Photo Edit',$this)?>" class="nav-icon far fa-image"></i></a>
            <?php } ?>
            <?php if(allowed_page_fields($data["page_type"],"ffs",$page_type)){ ?>
                <a href="<?=$base_url?>ffs/<?=$page?>/<?=$data["page_id"]?>" class="btn btn-info btn-sm" title="<?=_l('FFS Edit',$this)?>"><i title="<?=_l('FFS Edit',$this)?>" class="fa fa-edit"></i></a>
            <?php } ?>

            <?php if(allowed_page_fields($data["page_type"],"ppg",$page_type)){ ?>
                <a href="<?=$base_url?>ppg_grapes/<?=$page?>/<?=$data["page_id"]?>" class="btn btn-info btn-sm" title="<?=_l('PPG Edit',$this)?>"><i title="<?=_l('PPG Edit',$this)?>" class="fa fa-edit"></i></a>
            <?php } ?>

            <?php if(allowed_page_fields($data["page_type"],"pipvg",$page_type)){ ?>
                <a href="<?=$base_url?>pipvg/<?=$page?>/<?=$data["page_id"]?>" class="btn btn-info btn-sm" title="<?=_l('PIVPG Edit',$this)?>"><i title="<?=_l('PIVPG Edit',$this)?>" class="fa fa-edit"></i></a>
            <?php } ?>

            <?php if( !($data["page_type"] == 208 || $data["page_type"] == 207 || $data["page_type"] == 211  || $data["page_type"] == 212 )) {
                ?>
                <a href="<?=$base_url?>edit<?=$page?>_options/<?=$data["page_id"]?>" class="btn btn-success btn-sm" title="<?=_l('Page Options',$this)?>"><i title="<?=_l('Edit',$this)?>" class="fa fa-wrench"></i> <?=_l('Page Options',$this)?></a>
            <?php } ?>
            <a href="<?=$base_url?>edit<?=$page?>/<?=$data["page_id"]?>" class="btn btn-primary btn-sm" title="<?=_l('Edit',$this)?>"><i title="<?=_l('Edit',$this)?>" class="fa fa-edit"></i></a>
            <a href="<?=$base_url?>delete<?=$page?>/<?=$data["page_id"]?>" class="btn btn-danger btn-sm btn-delete" title="<?=_l('Delete',$this)?>"><i title="<?=_l('Delete',$this)?>" class="fa fa-trash"></i></a>
        </td>
    </tr>
<?php } ?>
</tbody>
<tfoot>
<tr>
    <th><?=_l("page name",$this)?></th>
    <th><?=_l("page type",$this)?></th>
    <th><?=_l("order",$this)?></th>
    <th><?=_l("preview",$this)?></th>
    <th><?=_l("public",$this)?></th>
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
