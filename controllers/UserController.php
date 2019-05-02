<?php

namespace app\controllers;

use yii\web\Controller;

class UserController extends Controller {

  public function actionIndex() {
    return $this->render('index');
  }

  public function actionAdmin() {
    return $this->render('admin');
  }

  public function actionAdd() {
    return $this->render('add');
  }

  public function actionDelete() {
    return $this->render('delete');
  }
}
