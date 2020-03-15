<!-- ChartJS -->
<script src="<?php echo base_url(); ?>assets/admin_lte/plugins/chart.js/Chart.min.js"></script>
<section class="content">
<div class="container-fluid">
<!-- Small boxes (Stat box) -->
<div class="row">
    <div class="col-lg-2 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
            <div class="inner">
                <h3><?=$page_count?></h3>

                <p><?=_l("Pages",$this)?></p>
            </div>
            <div class="icon">
                <i class="ion ion-pie-graph"></i>
            </div>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-2 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
            <div class="inner">
                <h3><?=$extension_count?></h3>

                <p><?=_l("Extensions",$this)?></p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-2 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
            <div class="inner">
                <h3><?=$gallery_image_count?></h3>

                <p><?=_l("Images",$this)?></p>
            </div>
            <div class="icon">
                <i class="ion ion-pie-graph"></i>
            </div>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-2 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
            <div class="inner">
                <h3><?=$users_count?></h3>

                <p><?=_l("Members",$this)?></p>
            </div>
            <div class="icon">
                <i class="ion ion-person-add"></i>
            </div>
        </div>
    </div>

    <div class="col-lg-2 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
            <div class="inner">
                <h3><?=$image_count?></h3>

                <p><?=_l("Uploaded Images",$this)?></p>
            </div>
            <div class="icon">
                <i class="ion ion-pie-graph"></i>
            </div>
        </div>
    </div>
    <!-- ./col -->
</div>
<!-- /.row -->
<!-- Main row -->
<div class="row">
<!-- Left col -->
<section class="col-lg-7 connectedSortable">
<!-- CONTENT CHART-->
<?php if(isset($settings["enabled_content_chart"]) && $settings["enabled_content_chart"] ==1){ ?>
<div class="card card-secondary">
    <div class="card-header">
        <h3 class="card-title"> <?=_l("Content",$this)?></h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
        </div>
    </div>
    <div class="card-body"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
        <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 604px;" width="604" height="250" class="chartjs-render-monitor"></canvas>
    </div>

    <script>
        //-------------
        //- DONUT CHART -
        //-------------
        // Get context with jQuery - using jQuery's .get() method.
        var data = [];
        var labels =[];
        var backgroundColor = [];
var getHexColor = function(){
    var letters = "0123456789ABCDEF";

    // html color code starts with #
    var color = '#';

    // generating 6 times as HTML color code consist
    // of 6 letter or digits
    for (var i = 0; i < 6; i++)
        color += letters[(Math.floor(Math.random() * 16))];

    return color;
}
        var series = <?=count($languages)?>;
        <?php $i = 0; ?>
        <?php foreach($languages as $item){ ?>
        data[<?=$i?>] = <?=$item["content_percent"]?> ;
        labels[<?=$i?>] = "<?=$item["language_name"]?>";
        backgroundColor[<?=$i?>]=getHexColor();
        <?php $i++; } ?>
        var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
        var donutData        = {
            labels: labels,
            datasets: [
                {
                    data: data,
                    backgroundColor : backgroundColor
                }
            ]
        }
        var donutOptions     = {
            maintainAspectRatio : false,
            responsive : true
        }
        //Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        var donutChart = new Chart(donutChartCanvas, {
            type: 'doughnut',
            data: donutData,
            options: donutOptions
        })
    </script>
    <!-- /.card-body -->
