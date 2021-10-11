<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Api;
use app\models\ApiSearch;
use app\models\Module;
use app\APIManager\APIInterface;


class ApiController extends Controller
{    
    protected $finder;
    public function __construct($id, $module, APIInterface $finder, $config = [])
    {
        $this->finder = $finder;
        parent::__construct($id, $module, $config);
    }

    // Api Index
    public function actionIndex()
    {
        $searchModel = new ApiSearch();
        $dataProvider = $searchModel->search($this->request->post());
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    // Api View
    public function actionView($id)
    {
        $model = $this->finder->view($id);
        if(!empty($model)){
            return $this->render('view', [
                'model' => $model,
            ]);
        }
    }

    // Api Create
    public function actionCreate()
    {
        $model = $this->finder->create();
        if(isset($model->id))
        {
            return $this->redirect(['view', 'id' => $model->id]);
        }
        return $this->render('create', [
            'model' => $model,
        ]);
    }

    // Api Update
    public function actionUpdate($id)
    {
        $model = $this->finder->update($id);
        if(isset($model->id))
        {
            return $this->render('update', [
            'model' => $model,
            ]);
        }
    }

    // Api Delete
    public function actionDelete($id)
    {
        $model = $this->finder->delete($id);
        if($model == 1)
        {
            return $this->redirect(['index']);
        }
        return $this->redirect(['index']);
    }


    // Api List
    public function actionList($id)
    {               
        $modules = Module::find()
                ->where(['project_id' => $id])
                ->orderBy('id DESC')
                ->all();
                
        if (!empty($modules)) {
            foreach($modules as $module) {
                echo "<option value='".$module->id."'>".$module->title."</option>";
            }
        } else {
            echo "<option>-</option>";
        }
        
    }
}

Yii::$container->set('app\APIManager\APIInterface', 'app\APIManager\APIManager');