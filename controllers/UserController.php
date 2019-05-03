<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\AddForm;

class UserController extends Controller {

  public function actionIndex() {
    return $this->render('index');
  }

  public function actionAdmin() {
    return $this->render('admin');
  }

  public function actionAdd() {

    $model = new AddForm();
    return $this->render('add', compact('model'));
  }

  public function actionDelete() {
    return $this->render('delete');
  }
}
