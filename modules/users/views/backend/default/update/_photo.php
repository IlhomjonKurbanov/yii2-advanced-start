<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use modules\users\Module;

/* @var $this yii\web\View */
/* @var $model modules\users\models\backend\User */
/* @var $uploadModel modules\users\models\UploadForm */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="users-backend-default-update">
    <?php $form = ActiveForm::begin([
        'layout' => 'horizontal',
        'fieldConfig' => [
            'horizontalCssClasses' => [
                'label' => 'col-sm-2',
                'offset' => 'col-sm-offset-2',
                'wrapper' => 'col-sm-10',
            ],
        ],
    ]); ?>
    <?php if ($model->avatar) : ?>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <?= Html::img($model->getAvatarPath(), [
                    'class' => 'profile-user-img img-responsive img-circle',
                    'style' => 'margin:0; width:auto',
                ]); ?>
            </div>
        </div>
        <?= $form->field($model, 'isDel')->checkbox(); ?>
    <?php else : ?>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <i class="fa fa-user-circle fa-5x" style="color:#b9b9b9"></i>
            </div>
        </div>
    <?php endif; ?>

    <?= $form->field($model, 'imageFile')->fileInput(); ?>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <?= Html::submitButton($model->isNewRecord ? '<span class="fa fa-plus"></span> ' . Module::t('backend', 'BUTTON_CREATE') : '<span class="fa fa-floppy-o"></span> ' . Module::t('backend', 'BUTTON_SAVE'), [
                'class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary',
                'name' => 'submit-button',
            ]) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>
</div>