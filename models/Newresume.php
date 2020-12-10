<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;


class Newresume extends ActiveRecord
{

  /**
    * This is the model class for table "resume".
    * @property int $id
    * @property string|null $family
    * @property string|null $name
    * @property string|null $middle_name;
    * @property date|null $date_birth;
    * @property date_default_timezone_get|null $create_date;
    * @property string|null $sex;
    * @property string|null $city;
    * @property string|null $email;
    * @property string|null $telephone;
    * @property string|null $specialization;
    * @property int|null $money_from;
    * @property int|null $money_to;
    * @property string|null $employment;
    * @property string|null $shedule;
    * @property date|null $begging_work;
    * @property date|null $end_work;
    * @property string|null $organization;
    * @property string|null $position;
    * @property string|null $responsibilites;
    * @property string|null $about_you
    * @property string|null $link;
    */


  public function rules() {
    return [
      [['family' , 'name', 'middle_name', 'sex' , 'city', 'email' , 'telephone', 'specialization', 'employment', 'shedule', 'organization',
      'position', 'responsibilites','about_you' , 'link'], 'string' , 'max' => 250],
      ['email', 'email'],
    ];
  }

  public static function tableName() {
    return '{{resume}}';
  }

  public function formName() {
    return 'newresume';
  }


}
?>
