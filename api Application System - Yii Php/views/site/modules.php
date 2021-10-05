<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Modules';
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
      <span style="margin:30px;"><?= Html::a('Create Module', ['/site/createmodules'] ,['class' => 'btn btn-info']) ?></span>
      <div class="float-right form-inline" style="margin-left: 600px;">
            <input class="form-control mr-sm-2 " type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Search</button>
      </div>
    </div>
  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Project Name</th>
      <th scope="col">Module Name</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>

    </tr>
    
  </thead>
  <tbody>
    <?php if(count($modules) > 0): ?>
      <?php foreach($modules as $module): ?>
    <tr>
      <td><?php echo $module->ProjectName; ?></td>
      <td><?php echo $module->ModuleName; ?></td>
      <td><?php echo $module->Description; ?></td>

      <td>
        <span><?= Html::a(('View'), ['viewmodules','id' => $module->id] ,['class' => 'btn btn-primary']) ?></span>
        <span><?= Html::a(('Update'), ['updatemodules','id' => $module->id] ,['class' => 'btn btn-success']) ?></span>
        <span><?= Html::a(('Delete'), ['deletemodules','id' => $module->id] ,['class' => 'btn btn-danger'])?></span>
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

