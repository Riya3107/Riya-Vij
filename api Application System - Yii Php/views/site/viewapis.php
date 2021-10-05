<?php

/* @var $this yii\web\View */

use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;


$this->title = 'View Api';
?>
<div class="site-about">
    <h1><?= Html::encode($this->title)?></h1>

    <div class="body-content" style="margin-top: 50px;">
    <ul class="list-group">
  <li class="list-group-item">
      <b>Api Name: </b>
      <?php echo $api->ApiName; ?>
  </li>
  <li class="list-group-item">
      <b>Url: </b> 
  <?php echo $api->Url; ?>
  </li>
  <li class="list-group-item">
      <b>Description: </b>
  <?php echo $api->Description; ?>
  </li>
  <li class="list-group-item">
      <b>Method: </b>
  <?php echo $api->Method; ?>
  </li>
  <li class="list-group-item">
      <b>Request: </b>
  <?php echo $api->Request; ?>
  </li>
  <li class="list-group-item">
      <b>Response: </b>
  <?php echo $api->Response; ?>
  </li>
  <li class="list-group-item">
      <b>Project Name: </b>
  <?php echo $api->ProjectName; ?>
  </li>
  <li class="list-group-item">
      <b>Module Name: </b>
  <?php echo $api->ModuleName; ?>
  </li>
</ul>
<div class="row">
<a href="http://localhost:8080/index.php?r=site%2Fapis" class="btn btn-primary" style="margin: 20px;">Close</a>

</div>
</div>
    </div>
  

</div>
