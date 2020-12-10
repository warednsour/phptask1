<?php


namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;


class MyresumeController extends Controller {


  public function actionIndex()
  {
    return $this->render('myresume.php');
  }


  public function actionEditregresume()
  {
    return $this->render('editregresume.php');
  }


  public function actionViewresume()
  {
    return $this->render('viewresume.php');
  }
}











 ?>
