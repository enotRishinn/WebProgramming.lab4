<?php

namespace app\models;

use yii\db\ActiveRecord;

class AddForm extends ActiveRecord {

  public static function tableName() {
    return 'post';
  }

  public function attributeLabels() {
    return [
      'title' => 'Заголовок новости',
      'text' => 'Текст новости',
    ];
  }

  public function rules() {
    return [
      [['title', 'text'], 'required', 'message' => 'Поле обязательно для заполнения' ],
    ];
  }
}
