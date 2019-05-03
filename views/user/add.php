<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<div class="wrap">
  <div class="container">
    <ul class="nav nav-pills">
      <li role="presentation" class="active" ><?= Html::a('Новости', ['user/admin']) ?></li>
      <li role="presentation" class="active" id="choose" ><?= Html::a('Добавление новостей', ['user/add']) ?></li>
      <li role="presentation" class="active" ><?= Html::a('Удаление новостей', ['user/delete']) ?></li>
    </ul>
  </div>
</div>

<?php $form = ActiveForm::begin() ?>
<?= $form->field($model, 'title') ?>
<?= $form->field($model, 'text')->textarea(['rows' => 7]) ?>
<?= Html::submitButton('Добавить', ['class' => 'btn btn-primary']) ?>
<?php ActiveForm::end() ?>
