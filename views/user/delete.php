<?php
use yii\helpers\Html;
?>

<div class="wrap">
  <div class="container">
    <ul class="nav nav-pills">
      <li role="presentation" class="active" ><?= Html::a('Новости', ['user/admin']) ?></li>
      <li role="presentation" class="active" ><?= Html::a('Добавление новостей', ['user/add']) ?></li>
      <li role="presentation" class="active" id="choose" ><?= Html::a('Удаление новостей', ['user/delete']) ?></li>
    </ul>
  </div>
</div>
