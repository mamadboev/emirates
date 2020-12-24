<?php


namespace app\widgets\team;


use yii\base\Widget;
use app\models\Tuser;

class TeamPeople extends Widget
{
    public function run()
    {
        $model = Tuser::find()
            ->where(['status'=>1])
            ->all();
        return $this->render('team',['model'=>$model]);
    }
}