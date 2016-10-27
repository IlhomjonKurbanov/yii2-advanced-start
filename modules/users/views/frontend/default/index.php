<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use modules\users\Module;
use yii\bootstrap\Tabs;

$this->title = Module::t('frontend', 'TITLE_MY_PROFILE');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-default-index">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="nav-tabs-custom">
        <?= Tabs::widget([
            'items' => [
                [
                    'label' => Html::encode($this->title),
                    'content' => $this->render('index/_profile', [
                        'model' => $model,
                    ]),
                    'active' => (Yii::$app->request->get('tab') == 'profile') ? true : false,
                ],
            ]
        ]); ?>
    </div>
</div>