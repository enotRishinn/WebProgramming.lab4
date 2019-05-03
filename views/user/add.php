<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<div class="wrap" ><br><br>
    <ul class="nav nav-pills">
      <li role="presentation" class="active" ><?= Html::a('Новости', ['user/admin']) ?></li>
      <li role="presentation" class="active" id="choose" ><?= Html::a('Добавление новостей', ['user/add']) ?></li>
      <li role="presentation" class="active" ><?= Html::a('Редактирование и удаление новостей', ['post/index']) ?></li>
    </ul>
</div><br><br>

<?php if (Yii::$app->session->hasFlash('success')): ?>
  <div class="alert alert-success alert-dismissible fade show" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  <?php echo Yii::$app->session->getFlash('success'); ?>
</div>
<?php endif; ?>

<?php if (Yii::$app->session->hasFlash('error')): ?>
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  <?php echo Yii::$app->session->getFlash('error'); ?>
</div>
<?php endif; ?>

<?php $form = ActiveForm::begin() ?>
<?= $form->field($model, 'title') ?>
<?= $form->field($model, 'text')->textarea(['rows' => 7]) ?>
<?= Html::submitButton('Добавить', ['class' => 'btn btn-primary']) ?>
<?php ActiveForm::end() ?>
