<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'User Address';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
  <?php  if(yii::$app->session->hasFlash('message')): ?>
    <div class="alert alert-dismissible alert-success">
      <?php echo yii::$app->session->getFlash('message');?>
    </div>
    <?php endif ?> 
    <h1><?= Html::encode($this->title)?></h1>
    

    <div class="row">
      <span style="margin:30px;"><?= Html::a('Create User Address', ['/site/create'] ,['class' => 'btn btn-info']) ?></span>

    </div>
  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Address1</th>
      <th scope="col">Address2</th>
      <th scope="col">City</th>
      <th scope="col">State</th>
      <th scope="col">Zip</th>
      <th scope="col">Country</th>


    </tr>
  </thead>
  <tbody>
    <?php if(count($useraddress) > 0): ?>
      <?php foreach($useraddress as $useraddres): ?>
    <tr>
      <td><?php echo $useraddres->Address1; ?></td>
      <td><?php echo $useraddres->Address2; ?></td>
      <td><?php echo $useraddres->City; ?></td>
      <td><?php echo $useraddres->State; ?></td>
      <td><?php echo $useraddres->Zip; ?></td>
      <td><?php echo $useraddres->Country; ?></td>

      <td>
        <span><?= Html::a(('View'), ['view','id' => $useraddress->id] ,['class' => 'btn btn-primary']) ?></span>
        <span><?= Html::a(('Update'), ['update','id' => $useraddres->id] ,['class' => 'btn btn-success']) ?></span>
        <span><?= Html::a(('Delete'), ['delete','id' => $useraddres->id] ,['class' => 'btn btn-danger'])?></span>
      </td>
    </tr>
    <?php endforeach; ?>

    <?php else: ?>
      <tr>
        <td>
          NO RECORDS FOUND!
        </td>
      </tr>

    <?php endif ?>
      
  </tbody>
</table>

</div>