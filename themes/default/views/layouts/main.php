<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="Optimo Solution">
        <link rel="icon" href="<?php echo Yii::app()->theme->baseUrl; ?>/images/favicon.ico">
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
        <!-- Bootstrap core CSS -->
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/default.css" rel="stylesheet">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="row top-banner-bg">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">                
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <?php echo CHtml::link(CHtml::image(Yii::app()->theme->baseUrl . '/images/logo.png', 'Logo', array('alt' => 'Logo', 'class' => 'img-responsive')), array('site/index'), array('class' => '')); ?> 
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 nav-margin-top">                            
                            <div id="navbar" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav">
                                    <li class="active"><?php echo CHtml::link('Home', array('site/index'), array('class' => 'navx')); ?></li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle navx" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">What We are <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><?php echo CHtml::link('Our Vission', array('content/view', 'id' => 1), array('class' => 'navx')); ?></li>
                                            <li><?php echo CHtml::link('Our Mission', array('content/view', 'id' => 2), array('class' => 'navx')); ?></li>
                                        </ul>
                                    </li>
                                    <li class="active"><?php echo CHtml::link('Resources', array('content/view', 'id' => 6), array('class' => 'navx')); ?></li>
                                    <li class="active"><?php echo CHtml::link('Reach Us', array('site/contact'), array('class' => 'navx')); ?></li>
                                    <li class="active"><?php echo CHtml::link('Chat with us now', array('site/index'), array('class' => 'navx')); ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php echo $content; ?>
        <div class="container">            
            <hr>
            <div class="row margin-top-20 margin-bottom-20">                
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4  padding-left-0  padding-right-0 text-left margin-top-10">
                    <p>Copyright &copy; <?php echo Yii::app()->name; ?> <?php echo date('Y'); ?></p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 margin-top-10">
                    <?php echo CHtml::link(Content::get_title(7), array('content/view', 'id' => 7), array('class' => '')); ?> | 
                    <?php echo CHtml::link(Content::get_title(8), array('content/view', 'id' => 8), array('class' => '')); ?>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 text-right padding-right-0">
                    <?php
                    $arrayCommunity = Banner::model()->findAll(array('condition' => 'catid=2 AND published=1', 'order' => 'ordering'));
                    foreach ($arrayCommunity as $key => $value) {
                        echo CHtml::link(CHtml::image(Yii::app()->baseUrl . '/uploads/banners/' . $value['banner'], $value['name'], array('alt' => $value['name'], 'style' => 'width:50px;margin-right:3px;')), $value['clickurl'], array('target' => '_blank'));
                    }
                    ?>
                </div>
            </div>
        </div> <!-- /container -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.min.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/bootstrap.min.js"></script>
    </body>
</html>
