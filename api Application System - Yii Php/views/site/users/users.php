<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Users';
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
      <span style="margin:30px;"><?= Html::a('Create User', ['/site/createusers'] ,['class' => 'btn btn-info']) ?></span>
      <div class="float-right form-inline" style="margin-left: 600px;">
            <input class="form-control mr-sm-2 " type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Search</button>
      </div>
    </div>
  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Gender</th>
      <th scope="col">Email</th>
      <th scope="col">Profile Pic</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    <?php if(count($users) > 0): ?>
      <?php foreach($users as $user): ?>
    <tr>
      <td><?php echo $user->FirstName; ?></td>
      <td><?php echo $user->LastName; ?></td>
      <td><?php echo $user->Gender; ?></td>
      <td><?php echo $user->Email; ?></td>
      <td><?php echo $user->ProfilePic; ?></td>

      <td>
        <span><?= Html::a(('View'), ['viewusers','id' => $user->id] ,['class' => 'btn btn-primary']) ?></span>
        <span><?= Html::a(('Update'), ['updateusers','id' => $user->id] ,['class' => 'btn btn-success']) ?></span>
        <span><?= Html::a(('Delete'), ['deleteusers','id' => $user->id] ,['class' => 'btn btn-danger'])?></span>
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
