<?php

namespace app\models;

use yii\base\Model;

class AddForm extends Model {
  public $title;
  public $text;

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
