<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\AddForm;
use app\models\Category;
use Yii;

class UserController extends Controller {

  public function actionIndex() {
    $cats = Category::find()->all();

    return $this->render('index', compact('cats'));
  }

  public function actionAdmin() {
    $cats = Category::find()->all();

    return $this->render('admin', compact('cats'));
  }

  public function actionAdd() {

    $model = new AddForm();
    if ($model->load(Yii::$app->request->post())) {
      if ($model->validate()) {
        Yii::$app->session->setFlash('success', 'Новость добавлена');
        return $this->refresh();
      } else {
        Yii::$app->session->setFlash('error', 'Ошибка добавления');
      }
    }
    return $this->render('add', compact('model'));
  }

  public function actionDelete() {
    return $this->render('delete');
  }
}
