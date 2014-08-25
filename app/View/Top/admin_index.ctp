<?php
$this -> start('title');
echo 'Dashboard'; 
$this -> end();
?>

<div class="page-content">
    <div class="container-fluid">

        <!-- Begin page heading -->
        <h1 class="page-heading">DASHBOARD <small>Thế giới của bé</small></h1>
        <!-- End page heading -->
        <!-- BEGIN EXAMPLE ALERT -->
        <div class="alert alert-warning alert-bold-border fade in alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <p><strong>Xin chào!</strong></p>
            <p class="text-muted">
                Hãy tin tưởng vào <?php echo $this -> Html -> link('Baby Stores', '#fakelink', array('class' => 'alert-link')) ?>, bé của bạn sẽ có 1 phong cách thời trang cực kỳ đáng yêu và hợp mode! <i class="fa fa-smile-o"></i>
            </p>
        </div>
        <!-- END EXAMPLE ALERT -->
        <!-- BEGIN SiTE INFORMATIONS -->
        <div class="row">
            <div class="col-sm-3">
                <div class="the-box no-border bg-success tiles-information">
                    <i class="fa fa-users icon-bg"></i>
                    <div class="tiles-inner text-center">
                        <p>LƯỢNG KHÁCH TRONG NGÀY</p>
                        <h1 class="bolded">12,254K</h1>
                        <div class="progress no-rounded progress-xs">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                            </div><!-- /.progress-bar .progress-bar-success -->
                        </div><!-- /.progress .no-rounded -->
                        <p><small>Nhiều hơn hôm qua ( 7,5% )</small></p>
                    </div><!-- /.tiles-inner -->
                </div><!-- /.the-box no-border -->
            </div><!-- /.col-sm-3 -->
            <div class="col-sm-3">
                <div class="the-box no-border bg-primary tiles-information">
                    <i class="fa fa-shopping-cart icon-bg"></i>
                    <div class="tiles-inner text-center">
                        <p>LƯỢNG SẢN PHẨM BÁN TRONG NGÀY</p>
                        <h1 class="bolded">521</h1>
                        <div class="progress no-rounded progress-xs">
                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                            </div><!-- /.progress-bar .progress-bar-primary -->
                        </div><!-- /.progress .no-rounded -->
                        <p><small>Nhiều hơn hôm qua ( 10,5% )</small></p>
                    </div><!-- /.tiles-inner -->
                </div><!-- /.the-box no-border -->
            </div><!-- /.col-sm-3 -->
            <div class="col-sm-3">
                <div class="the-box no-border bg-danger tiles-information">
                    <i class="fa fa-comments icon-bg"></i>
                    <div class="tiles-inner text-center">
                        <p>CÂU HỎI TRONG NGÀY</p>
                        <h1 class="bolded">124</h1>
                        <div class="progress no-rounded progress-xs">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                            </div><!-- /.progress-bar .progress-bar-danger -->
                        </div><!-- /.progress .no-rounded -->
                        <p><small>Nhiều hơn hôm qua ( <span class="text-danger">-7,5%</span> )</small></p>
                    </div><!-- /.tiles-inner -->
                </div><!-- /.the-box no-border -->
            </div><!-- /.col-sm-3 -->
            <div class="col-sm-3">
                <div class="the-box no-border bg-warning tiles-information">
                    <i class="fa fa-money icon-bg"></i>
                    <div class="tiles-inner text-center">
                        <p>SỐ TIỀN NHẬN TRONG NGÀY</p>
                        <h1 class="bolded">10,241</h1>
                        <div class="progress no-rounded progress-xs">
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                            </div><!-- /.progress-bar .progress-bar-warning -->
                        </div><!-- /.progress .no-rounded -->
                        <p><small>Nhiều hơn hôm qua ( 2,5% )</small></p>
                    </div><!-- /.tiles-inner -->
                </div><!-- /.the-box no-border -->
            </div><!-- /.col-sm-3 -->
        </div><!-- /.row -->
        <!-- END SITE INFORMATIONS -->


        <div class="row">

            <div class="col-lg-12">

                <!-- BEGIN WEATHER WIDGET 3 -->
                <div class="the-box no-border" id="weather-widget-1">
                    <h4 class="text-center bolded white-text">YOGYAKARTA, ID</h4>
                    <p class="text-center white-text">TONIGHT</p>
                    <div class="weather-widget">
                        <div class="row">
                            <div class="col-xs-6 text-center">
                                <canvas id="sleet" width="140" height="140"></canvas>
                            </div><!-- /.col-xs-6 -->
                            <div class="col-xs-6">
                                <h1 class="bolded degrees white-text">28<i class="wi-degrees"></i></h1>
                                <p class="white-text">Will rain at night</p>
                            </div><!-- /.col-xs-6 -->
                        </div><!-- /.row -->
                    </div><!-- /.weather-widget -->
                    <div class="row">
                        <div class="col-xs-4 text-center">
                            <h4 class="white-text">SAT</h4>
                            <canvas id="clear-night" width="50" height="50"></canvas>
                            <h4 class="bolded white-text">27<i class="wi-degrees"></i></h4>
                        </div><!-- /.col-xs-4 -->
                        <div class="col-xs-4 text-center">
                            <h4 class="white-text">SUN</h4>
                            <canvas id="fog" width="50" height="50"></canvas>
                            <h4 class="bolded white-text">26<i class="wi-degrees"></i></h4>
                        </div><!-- /.col-xs-4 -->
                        <div class="col-xs-4 text-center">
                            <h4 class="white-text">MON</h4>
                            <canvas id="snow" width="50" height="50"></canvas>
                            <h4 class="bolded white-text">15<i class="wi-degrees"></i></h4>
                        </div><!-- /.col-xs-4 -->
                    </div><!-- /.row -->
                </div><!-- /.the-box bg-info no-border -->
                <!-- END WEATHER WIDGET 2 -->

            </div>

        </div><!-- /.container-fluid -->
    </div><!-- /.page-content -->
