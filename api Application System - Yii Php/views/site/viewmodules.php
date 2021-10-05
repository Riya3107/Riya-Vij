<?php

/* @var $this yii\web\View */

use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;


$this->title = 'View Module';
?>
<div class="site-about">
    <h1><?= Html::encode($this->title)?></h1>

    <div class="body-content" style="margin-top: 50px;">
    <ul class="list-group">
  <li class="list-group-item">
      <b>Project Name: </b>
      <?php echo $module->ProjectName; ?>
  </li>
  <li class="list-group-item">
      <b>Module Name: </b> 
  <?php echo $module->ModuleName; ?>
  </li>
  <li class="list-group-item">
      <b>Description: </b>
  <?php echo $module->Description; ?>
  </li>
</ul>
<div class="row">
<a href="http://localhost:8080/index.php?r=site%2Fmodules" class="btn btn-primary" style="margin: 20px;"">Close</a>

</div>
</div>
    </div>
  

</div>
