<?php

/* @var $this yii\web\View */

use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;


$this->title = 'Create Api';
?>
<div class="site-about">
    <h1><?= Html::encode($this->title)?></h1>

    <div class="body-content">
        <?php 
            $form = ActiveForm::begin()
        ?>

            <div class="form-group">
                <div class="col-lg-6">
                    <?= $form->field($api, 'ApiName')  ?>
                </div> 
            </div>
            <div class="form-group">
                <div class="col-lg-6">
                    <?= $form->field($api, 'Url')  ?>
                </div> 
            </div>
            <div class="form-group">
                <div class="col-lg-6">
                    <?= $form->field($api, 'Description') ?>
                </div> 
            </div>
            <div class="form-group">
                <div class="col-lg-6">
        <?php $items = ['POST'=>'POST', 'GET'=>'GET', 'UPDATE'=>'UPDATE', 'DELETE'=>'DELETE', 'PATCH'=>'PATCH'] ?>
                    <?= $form->field($api, 'Method')->dropdownList($items, ['promt' => 'Select']); ?>
                </div> 
            </div>
            <div class="form-group">
                <div class="col-lg-6">
                    <?= $form->field($api, 'Request') ?>
                </div> 
            </div>
            <div class="form-group">
                <div class="col-lg-6">
                    <?= $form->field($api, 'Response') ?>
                </div> 
            </div>
            <div class="form-group">
                <div class="col-lg-6">
                    <?= $form->field($api, 'ProjectName') ?>
                </div> 
            </div>
            <div class="form-group">
                <div class="col-lg-6">
                    <?= $form->field($api, 'ModuleName') ?>
                </div> 
            </div>

            

        <!-- <div class="row"> -->
            <div class="form-group">
                <div class="col-lg-6">
                   <?= Html::submitbutton(('Create'), ['class' => 'btn btn-success']) ?>
                    <!-- <a href="http://localhost:8080/index.php?r=site%2Fapis" class="btn btn-danger">Close</a> -->
                    <a href=<?php echo yii::$app->homeurl ?> class="btn btn-danger">Close</a>

                   </div>
                </div> 
            </div>
        <!-- </div> -->

    
        <?php ActiveForm::end() ?>
    </div>
  

</div>
