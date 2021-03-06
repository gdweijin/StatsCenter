<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="utf-8">
    <title><?=Swoole::$php->config['common']['site_name']?></title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <?php include __DIR__.'/../include/css.php'; ?>
</head>
<body class="">
<header style="background: #E4E4E4;color: #22201F" id="header">
    <?php include __DIR__ . '/../include/top_menu.php'; ?>
</header>
<aside id="left-panel">
    <!--            --><?php //include __DIR__.'/../include/login_info.php'; ?>
    <?php include __DIR__.'/../include/leftmenu.php'; ?>
    <span class="minifyme"> <i class="fa fa-arrow-circle-left hit"></i> </span>
</aside>
<!-- END NAVIGATION -->

<!-- MAIN PANEL -->
<div id="main" role="main">

    <!-- RIBBON -->
    <div id="ribbon">

    <span class="ribbon-button-alignment">
        <span id="refresh" class="btn btn-ribbon" data-title="refresh" rel="tooltip"
              data-placement="bottom"
              data-original-title="<i class='text-warning fa fa-warning'></i> Warning! This will reset all your widget settings."
              data-html="true"><i class="fa fa-refresh"></i></span> </span>

        <!-- breadcrumb -->
        <ol class="breadcrumb">
            <li>Home</li>
            <li>Dashboard</li>
        </ol>

    </div>

    <div id="content">
            <!-- row -->
            <div class="row">

                <!-- NEW WIDGET START -->
                <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12 sortable-grid ui-sortable">

                    <!-- Widget ID (each widget will need unique ID)-->

                    <!-- end widget -->

                    <!-- Widget ID (each widget will need unique ID)-->

                    <!-- end widget -->

                    <!-- Widget ID (each widget will need unique ID)-->

                    <!-- end widget -->

                    <!-- Widget ID (each widget will need unique ID)-->

                    <!-- end widget -->

                    <div class="jarviswidget jarviswidget-color-darken jarviswidget-sortable" id="wid-id-0"
                         data-widget-editbutton="false" role="widget" style="">
                        <!-- widget options:
                        usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

                        data-widget-colorbutton="false"
                        data-widget-editbutton="false"
                        data-widget-togglebutton="false"
                        data-widget-deletebutton="false"
                        data-widget-fullscreenbutton="false"
                        data-widget-custombutton="false"
                        data-widget-collapsed="true"
                        data-widget-sortable="false"

                        -->
                        <header role="heading">
                            <span class="widget-icon"> <i class="fa fa-table"></i> </span>

                            <h2>历史记录对比</h2>

                            <span class="jarviswidget-loader"><i class="fa fa-refresh fa-spin"></i></span></header>

                        <!-- widget div-->
                        <div role="content">

                            <!-- widget edit box -->
                            <div class="jarviswidget-editbox">
                                <!-- This area used as dropdown edit box -->

                            </div>
                            <!-- end widget edit box -->

                            <!-- widget content -->
                            <div class="widget-body no-padding">
                                <div class="widget-body-toolbar" style="height: 40px;">

                                </div>

                                <div id="dt_basic_wrapper" class="dataTables_wrapper form-inline" role="grid">
                                    <div class="dt-top-row">
                                        <div id="dt_basic_length" class="dataTables_length"><span class="smart-form"><label
                                                    class="select" style="width:60px"><select size="1"
                                                                                              name="dt_basic_length"
                                                                                              aria-controls="dt_basic">
                                                        <option value="10" selected="selected">10</option>
                                                        <option value="25">25</option>
                                                        <option value="50">50</option>
                                                        <option value="100">100</option>
                                                    </select><i></i></label></span></div>
                                        <div class="dataTables_filter" id="dt_basic_filter">
	                                        <div class="form-group" style="width: 400px;">
		                                        <select id="uri" class="select2">
			                                        <option value="">所有接口</option>
			                                        <?php foreach ($uri as $id=>$m): ?>
				                                        <option value="<?= $id ?>"
					                                        <?php if ($id == $uri_id) echo 'selected="selected"'; ?> >
					                                        <?= $m ?></option>
			                                        <?php endforeach; ?>
		                                        </select>
	                                        </div>
	                                        <div class="form-group">
		                                        时间：
		                                        <label class="select">
			                                        <select class="input-sm" id="filter_hour_s" onchange="StatsG.filterByHour(<?=(empty($force_reload)?'false':'true')?>)">
				                                        <option value='00' selected="selected">00</option>
				                                        <?php
				                                        for ($i = 1; $i < 24; $i++)
				                                        {
					                                        $v = $i >= 10 ? $i : '0' . $i;
					                                        $select = (!empty($_GET['hour_start']) and $v == $_GET['hour_start']) ? 'selected="selected"' : '';
					                                        echo "<option value='$v' $select>$v</option>\n";
				                                        }
				                                        ?>
			                                        </select>
		                                        </label> ~
		                                        <label class="select">
			                                        <select class="input-sm" id="filter_hour_e" onchange="StatsG.filterByHour(<?=(empty($force_reload)?'false':'true')?>)">
				                                        <?php
				                                        for ($i = 0; $i < 23; $i++) {
					                                        $v = $i >= 10 ? $i : '0' . $i;
					                                        echo "<option value=$v>$v</option>\n";
				                                        }
				                                        ?>
				                                        <option value='23' selected="selected">23</option>
			                                        </select>
		                                        </label>
	                                        </div>
                                            <div class="form-group">
                                                日期：
                                                <input type="text" class="form-control datepicker" data-dateformat="yy-mm-dd" id="history_date_start" readonly="readonly" value="<?=$_GET['date_key']?>" onchange="StatsG.showHistoryData()" />
                                                &nbsp;&nbsp;&nbsp;与&nbsp;&nbsp;&nbsp;
                                                <input type="text" class="form-control datepicker" data-dateformat="yy-mm-dd" id="history_date_end" readonly="readonly" value="<?=date('Y-m-d', strtotime($_GET['date_key']) - 86400)?>" onchange="StatsG.showHistoryData()"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="content">
                                    <div id="history_chart1" style="height:400px"></div>
                                </div>

                                <table id="dt_basic" class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th width="100">时间1</th>
                                        <th width="100">调用次数</th>
                                        <th width="100">失败次数</th>
                                        <th width="100">成功率</th>
                                        <th width="100">成功平均时间</th>
                                        <th width="100">失败平均时间</th>
                                        <th width="100">时间2</th>
                                        <th width="100">调用次数</th>
                                        <th width="100">失败次数</th>
                                        <th width="100">成功率</th>
                                        <th width="100">成功平均时间</th>
                                        <th width="100">失败平均时间</th>
                                    </tr>
                                    </thead>
                                    <tbody id="history_table"></tbody>
                                </table>

                            </div>

                        </div>
                        <!-- end widget content -->

                    </div>
                    <!-- end widget div -->

            </div>
            <div class="jarviswidget jarviswidget-color-blueDark jarviswidget-sortable" id="wid-id-1"
                 data-widget-editbutton="false" role="widget" style="">


            </div>
            <div class="jarviswidget jarviswidget-color-blueDark jarviswidget-sortable" id="wid-id-2"
                 data-widget-editbutton="false" role="widget" style="">

            </div>
            <div class="jarviswidget jarviswidget-color-blueDark jarviswidget-sortable" id="wid-id-3"
                 data-widget-editbutton="false" role="widget" style="">

            </div>
            </article>
            <!-- WIDGET END -->
    </div>