</div>
<?php } ?>
<!-- COMMENTS CHART -->
<?php if(isset($settings["enabled_comments_chart"]) && $settings["enabled_comments_chart"] ==1){ ?>
<div class="card card-secondary">
    <div class="card-header">
        <h3 class="card-title"><?=_l("Comments",$this)?></h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
        </div>
    </div>
    <div class="card-body"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
        <canvas id="donutCommentChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 604px;" width="604" height="250" class="chartjs-render-monitor"></canvas>
    </div>

    <script>
        //-------------
        //- DONUT CHART -
        //-------------
        // Get context with jQuery - using jQuery's .get() method.
        var data = [];
        var labels =[];
        var backgroundColor = [];
        var getHexColor = function(){
            var letters = "0123456789ABCDEF";

            // html color code starts with #
            var color = '#';

            // generating 6 times as HTML color code consist
            // of 6 letter or digits
            for (var i = 0; i < 6; i++)
                color += letters[(Math.floor(Math.random() * 16))];

            return color;
        }
        var series = <?=count($languages)?>;
        <?php $i = 0; ?>
        <?php foreach($languages as $item){ ?>
        data[<?=$i?>] = <?=$item["comment_percent"]?> ;
        labels[<?=$i?>] = "<?=$item["language_name"]?>";
        backgroundColor[<?=$i?>]=getHexColor();
        <?php $i++; } ?>
        var donutChartCanvas = $('#donutCommentChart').get(0).getContext('2d')
        var donutData        = {
            labels: labels,
            datasets: [
                {
                    data: data,
                    backgroundColor : backgroundColor
                }
            ]
        }
        var donutOptions     = {
            maintainAspectRatio : false,
            responsive : true
        }
        //Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        var donutChart = new Chart(donutChartCanvas, {
            type: 'doughnut',
            data: donutData,
            options: donutOptions
        })
    </script>
    <!-- /.card-body -->
</div>
<?php } ?>


