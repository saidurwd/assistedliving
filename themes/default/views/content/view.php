<?php
/* @var $this ContentController */
/* @var $model Content */
$this->pageTitle = $model->title;
?>
<h1><?php echo $model->title; ?></h1>
<?php //Content::get_image_view($model->id); ?>
<p><?php echo $model->introtext; ?></p>