<?php


namespace app\widgets\category;

use app\models\Category;
use yii\base\Widget;

class Categories extends Widget
{
    public function run()
    {
        $model = Category::find()
            ->where(['status'=>1])
            ->all();
        return $this->render('category_products',['model'=>$model]);

    }
}