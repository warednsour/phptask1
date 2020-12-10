<?php


namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\Newresume;

class MyresumeController extends Controller {


  public function actionIndex()
  {
    return $this->render('myresume.php');
  }


  public function actionNewresume()
  {
    if(Yii::$app->request->post()){
      echo "it's";
    } else{
      echo "it's not";
    }
    $model = new Newresume();

    return $this->render('newresume.php' , ['model' => $model]);
  }


  public function actionViewresume()
  {
    return $this->render('viewresume.php');
  }

  public function actionEditresume()
  {
    return $this->render('editresume.php');
  }
}











 ?>