</div>
<!-- END MAIN CONTENT -->

<!-- END MAIN PANEL -->

<!-- SHORTCUT AREA : With large tiles (activated via clicking user name tag)
Note: These tiles are completely responsive,
you can add as many as you like
-->
<div id="shortcut">
    <ul>
        <li>
            <a href="#inbox.html" class="jarvismetro-tile big-cubes bg-color-blue"> <span class="iconbox"> <i
                        class="fa fa-envelope fa-4x"></i> <span>Mail <span
                            class="label pull-right bg-color-darken">14</span></span> </span> </a>
        </li>
        <li>
            <a href="#calendar.html" class="jarvismetro-tile big-cubes bg-color-orangeDark"> <span class="iconbox"> <i
                        class="fa fa-calendar fa-4x"></i> <span>Calendar</span> </span> </a>
        </li>
        <li>
            <a href="#gmap-xml.html" class="jarvismetro-tile big-cubes bg-color-purple"> <span class="iconbox"> <i
                        class="fa fa-map-marker fa-4x"></i> <span>Maps</span> </span> </a>
        </li>
        <li>
            <a href="#invoice.html" class="jarvismetro-tile big-cubes bg-color-blueDark"> <span class="iconbox"> <i
                        class="fa fa-book fa-4x"></i> <span>Invoice <span
                            class="label pull-right bg-color-darken">99</span></span> </span> </a>
        </li>
        <li>
            <a href="#gallery.html" class="jarvismetro-tile big-cubes bg-color-greenLight"> <span class="iconbox"> <i
                        class="fa fa-picture-o fa-4x"></i> <span>Gallery </span> </span> </a>
        </li>
        <li>
            <a href="javascript:void(0);" class="jarvismetro-tile big-cubes selected bg-color-pinkDark"> <span
                    class="iconbox"> <i class="fa fa-user fa-4x"></i> <span>My Profile </span> </span> </a>
        </li>
    </ul>
</div>
<?php include dirname(__DIR__).'/include/javascript.php'; ?>
<script src="<?=WEBROOT?>/apps/static/js/appstats.js" type="text/javascript"></script>
<script src="<?=WEBROOT?>/apps/static/js/list.js" type="text/javascript"></script>
<script>
    var width = (<?php echo json_encode($width);?>);
    $(function() {
        pageSetUp();

	    StatsG.filter.h="<?php echo $_GET['h']; ?>";
	    StatsG.filter.uri="<?php echo $_GET['uri']; ?>";
		$("#datepicker").datepicker("option",
        $.datepicker.regional[ 'zh-CN' ]);

        $('#date_key').change(function () {
            StatsG.filter.date_key = $('#date_key').val();
            StatsG.showHistoryData();
        });

        $('history_date_end').datepicker();
            StatsG.showHistoryData();

        $("#toggle").click(function () {
            $("#history_module_id").toggle();
        });

	    $('#uri').change(function () {
		    StatsG.filter.uri = $('#uri').val();
		    StatsG.showHistoryData();
	    });
    });
</script>

</body>
</html>
