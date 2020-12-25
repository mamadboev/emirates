<?php


namespace app\widgets\newsletter;


use app\models\Subscribers;
use Yii;
use yii\base\Widget;

class Newsletters extends Widget
{
    public function run()
    {
        $model = new Subscribers();

        return $this->render('subscriber',[
            'model'=>$model
        ]);
    }

}