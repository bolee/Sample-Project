<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="language" content="en" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="<?php if(isset($description)) { echo $description; } else echo $page->description; ?>" />
    <meta name="keywords" content="<?php if(isset($keywords)) { echo $keywords; } else echo $page->keywords ?>" />
    <meta name="robots" content="<?php echo ($page->allow_index) ? 'index' : 'noindex' ;?>, <?php echo ($page->allow_follow) ? 'follow' : 'nofollow' ;?>" />
    <meta name="author" content="GxcSolutions" />
    <meta name="copyright" content="GxcSolutions" />
   
    <link rel="shortcut icon" href="<?php echo $layout_asset; ?>/images/favicon.ico" type="image/x-icon" />               
    <link rel="stylesheet" href="<?php echo $layout_asset; ?>/css/screen.css" type="text/css" media="screen, projection" />
    <link rel="stylesheet" href="<?php echo $layout_asset; ?>/css/print.css" type="text/css" media="print" />
    <!--[if IE]><link rel="stylesheet" href="<?php echo $layout_asset; ?>/css/ie.css" type="text/css" media="screen, projection" /><![endif]-->

	<!-- custom stylesheet -->
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo $layout_asset; ?>/css/custom.css" />

        
    <title><?php if(isset($title)) { echo $title. " - ".settings()->get('general', 'site_name'); } else echo $page->title; ?></title>
        
    <?php    
        $cs=Yii::app()->clientScript;
                
        $cs->scriptMap=array(
            'jquery.js'=>"http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js",            
            'jquery.min.js'=>"http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js",
            'jquery-ui.js'=>"https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js",
            'jquery-ui.min.js'=>"https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js",
            'jquery-ui.css'=>false            
        );        
        $cs->registerCoreScript('jquery');        
        //$cs->registerCoreScript('jquery.ui');
                   
		$cs->registerScriptFile( $layout_asset.'/js/custom.js?v=1');        
    ?>
    <?php 
		//Render Widget for Header Script
		$this->widget('BlockRenderWidget',array('page'=>$page,'region'=>'3','layout_asset'=>$layout_asset)); 
	?>
</head>