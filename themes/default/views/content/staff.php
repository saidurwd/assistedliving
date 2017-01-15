<?php

/* @var $this ContentController */
/* @var $model Content */
$this->pageTitle = 'Staffs';
?>
<?php

$arrayCategory = BannerCategory::model()->findAll(array('condition' => 'parent_id=4 AND published=1', 'order' => 'id'));
foreach ($arrayCategory as $key => $value) {
    echo '<h2 class="text-center">' . $value->title . '</h2>';
    echo '<p class="text-left">' . $value->description . '</p>';
    $array = Banner::model()->findAll(array('condition' => 'catid=' . $value->id . ' AND published=1', 'order' => 'ordering'));
    echo '<div class="row">';
    foreach ($array as $key => $values) {
        echo '<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">';
        echo CHtml::image(Yii::app()->baseUrl . '/uploads/banners/' . $values->banner, $values->name, array('alt' => $values->name, 'class' => 'img-responsive'));
        echo '</div>';
    }
    echo '</div>';
}
?>