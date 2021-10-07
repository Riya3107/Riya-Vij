<?php

/* @var $this yii\web\View */

use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;


$this->title = 'View Project';
?>
<div class="site-about">
    <h1><?= Html::encode($this->title)?></h1>

    <div class="body-content" style="margin-top: 50px;">
    <ul class="list-group">
  <li class="list-group-item">
      <b>Project Name: </b>
      <?php echo $post->ProjectName; ?>
  </li>
  <li class="list-group-item">
      <b>Description: </b> 
  <?php echo $post->Description; ?>
  </li>
  <li class="list-group-item">
      <b>Logo: </b>
  <?php echo $post->Logo; ?>
  </li>
</ul>
<div class="row">
<a href="http://localhost:8080/index.php?r=site%2Fprojects" class="btn btn-danger" style="margin: 20px;">Close</a>

</div>
</div>
    </div>
  

</div>
