<?php


namespace app\widgets\team;


use yii\base\Widget;
use app\models\TeamUser;

class TeamPeople extends Widget
{
    public function run()
    {
        $model = TeamUser::find()
            ->where(['status'=>1])
            ->all();
        return $this->render('team',['model'=>$model]);
    }
}