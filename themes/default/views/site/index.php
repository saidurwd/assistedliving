<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <?php
                $arraySlideBanner = Banner::model()->findAll(array('condition' => 'catid=1 AND published=1', 'order' => 'ordering'));
                foreach ($arraySlideBanner as $key => $value) {
                    if ($value['sticky'] == 1) {
                        $sticky = 'active';
                    } else {
                        $sticky = '';
                    }
                    echo '<div class="item ' . $sticky . '">';
                    echo CHtml::image(Yii::app()->baseUrl . '/uploads/banners/' . $value['banner'], $value['name'], array('class' => 'img-responsive'));
                    echo '</div>';
                }
                ?>
            </div>
            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
<div class="container">
    <div class="row margin-top-20">
        <?php
        $arrayMainFeature = Content::model()->findAll(array('condition' => 'catid=3 AND state=1', 'order' => 'id'));
        foreach ($arrayMainFeature as $key => $value) {
            echo '<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">';
            echo CHtml::link(CHtml::image(Yii::app()->baseUrl . '/uploads/images/' . $value->images, $value->title, array('alt' => $value->title, 'class' => 'img-responsive')), array('content/view', 'id' => $value->id), array('class' => ''));
            echo '</div>';
        }
        ?>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin-top-20">
        <?php echo CHtml::link(CHtml::image(Yii::app()->theme->baseUrl . '/images/our_motto.png', 'Our Motto', array('alt' => 'Our Motto', 'class' => 'img-responsive')), array('content/staff'), array('class' => '')); ?> 
    </div>
</div>
<div class="container">
    <div class="row margin-top-20">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 box-border">
            <ul style="list-style: none;margin-top: 40px;">
                <li><?php echo CHtml::link(Content::get_title(9), array('content/view', 'id' => 9), array('class' => 'boxes')); ?></li>
                <li><?php echo CHtml::link(Content::get_title(10), array('content/view', 'id' => 10), array('class' => 'boxes')); ?></li>
                <li><?php echo CHtml::link(Content::get_title(11), array('content/view', 'id' => 11), array('class' => 'boxes')); ?></li>
                <li><?php echo CHtml::link(Content::get_title(12), array('content/view', 'id' => 12), array('class' => 'boxes')); ?></li>
            </ul>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 padding-right-0">
            <?php echo CHtml::image(Yii::app()->theme->baseUrl . '/images/social_commitment.png', 'Social Commitment', array('alt' => 'Social Commitment', 'class' => 'img-responsive')); ?>
        </div>
    </div>
    <div class="row margin-top-20">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 padding-left-0">
            <?php echo CHtml::image(Yii::app()->theme->baseUrl . '/images/assisted_living.png', 'Assisted Living', array('alt' => 'Assisted Living', 'class' => 'img-responsive')); ?>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 box-border">
            <ul style="list-style: none;margin-top: 40px;">
                <li><?php echo CHtml::link(Content::get_title(13), array('content/view', 'id' => 13), array('class' => 'boxes')); ?></li>
                <li><?php echo CHtml::link(Content::get_title(14), array('content/view', 'id' => 14), array('class' => 'boxes')); ?></li>
                <li><?php echo CHtml::link(Content::get_title(15), array('content/view', 'id' => 15), array('class' => 'boxes')); ?></li>
                <li><?php echo CHtml::link(Content::get_title(16), array('content/view', 'id' => 16), array('class' => 'boxes')); ?></li>
                <li><?php echo CHtml::link(Content::get_title(17), array('content/view', 'id' => 17), array('class' => 'boxes')); ?></li>
                <li><?php echo CHtml::link(Content::get_title(18), array('content/view', 'id' => 18), array('class' => 'boxes')); ?></li>
            </ul>
        </div>              
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin-top-20 padding-left-0  padding-right-0">
            <p class="text-center" style="font-size: 18px;">Have a deep look at our monthly activity calendar. Daily activities that relates to personal level are much wider and full of actions.</p>
            <div id="carousel-example-generic2" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <?php
                    $number = 1;
                    $arraySlideCalendar = Banner::model()->findAll(array('condition' => 'catid=3 AND published=1', 'order' => 'ordering'));
                    echo '<div class="item active">';
                    foreach ($arraySlideCalendar as $key => $value) {
                        if ($value['sticky'] == 1) {
                            $sticky = 'active';
                        } else {
                            $sticky = '';
                        }
                        if ($number % 4 == 0) {
                            echo '</div>';
                            echo '<div class="item">';
                        }
                        echo '<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">';
                        echo CHtml::link(CHtml::image(Yii::app()->baseUrl . '/uploads/banners/' . $value['banner'], $value['name'], array('alt' => $value['name'], 'class' => 'img-responsive')), '#', array('target' => '_blank'));
                        echo '</div>';
                        $number++;
                    }
                    echo '</div>';
                    ?>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic2" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic2" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <div class="row margin-top-20">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 box-border">
            <ul style="list-style: none;margin-top: 40px;">
                <li><h3>Our Pricing</h3></li>
                <li><?php echo CHtml::link(Content::get_title(19), array('content/view', 'id' => 19), array('class' => 'boxes')); ?></li>
                <li><?php echo CHtml::link(Content::get_title(20), array('content/view', 'id' => 20), array('class' => 'boxes')); ?></li>
                <li><?php echo CHtml::link(Content::get_title(21), array('content/view', 'id' => 21), array('class' => 'boxes')); ?></li>
                <li><?php echo CHtml::link(Content::get_title(22), array('content/view', 'id' => 22), array('class' => 'boxes')); ?></li>
                <li><?php echo CHtml::link(Content::get_title(23), array('content/view', 'id' => 23), array('class' => 'boxes')); ?></li>
            </ul>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 padding-right-0">
            <?php echo CHtml::image(Yii::app()->theme->baseUrl . '/images/pricing.png', 'Pricing?', array('alt' => 'Pricing?', 'class' => 'img-responsive')); ?>
        </div>
    </div>
    <div class="row margin-top-20">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 box-border">
            <ul style="list-style: none;margin-top: 40px;">
                <li><h3>What else we specialize</h3></li>
                <li><?php echo CHtml::link(Content::get_title(24), array('content/view', 'id' => 24), array('class' => 'boxes')); ?></li>
            </ul>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 padding-right-0">
            <?php echo CHtml::image(Yii::app()->theme->baseUrl . '/images/specialize.png', 'Specialize', array('alt' => 'Specialize', 'class' => 'img-responsive')); ?>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">                
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin-top-20  padding-left-0  padding-right-0">
            <?php echo CHtml::image(Yii::app()->theme->baseUrl . '/images/blog_long.png', '', array('alt' => '', 'class' => 'img-responsive')); ?>
        </div>
    </div>            
</div> <!-- /container -->