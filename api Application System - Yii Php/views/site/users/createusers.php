<?php

/* @var $this yii\web\View */

use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;


$this->title = 'Create User';
?>
<div class="site-about">
    <h1><?= Html::encode($this->title)?></h1>

    <div class="body-content">
        <?php 
            $form = ActiveForm::begin()
        ?>

            <div class="form-group">
                <div class="col-lg-6">
                    <?= $form->field($user, 'FirstName')  ?>
                </div> 
            </div>
            <div class="form-group">
                <div class="col-lg-6">
                    <?= $form->field($user, 'LastName')  ?>
                </div> 
            </div>
            <div class="form-group">
                <div class="col-lg-6">
        <?php $items = ['Female'=>'Female', 'Male'=>'Male', 'Other'=>'Other'] ?>
                    <?= $form->field($user, 'Gender')->dropdownList($items, ['promt' => 'Select']); ?>
                </div> 
            </div>
            <div class="form-group">
                <div class="col-lg-6">
                    <?= $form->field($user, 'Email') ?>
                </div> 
            </div>
            <div class="form-group">
                <div class="col-lg-6">
                    <?= $form->field($user, 'ProfilePic') ?>
                </div> 
            </div>

            

        <!-- <div class="row"> -->
            <div class="form-group">
                <div class="col-lg-6">
                   <?= Html::submitbutton(('Create'), ['class' => 'btn btn-success']) ?>
                    <!-- <a href="http://localhost:8080/index.php?r=site%2Fusers" class="btn btn-danger">Close</a> -->
                    <a href=<?php echo yii::$app->homeurl ?> class="btn btn-danger">Close</a>

                   </div>
                </div> 
            </div>
        <!-- </div> -->

    
        <?php ActiveForm::end() ?>
    </div>
  

</div>
