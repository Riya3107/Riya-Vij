<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\bootstrap4\Alert;
use yii\widgets\ActiveForm;
use yii\grid\GridView;

$this->title = 'Projects';
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
      <span style="margin:30px;"><?= Html::a('Create Project', ['site/create'] ,['class' => 'btn btn-info']) ?></span>
      <div class="float-right form-inline" style="margin-left: 600px;">
            <input class="form-control mr-sm-2 " type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-warning my-2 my-sm-0" type="submit" >Search</button>
            

        </div>
      
    </div>

    
  <table class="table table-striped">
      
  <thead>
    <tr>
      <!-- <th scope="col">Id</th> -->
      <th scope="col">Project Name</th>
      <th scope="col">Description</th>
      <th scope="col">Logo</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  
        

  <tbody>
    <?php if(count($posts) > 0): ?>
      <?php foreach($posts as $post): ?>
    <tr>
      <!-- <td scope="row"><?php echo $post->id; ?></td> -->
      <!-- <th scope="row">Project1</th> -->
      <td><?php echo $post->ProjectName; ?></td>
      <td><?php echo $post->Description; ?></td>
      <td><?php echo $post->Logo; ?></td>

      <td>
        <span><?= Html::a(('View'), ['view','id' => $post->id] ,['class' => 'btn btn-primary']) ?></span>
        <span><?= Html::a(('Update'), ['update','id' => $post->id] ,['class' => 'btn btn-success']) ?></span>
        <span><?= Html::a(('Delete'), ['delete','id' => $post->id] ,['class' => 'btn btn-danger'])?></span>
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
