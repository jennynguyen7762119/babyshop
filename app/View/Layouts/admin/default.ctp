<!DOCTYPE html>
<html>
    <head>
    	<?php echo $this->Html->charset("utf-8");?>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="Sentir, Responsive admin and dashboard UI kits template">
        <meta name="keywords" content="admin,bootstrap,template,responsive admin,dashboard template,web apps template">
        <meta name="author" content="Ari Rusmanto, Isoh Design Studio, Warung Themes">
        <title><?php echo $this->fetch("title");?></title>
        
        <!-- BOOTSTRAP CSS (REQUIRED ALL PAGE)-->
        <?php echo $this->Html->css("admin/css/bootstrap.min",null, array('inline' => false));?>
        <?php echo $this->Html->css("admin/css/bootstrap-theme.min",null, array('inline' => false));?>
        <?php echo $this->Html->css("admin/css/bootstrap-theme",null, array('inline' => false));?>

        <!-- PLUGINS CSS -->    
		<?php echo $this->Html->css("admin/plugins/weather-icon/css/weather-icons.min",null, array('inline' => false));?>
        <?php echo $this->Html->css("admin/plugins/prettify/prettify.min",null, array('inline' => false));?>
        <?php echo $this->Html->css("admin/plugins/magnific-popup/magnific-popup.min",null, array('inline' => false));?>
        <?php echo $this->Html->css("admin/plugins/owl-carousel/owl.carousel.min",null, array('inline' => false));?>
        <?php echo $this->Html->css("admin/plugins/owl-carousel/owl.theme.min",null, array('inline' => false));?>
        <?php echo $this->Html->css("admin/plugins/owl-carousel/owl.transitions.min",null, array('inline' => false));?>
        <?php echo $this->Html->css("admin/plugins/chosen/chosen.min",null, array('inline' => false));?>
        <?php echo $this->Html->css("admin/plugins/icheck/skins/all",null, array('inline' => false));?>
        <?php echo $this->Html->css("admin/plugins/datepicker/datepicker.min",null, array('inline' => false));?>
        <?php echo $this->Html->css("admin/plugins/timepicker/bootstrap-timepicker.min",null, array('inline' => false));?>
        <?php echo $this->Html->css("admin/plugins/validator/bootstrapValidator.min",null, array('inline' => false));?>
        <?php echo $this->Html->css("admin/plugins/summernote/summernote.min",null, array('inline' => false));?>
        <?php echo $this->Html->css("admin/plugins/markdown/bootstrap-markdown.min",null, array('inline' => false));?>
        <?php echo $this->Html->css("admin/plugins/datatable/css/bootstrap.datatable.min",null, array('inline' => false));?>
        <?php echo $this->Html->css("admin/plugins/morris-chart/morris.min",null, array('inline' => false));?>
        <?php echo $this->Html->css("admin/plugins/c3-chart/c3.min",null, array('inline' => false));?>
        <?php echo $this->Html->css("admin/plugins/slider/slider.min",null, array('inline' => false));?>
        
        <!-- MAIN CSS (REQUIRED ALL PAGE)-->
        <?php echo $this->Html->css("admin/plugins/font-awesome/css/font-awesome.min",null, array('inline' => false));?>
        <?php echo $this->Html->css("admin/css/style",null, array('inline' => false));?>
        <?php echo $this->Html->css("admin/css/style-responsive",null, array('inline' => false));?>
        
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <?php echo $this->fetch("css"); ?>
        <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(150);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
    </head>
    <body class="tooltips">
       <!-- BEGIN TOP NAV -->
       <?php echo $this->element("/admin/top-nav");?>
       <!-- END TOP NAV -->
       
       <!-- BEGIN SIDEBAR LEFT -->
       <?php echo $this->element("/admin/sidebar-left")?>
       <!-- END SIDEBAR LEFT -->
       
       <!-- BEGIN SIDEBAR RIGHT HEADING -->
       <?php echo $this->element("/admin/sidebar-right-heading");?>
       <!-- END SIDEBAR RIGHT HEADING -->
       
       <!-- BEGIN PAGE CONTENT -->
       <?php echo $this->fetch("content");?>
       <!-- END PAGE CONTENT -->
       
       <!-- BEGIN FOOTER -->
       <?php echo $this->element("/admin/footer");?>
        <!-- END FOOTER -->
        
        <!--
    ===========================================================
    END PAGE
    ===========================================================
    -->
    <!--
    ===========================================================
    Placed at the end of the document so the pages load faster
    ===========================================================
    -->
    <!-- MAIN JAVASRCIPT (REQUIRED ALL PAGE)-->
	
	<?php echo $this->Html->script("admin/js/jquery.min", array('inline' => false));?>
	<?php echo $this->Html->script("admin/js/bootstrap.min", array('inline' => false));?>
	<?php echo $this->Html->script("admin/plugins/retina/retina.min", array('inline' => false));?>
	<?php echo $this->Html->script("admin/plugins/nicescroll/jquery.nicescroll", array('inline' => false));?>
	<?php echo $this->Html->script("admin/plugins/slimscroll/jquery.slimscroll.min", array('inline' => false));?>
	<?php echo $this->Html->script("admin/plugins/backstretch/jquery.backstretch.min", array('inline' => false));?>
	
    <!-- PLUGINS -->
       
    <?php echo $this->Html->script("admin/plugins/skycons/skycons", array('inline' => false));?>
    <?php echo $this->Html->script("admin/plugins/prettify/prettify", array('inline' => false));?>
    <?php echo $this->Html->script("admin/plugins/magnific-popup/jquery.magnific-popup.min", array('inline' => false));?>
    <?php echo $this->Html->script("admin/plugins/owl-carousel/owl.carousel.min", array('inline' => false));?>
    <?php echo $this->Html->script("admin/plugins/chosen/chosen.jquery.min", array('inline' => false));?>
    <?php echo $this->Html->script("admin/plugins/icheck/icheck.min", array('inline' => false));?>
    <?php echo $this->Html->script("admin/plugins/datepicker/bootstrap-datepicker", array('inline' => false));?>
    <?php echo $this->Html->script("admin/plugins/timepicker/bootstrap-timepicker", array('inline' => false));?>
    <?php echo $this->Html->script("admin/plugins/mask/jquery.mask.min", array('inline' => false));?>
    <?php echo $this->Html->script("admin/plugins/validator/bootstrapValidator.min", array('inline' => false));?>
    <?php echo $this->Html->script("admin/plugins/datatable/js/jquery.dataTables.min", array('inline' => false));?>
    <?php echo $this->Html->script("admin/plugins/datatable/js/bootstrap.datatable", array('inline' => false));?>
    <?php echo $this->Html->script("admin/plugins/summernote/summernote.min", array('inline' => false));?>
    <?php echo $this->Html->script("admin/plugins/markdown/markdown", array('inline' => false));?>
    <?php echo $this->Html->script("admin/plugins/markdown/to-markdown", array('inline' => false));?>
    <?php echo $this->Html->script("admin/plugins/markdown/bootstrap-markdown", array('inline' => false));?>
    <?php echo $this->Html->script("admin/plugins/slider/bootstrap-slider", array('inline' => false));?>


    <!-- EASY PIE CHART JS -->
    <?php echo $this->Html->script("admin/plugins/easypie-chart/easypiechart.min", array('inline' => false));?>
    <?php echo $this->Html->script("admin/plugins/easypie-chart/jquery.easypiechart.min", array('inline' => false));?>

    <!-- KNOB JS -->
    <!--[if IE]>
    <script type="text/javascript" src="admin/plugins/jquery-knob/excanvas.js"></script>
    <![endif]-->
    <?php echo $this->Html->script("admin/plugins/jquery-knob/jquery.knob", array('inline' => false));?>
    <?php echo $this->Html->script("admin/plugins/jquery-knob/knob", array('inline' => false));?>

    <!-- FLOT CHART JS -->
    <?php echo $this->Html->script("admin/plugins/flot-chart/jquery.flot", array('inline' => false));?>
    <?php echo $this->Html->script("admin/plugins/flot-chart/jquery.flot.tooltip", array('inline' => false));?>
	<?php echo $this->Html->script("admin/plugins/flot-chart/jquery.flot.resize", array('inline' => false));?>
    <?php echo $this->Html->script("admin/plugins/flot-chart/jquery.flot.selection", array('inline' => false));?>
    <?php echo $this->Html->script("admin/plugins/flot-chart/jquery.flot.stack", array('inline' => false));?>
    <?php echo $this->Html->script("admin/plugins/flot-chart/jquery.flot.time", array('inline' => false));?>
    
    <!-- MORRIS JS -->
    <?php echo $this->Html->script("admin/plugins/morris-chart/raphael.min", array('inline' => false));?>
    <?php echo $this->Html->script("admin/plugins/morris-chart/morris.min", array('inline' => false));?>

    <!-- C3 JS -->
    <?php echo $this->Html->script("admin/plugins/c3-chart/d3.v3.min",array('inline'=>false,'charset'=>'utf-8'));?>
    <?php echo $this->Html->script("admin/plugins/c3-chart/c3.min", array('inline' => false));?>

    <!-- MAIN APPS JS -->
    <?php echo $this->Html->script("admin/js/apps", array('inline' => false));?>
    <?php echo $this->fetch("script"); ?>
    </body>
</html>