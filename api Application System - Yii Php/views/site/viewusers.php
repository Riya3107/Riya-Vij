<?php

/* @var $this yii\web\View */

use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;


$this->title = 'View User';
?>
<div class="site-about">
    <h1><?= Html::encode($this->title)?></h1>

    <div class="body-content" style="margin-top: 50px;">
    <ul class="list-group">
  <li class="list-group-item">
      <b>First Name: </b>
      <?php echo $user->FirstName; ?>
  </li>
  <li class="list-group-item">
      <b>Last Name: </b> 
  <?php echo $user->LastName; ?>
  </li>
  <li class="list-group-item">
      <b>Gender: </b>
  <?php echo $user->Gender; ?>
  </li>
  <li class="list-group-item">
      <b>Email id: </b>
  <?php echo $user->Email; ?>
  </li>
  <li class="list-group-item">
      <b>Profile Pic: </b>
  <?php echo $user->ProfilePic; ?>
  </li>
</ul>
<div class="row">
<a href="http://localhost:8080/index.php?r=site%2Fusers" class="btn btn-primary" style="margin: 20px;">Close</a>

</div>
</div>
    </div>
  

</div>
