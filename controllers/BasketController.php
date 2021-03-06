<?php

namespace app\controllers;

use app\models\Product;
use Yii;
use app\models\Basket;
use app\models\BasketSearch;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BasketController implements the CRUD actions for Basket model.
 */
class BasketController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Basket models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new BasketSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Basket model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Basket model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Basket();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Basket model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Basket model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['basket/mybasket/','user_ip'=>Yii::$app->request->getUserIP()]);
    }

    /**
     * Finds the Basket model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Basket the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Basket::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
    public function basket($user_ip)
    {
        $model  =  new Product();
        $query= Basket::find()->where(['user_ip'=>$user_ip,'status'=>1]);
        $dataProvider = new ActiveDataProvider([
            'query'=> $query,
            'pagination' => [
                'pageSize' => 6,
            ],

        ]);
        return $this->render('mybasket',[
            'dataProvider'=>$dataProvider,
            'model'=>$model
        ]);

    }
    public function actionMybasket($user_ip)
    {
      return $this->basket($user_ip);
    }


    public  function  actionPlus($product_id)
    {
        $product = Basket::findOne(['user_ip'=>Yii::$app->request->getUserIP(),'status'=>1,'product_id'=>$product_id
        ]);
        $product->b_count++;
        if($product->b_count > Product::findOne(['id'=>$product_id])->p_count)
        {
            echo Yii::$app->session->addFlash('info','Product limited');
            $product->b_count = Product::findOne(['id'=>$product_id])->p_count;
        }
        $product->save();

       return $this->basket(Yii::$app->request->getUserIP());
    }
    public  function  actionMinus( $product_id)
    {
        $product = Basket::findOne(['user_ip'=>Yii::$app->request->getUserIP(),'status'=>1,'product_id'=>$product_id]);
        $product->b_count--;
        if($product->b_count<1)
        {
            echo Yii::$app->session->addFlash('danger','The number of product can`t be zero');
            $product->b_count = 1;
        }

        $product->save();

        return $this->basket(Yii::$app->request->getUserIP());
    }

}
