<?php

namespace app\controllers;

use app\models\Basket;
use app\models\BasketForm;
use app\models\Category;
use app\models\Guest;
use app\models\Product;
use app\models\Session;
use http\Env\Url;
use Yii;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $model = Product::find()
            ->where(['status'=>1])
            ->all();
        return $this->render('index',[
            'product'=>$model
        ]);
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new Guest();

        return $this->render('contact',[
            'model'=>$model
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
    /**
     * @retrun bool
     */
    public function actionCategory()
    {
        return $this->render('category', []);
    }

    public function actionServices()
    {
        return $this->render('services');
    }

    public function actionSingle()
    {
        return $this->render('single');
    }

    public function actionProducts($id)
    {
        $query= Product::find()->where(['category_id'=>$id]);
        $dataProvider = new ActiveDataProvider([
            'query'=> $query,
            'pagination' => [
                'pageSize' => 6,
            ],

        ]);
        return $this->render('products',[
            'dataProvider'=>$dataProvider,
        ]);
    }
    public function actionLike($search)
    {
        $query= Product::find()->where(['p_name_en'=>$search]);
        $dataProvider = new ActiveDataProvider([
            'query'=> $query,
            'pagination' => [
                'pageSize' => 6,
            ],

        ]);
        return $this->render('products',[
            'dataProvider'=>$dataProvider,
        ]);

    }

    public function actionPurchase($id,$category)
    {
        $model = new Basket();
        //mahsulot bor yoqligini aniqlash
        $count = Basket::find()->where(['user_ip'=>Yii::$app->request->getUserIP(),'product_id'=>$id,'status'=>1])->count();
        //mahsulot topilmasa savatga qoshish sharti
        if($count == 0)
        {
            $model->product_id = $id;
            $model->user_ip = Yii::$app->request->getUserIP();
            $model->save();

            if ($model->validate() && $model->save()){
                echo \Yii::$app->session->addFlash("success", Yii::t('app',"Product added to baset"));
            }
            else{
                echo \Yii::$app->session->addFlash("danger",Yii::t('app',"Unfortunately product  doesn't add to baset"));
            }
        }
        else{
            echo \Yii::$app->session->addFlash("info",Yii::t('app',"Product exist on baset"));
        }

        //qayta ayni shu oynaga qaytaradi
        $query= Product::find()->where(['category_id'=>$category]);
        $dataProvider = new ActiveDataProvider([
            'query'=> $query,
            'pagination' => [
                'pageSize' => 6,
            ],

        ]);
        return $this->render('products',[
            'dataProvider'=>$dataProvider,
        ]);

    }

    public function actionSearch($search)
    {
        $query= Product::find()->where(['like','p_name_en',$search]);
        $query2= Product::find()->where(['status'=>1]);
        $count= $query->count();
       // $products= Product::find()->where(['status'=>1]);
        $dataProvider1 = new ActiveDataProvider([
            'query'=> $query,
            'pagination' => [
                'pageSize' => 6,
            ],

        ]);
        $dataProvider2 = new ActiveDataProvider([
            'query'=> $query2,
            'pagination' => [
                'pageSize' => 6,
            ],

        ]);

        return $this->render('products',[
            'dataProvider1'=>$dataProvider1,
            'dataProvider2'=>$dataProvider2,
            'word'=>$search,
            'count'=>$count,

        ]);
    }


}
