<?php
use yii\helpers\Html;
?>

<div class="wrap" ><br><br>
    <ul class="nav nav-pills">
      <li role="presentation" class="active" ><?= Html::a('Новости', ['user/admin']) ?></li>
      <li role="presentation" class="active" id="choose" ><?= Html::a('Добавление новостей', ['user/add']) ?></li>
      <li role="presentation" class="active" ><?= Html::a('Редактирование и удаление новостей', ['post/index']) ?></li>
    </ul>
</div><br><br>

<?php foreach ($cats as $cat) {
  echo '<h1>'.$cat->title.'<br></h1>';
  echo '<h3>'.$cat->text.'<br></h3><br><br>';
} ?>
