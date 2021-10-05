<?php

/* @var $this yii\web\View */

use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;


$this->title = 'Create Project';
?>
<div class="site-about">
    <h1><?= Html::encode($this->title)?></h1>

    <div class="body-content">
        <?php 
            $form = ActiveForm::begin()
        ?>

            <div class="form-group">
                <div class="col-lg-6">
                    <?= $form->field($post, 'ProjectName')  ?>
                </div> 
            </div>
            <div class="form-group">
                <div class="col-lg-6">
                    <?= $form->field($post, 'Description') ?>
                </div> 
            </div>

            <div class="form-group">
                <div class="col-lg-6">
                    <?= $form->field($post, 'Logo')  ?>
                </div> 
            </div>

        <!-- <div class="row"> -->
            <div class="form-group">
                <div class="col-lg-6">
                   <?= Html::submitbutton(('Create'), ['class' => 'btn btn-success']) ?>
                    <!-- <a href="http://localhost:8080/index.php?r=site%2Fprojects" class="btn btn-danger">Close</a> -->
                    <a href=<?php echo yii::$app->homeurl ?> class="btn btn-danger">Close</a>

                   </div>
                </div> 
            </div>
        <!-- </div> -->

    
        <?php ActiveForm::end() ?>
    </div>
  

</div>