<!-- TO DO List -->
<?php if(isset($settings["enabled_user_tasks_list"]) && $settings["enabled_user_tasks_list"] ==1){ ?>
<div class="card">
    <!-- Modal -->
    <div id="todo-list-modal" class="modal fade" role="dialog" style="z-index: 999999!important;">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Task list</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form id ="todo-list-modal-form">

                <div class="modal-body">
                    <div class="form-group row ">
                        <label for="data[name]" class="control-label col-lg-2"><?=_l('Task Name',$this)?></label>
                        <div class="col-lg-10">
                            <input autocomplete="off" class=" form-control" id="data[name]" name="data[name]" type="text" value="">
                        </div>
                    </div>
                    <div class="form-group row clearfix">
                        <label for="data[is_done]" class="control-label col-lg-2"><?=_l('Completed',$this)?></label>
                        <div class="col-lg-10 col-sm-10">
                            <div class="icheck-primary d-inline">
                                <input value="1" type="checkbox" class="custom-checkbox-event" id="data[is_done]">
                                <label for="data[is_done]">
                                </label>
                            </div>
                            <input type="hidden" class="custom-checkbox-input" name="data[is_done]" value="0">
                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                    <button id="submit-fask-form" type="button" class="btn btn-default" ><?=_l('Save',$this)?></button>
                    <button type="button" class="btn btn-default" data-dismiss="modal"><?=_l('Close',$this)?></button>
                </div>
                </form>

            </div>

        </div>
    </div>
    <script>
        $(function() {
            $("#tasks-list-add-new").on("click",function(){
                $("#todo-list-modal").modal("toggle")
            });
            $("#submit-fask-form").on("click",function() {
                $.ajax({
                    type: "post",
                    url: "<?=$base_url?>"+"/user_tasks",
                    cache: false,
                    data: $('#todo-list-modal-form').serialize(),
                    success: function(json){
                        try{
                            var obj = jQuery.parseJSON(json);
                            if(obj['STATUS']){
                                $("#todo-list-modal-form")[0].reset();
                                $("#todo-list-modal").modal("toggle")

                                var doneClass ="";
                                var isChecked = "";
                                if(obj['is_done'] =="1"){
                                    doneClass ="done";
                                    isChecked ="checked";
                                }

                        $(".todo-list").append('<li class="'+doneClass+'" id ="'+obj['user_task_id']+'">'+
                                '<span class="handle">'+
                                '<i class="fas fa-ellipsis-v"></i>'+
                                '<i class="fas fa-ellipsis-v"></i>'+
                                '</span>'+
                                '<div  class="icheck-primary d-inline ml-2">'+
                                '<input type="checkbox" value="'+obj['is_done']+'"' +isChecked +'>'+
                                '<label for="todoCheck1"></label>'+
                                '</div>'+
                                '<span class="text">'+obj['name']+'</span>'+
                                '<small class="badge badge-danger"><i class="far fa-clock"></i> 2 mins</small>'+
                                '<div class="tools">'+
                                '<i class="fas fa-edit"></i>'+
                                '<i class="fas fa-trash"></i>'+
                                '</div>'+
                                '</li>');
                                customAlert(obj['type'], obj['message']);
                            }else{
                                customAlert("error", "<?=_l('Something went wrong!',$this)?>");
                            }

                        }catch(e) {
                            customAlert("error", "<?=_l('Exception while request..',$this)?>");
                        }
                    },
                    error: function(){
                        customAlert("error", "<?=_l('Error while request..',$this)?>");
                    }
                });
            });

            $("i.delete-task").on("click", function(){
                var $that = $(this);
                var $li = $($that.closest("li"));
                var id = $li.attr('id');

                var url ="<?=$base_url?>"+"/delete_user_tasks/"+id;
                $.ajax({
                    type: "post",
                    url: url,
                    cache: false,
                    //data: {'id':id},
                    success: function(json){
                        try{
                            var obj = jQuery.parseJSON(json);
                            if(obj['STATUS']){
                                $li.remove();
                                customAlert(obj['type'], obj['message']);
                            }else{
                                customAlert("error", "<?=_l('Something went wrong!',$this)?>");
                            }

                        }catch(e) {
                            customAlert("error", "<?=_l('Exception while request..',$this)?>");
                        }
                    },
                    error: function(){
                        customAlert("error", "<?=_l('Error while request..',$this)?>");
                    }
                });
            });
            $("i.edit-task").on("click", function(){
                var $li = $($(this).closest("li"));
                var id = $li.attr('id');

                $li.find(".inline-edit-span").hide();
                $li.find(".inline-edit-input").show();
            });
            $( ".inline-edit-input" )
                .focusout(function() {
                    var $that = $(this);
                    var $li = $($that.closest("li"));
                    var id = $li.attr('id');

                    var url ="<?=$base_url?>edit_user_tasks/";

                    $.ajax({
                        type: "post",
                        url: url,
                        cache: false,
                        data: {"name":$that.val(),"user_tasks_id":id },
                        success: function(json){
                            try{
                                var obj = jQuery.parseJSON(json);
                                if(obj['STATUS']){
                                    $li.find(".inline-edit-span").text($that.val());
                                    $li.find(".inline-edit-span").show();
                                    $li.find(".inline-edit-input").hide();
                                    customAlert(obj['type'], obj['message']);
                                }else{
                                    customAlert("error", "<?=_l('Something went wrong!',$this)?>");
                                }

                            }catch(e) {
                                customAlert("error", "<?=_l('Exception while request..',$this)?>");
                            }
                        },
                        error: function(){
                            customAlert("error", "<?=_l('Error while request..',$this)?>");
                        }
                    });


                });
            $(".inline-edit-checkbox").change(function() {
                var is_done = 0;
                if(this.checked) {
                    is_done = 1;
                }
                var $that = $(this);
                var $li = $($that.closest("li"));
                var id = $li.attr('id');

                var url ="<?=$base_url?>edit_user_tasks/";

                $.ajax({
                    type: "post",
                    url: url,
                    cache: false,
                    data: {"is_done":is_done,"user_tasks_id":id },
                    success: function(json){
                        try{
                            var obj = jQuery.parseJSON(json);
                            if(obj['STATUS']){
                                customAlert(obj['type'], obj['message']);

                            }else{
                                customAlert("error", "<?=_l('Something went wrong!',$this)?>");
                            }

                        }catch(e) {
                            customAlert("error", "<?=_l('Exception while request..',$this)?>");
                        }
                    },
                    error: function(){
                        customAlert("error", "<?=_l('Error while request..',$this)?>");
                    }
                });

            });

        });
    </script>

    <div class="card-header">
        <h3 class="card-title">
            <i class="ion ion-clipboard mr-1"></i>
            <?=_l('Tasks List',$this)?>
        </h3>

        <!--<div class="card-tools">
            <ul class="pagination pagination-sm">
                <li class="page-item"><a href="#" class="page-link">&laquo;</a></li>
                <li class="page-item"><a href="#" class="page-link">1</a></li>
                <li class="page-item"><a href="#" class="page-link">2</a></li>
                <li class="page-item"><a href="#" class="page-link">3</a></li>
                <li class="page-item"><a href="#" class="page-link">&raquo;</a></li>
            </ul>
        </div>-->
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <ul class="todo-list" data-widget="todo-list">
            <?php foreach($users_tasks as $data){ ?>
                <li id ="<?=$data["user_tasks_id"]?>">
                    <!-- drag handle -->
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <!-- checkbox -->
                    <div  class="icheck-primary d-inline ml-2">
                        <input class="inline-edit-checkbox" type="checkbox" value <?=($data["is_done"] ==1)?'checked':'' ?>  id="Check<?=$data["user_tasks_id"]?>">
                        <label for="Check<?=$data["user_tasks_id"]?>"></label>
                    </div>
                    <!-- todo text -->
                    <span  class="text inline-edit-span"><?=$data["name"]?></span>
                    <input style="display: none" autocomplete="off" class="inline-edit-input" id="Input<?=$data["user_tasks_id"]?>"  type="text" value="<?=$data["name"]?>">
                    <!-- Emphasis label -->
                    <!--<small class="badge badge-danger"><i class="far fa-clock"></i> 2 mins</small>-->
                    <!-- General tools such as edit or delete-->
                    <div class="tools">
                        <i class="edit-task fas fa-edit"></i>
                        <i class="delete-task fas fa-trash"></i>
                    </div>
                </li>
            <?php } ?>

        </ul>
    </div>
    <!-- /.card-body -->
    <div class="card-footer clearfix">
        <button id="tasks-list-add-new" type="button" class="btn btn-info float-right"><i class="fas fa-plus"></i><?=_l("Add item",$this)?></button>
    </div>
</div>
<?php } ?>
<!-- /.card -->
</section>
<!-- /.Left col -->
<!-- right col (We are only adding the ID to make the widgets sortable)-->
<section class="col-lg-5 connectedSortable">

    <!-- VISITORS -->
    <div class="card">
        <div class="card-header border-0">
            <div class="d-flex justify-content-between">
                <h3 class="card-title"><?=_l("Visit & Visitors Statistics",$this)?></h3>

            </div>
        </div>
        <div class="card-body">
            <div class="d-flex">
                <p class="d-flex flex-column">
                    <span class="text-bold text-lg"><?php echo _l("Total Visits",$this)?>: <?php echo isset($statistic_total_visits)?$statistic_total_visits:0; ?> <br>
                    <?php echo _l("Total Visitors",$this)?>: <?php echo isset($statistic_total_visitors)?$statistic_total_visitors:0; ?></span>
                </p>

               <!-- <p class="ml-auto d-flex flex-column text-right">
                    <span class="text-success">
                      <i class="fas fa-arrow-up"></i> 12.5%
                    </span>
                    <span class="text-muted">Since last week</span>
                </p>-->
            </div>
            <!-- /.d-flex -->

            <div class="position-relative mb-4"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                <canvas id="visitors-chart" height="200" width="604" class="chartjs-render-monitor" style="display: block; width: 604px; height: 200px;"></canvas>
            </div>

            <div class="d-flex flex-row justify-content-end">
                  <span class="mr-2">
                    <i class="fas fa-square text-primary"></i><?=_l("This Week",$this)?>
                  </span>

                  <!--<span>
                    <i class="fas fa-square text-gray"></i> Last Week
                  </span>-->
            </div>
        </div>
        <script>
            var ticksStyle = {
                fontColor: '#495057',
                fontStyle: 'bold'
            }

            var mode      = 'index'
            var intersect = true
            var data =[];
            var labels=[];

            <?php if(isset($statistic) && count($statistic)!=0){ ?>
            <?php
            $index =0;
            $class ="";
            foreach($statistic as $item){
                ?>
            labels[<?=$index?>]="<?php echo date("D",$item["statistic_date"]); ?> <?php echo date("d.m",$item["statistic_date"]); ?> <?php echo date("Y",$item["statistic_date"]); ?>";
            data[<?=$index?>]=<?php echo $item["visitors"]?>;

            <?php
            $index= $index +1;
            } ?>
            <?php } ?>

            var $visitorsChart = $('#visitors-chart')
            var visitorsChart  = new Chart($visitorsChart, {
                data   : {
                    labels  : labels,
                    datasets: [{
                        type                : 'line',
                        data                : data,
                        backgroundColor     : 'transparent',
                        borderColor         : '#007bff',
                        pointBorderColor    : '#007bff',
                        pointBackgroundColor: '#007bff',
                        fill                : false
                        // pointHoverBackgroundColor: '#007bff',
                        // pointHoverBorderColor    : '#007bff'
                    },
                        /*{
                            type                : 'line',
                            data                : [60, 80, 70, 67, 80, 77, 100],
                            backgroundColor     : 'tansparent',
                            borderColor         : '#ced4da',
                            pointBorderColor    : '#ced4da',
                            pointBackgroundColor: '#ced4da',
                            fill                : false
                            // pointHoverBackgroundColor: '#ced4da',
                            // pointHoverBorderColor    : '#ced4da'
                        }*/
                    ]
                },
                options: {
                    maintainAspectRatio: false,
                    tooltips           : {
                        mode     : mode,
                        intersect: intersect
                    },
                    hover              : {
                        mode     : mode,
                        intersect: intersect
                    },
                    legend             : {
                        display: false
                    },
                    scales             : {
                        yAxes: [{
                            // display: false,
                            gridLines: {
                                display      : true,
                                lineWidth    : '4px',
                                color        : 'rgba(0, 0, 0, .2)',
                                zeroLineColor: 'transparent'
                            },
                            ticks    : $.extend({
                                beginAtZero : true,
                                suggestedMax: 200
                            }, ticksStyle)
                        }],
                        xAxes: [{
                            display  : true,
                            gridLines: {
                                display: false
                            },
                            ticks    : ticksStyle
                        }]
                    }
                }
            })
        </script>
    </div>
    <!-- /.card -->

    <!-- Calendar -->
    <?php if(isset($settings["enabled_calendar"]) && $settings["enabled_calendar"] ==1){ ?>

        <div class="card bg-gradient-success">
        <div class="card-header border-0">

            <h3 class="card-title">
                <i class="far fa-calendar-alt"></i>
                Calendar
            </h3>
            <!-- tools card -->
            <div class="card-tools">
                <!-- button with a dropdown -->
                <!--<div class="btn-group">
                    <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                        <i class="fas fa-bars"></i></button>
                    <div class="dropdown-menu float-right" role="menu">
                        <a href="#" class="dropdown-item">Add new event</a>
                        <a href="#" class="dropdown-item">Clear events</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">View calendar</a>
                    </div>
                </div>-->
                <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <!--<button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                </button>-->
            </div>
            <!-- /. tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body pt-0">
            <!--The calendar -->
            <div id="calendar" style="width: 100%"></div>
        </div>
        <script>
            // The Calender
            $('#calendar').datetimepicker({
                format: 'L',
                inline: true
            })
        </script>
        <!-- /.card-body -->
    </div>
    <?php } ?>
    <!-- /.card -->
</section>
<!-- right col -->
</div>
<!-- /.row (main row) -->
</div><!-- /.container-fluid -->
</section>