<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        '//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css',
        '//cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css',
        'admin-lte/bootstrap/css/bootstrap.min.css',
        'admin-lte/dist/css/AdminLTE.min.css',
        'admin-lte/dist/css/skins/_all-skins.min.css',
        'admin-lte/plugins/iCheck/flat/blue.css',
        'admin-lte/plugins/morris/morris.css',
        'admin-lte/plugins/jvectormap/jquery-jvectormap-1.2.2.css',
        'admin-lte/plugins/datepicker/datepicker3.css',
        'admin-lte/plugins/daterangepicker/daterangepicker.css',
        'admin-lte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css',
        'admin-lte/bootstrap/css/bootstrap.min.css',


        
        
    ];
    public $js = [
    
     'admin-lte/bootstrap/js/bootstrap.min.js',
     //'admin-lte/plugins/jQuery/jquery-2.2.3.min.js',
     '//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js',
     'admin-lte/plugins/morris/morris.min.js',
     'admin-lte/plugins/sparkline/jquery.sparkline.min.js',
     'admin-lte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js',
     'admin-lte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js',
     'admin-lte/plugins/knob/jquery.knob.js',
     'admin-lte/plugins/daterangepicker/daterangepicker.js',
     'admin-lte/plugins/datepicker/bootstrap-datepicker.js',
     'admin-lte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js',
     'admin-lte/plugins/slimScroll/jquery.slimscroll.min.js',
     'admin-lte/plugins/fastclick/fastclick.js',
     'admin-lte/dist/js/app.min.js',
     //'admin-lte/dist/js/pages/dashboard.js',
     'admin-lte/dist/js/demo.js',
     'admin-lte/plugins/fastclick/fastclick.js',
     'admin-lte/plugins/fastclick/fastclick.js',
     'admin-lte/dist/js/app.min.js',
     
     
    ];
     public $jsOptions = [ 'position' => \yii\web\View::POS_END ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',

    ];
}
