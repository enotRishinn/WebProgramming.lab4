<?php

use yii\helpers\Html;
use yii\grid\GridView; ?>

<div class="wrap" ><br><br>
    <ul class="nav nav-pills">
      <li role="presentation" class="active" ><?= Html::a('Новости', ['user/admin']) ?></li>
      <li role="presentation" class="active" id="choose" ><?= Html::a('Добавление новостей', ['user/add']) ?></li>
      <li role="presentation" class="active" ><?= Html::a('Редактирование и удаление новостей', ['post/index']) ?></li>
    </ul>
</div><br><br>

<div class="post-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title:ntext',
            'text:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
