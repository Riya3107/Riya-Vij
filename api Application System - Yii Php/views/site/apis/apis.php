<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Apis';
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
      <span style="margin:30px;"><?= Html::a('Create Api', ['/site/createapis'] ,['class' => 'btn btn-info']) ?></span>
      <div class="float-right form-inline" style="margin-left: 600px;">
            <input class="form-control mr-sm-2 " type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Search</button>
      </div>
    </div>
  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">API Title</th>
      <th scope="col">URL</th>
      <th scope="col">Description</th>
      <th scope="col">Method</th>
      <th scope="col">Request</th>
      <th scope="col">Response</th>
      <th scope="col">Project</th>
      <th scope="col">Module</th>
      <th scope="col">Action</th>


    </tr>
  </thead>
  <tbody>
    <?php if(count($apis) > 0): ?>
      <?php foreach($apis as $api): ?>
    <tr>
      <td><?php echo $api->ApiName; ?></td>
      <td><?php echo $api->Url; ?></td>
      <td><?php echo $api->Description; ?></td>
      <td><?php echo $api->Method; ?></td>
      <td><?php echo $api->Request; ?></td>
      <td><?php echo $api->Response; ?></td>
      <td><?php echo $api->ProjectName; ?></td>
      <td><?php echo $api->ModuleName; ?></td>

      <td>
        <span><?= Html::a(('View'), ['viewapis','id' => $api->id] ,['class' => 'btn btn-primary']) ?></span>
        <span><?= Html::a(('Update'), ['updateapis','id' => $api->id] ,['class' => 'btn btn-success']) ?></span>
        <span><?= Html::a(('Delete'), ['deleteapis','id' => $api->id] ,['class' => 'btn btn-danger'])?></span>
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
