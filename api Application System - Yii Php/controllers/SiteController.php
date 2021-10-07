<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Posts;
use yii\bootstrap4\Alert;
use app\models\Modules;
use app\models\Apis;
use app\models\Users;
use app\models\UserAddress;
use app\models\ProjectSearch;

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
        return $this->render('/site/home');
    }

    public function actionHome()
    {
        return $this->render('/site/home');
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
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    // /**
    //  * Displays about page.
    //  *
    //  * @return string
    //  */
    // public function actionAbout()
    // {
    //     return $this->render('about');
    // }


    /**
     * Displays project page.
     *
     * @return string
     */
    public function actionProjects()
    {
        $posts = Posts::find()->all();
        return $this->render('projects/projects', ['posts' => $posts]);
    }


    public function actionCreate(){
        $post = new Posts();
        $formData = Yii::$app->request->post();
        if($post->load($formData)){
            if($post->save()){
                Yii::$app->getSession()->setFlash('message','Project Created Successfully!');
                return $this->redirect(['projects']);
            } 
            else{
                Yii::$app->getSession()->setFlash('messsage'. 'Failed to create the project!');
            }
        }
        return $this->render('projects/create', ['post' => $post]);
    }

    public function actionView($id){
        // echo $id;
        $post = Posts::findOne($id);
        return $this->render('projects/view', ['post' => $post]);
    }

    public function actionUpdate($id){
        // echo $id;
        $post = Posts::findOne($id);
        if($post->load(Yii::$app->request->post()) && $post->save() ){
            Yii::$app->getSession()->setFlash('message', 'Project Updated Successfully');
            return $this->redirect(['projects', 'id' => $post->id]);
        } else{
            return $this->render('projects/update', ['post' => $post]);
        }
        return $this->render('projects/update', ['post' => $post]);

    }

    public function actionDelete($id){
        $post = Posts::findOne($id)->delete();
        
        if($post){
            Yii::$app->getSession()->setFlash('message', 'Project Deleted Successfully');
            return $this->redirect(['projects']);
        }

        
    }


    /**
     * Displays Module page.
     *
     * @return string
     */

    public function actionModules()
    {
        $modules = Modules::find()->all();
        return $this->render('modules/modules', ['modules' => $modules]);
    }

    public function actionCreatemodules(){
        $module = new Modules();
        $formData = Yii::$app->request->post();
        if($module->load($formData)){
            if($module->save()){
                Yii::$app->getSession()->setFlash('message','Module Created Successfully!');
                return $this->redirect(['modules']);
            } 
            else{
                Yii::$app->getSession()->setFlash('messsage'. 'Failed to create the Module!');
            }
        }
        return $this->render('modules/createmodules', ['module' => $module]);
    }

    public function actionViewmodules($id){
        // echo $id;
        $module = Modules::findOne($id);
        return $this->render('modules/viewmodules', ['module' => $module]);
    }


    public function actionUpdatemodules($id){
        // echo $id;
        $module = Modules::findOne($id);
        if($module->load(Yii::$app->request->post()) && $module->save() ){
            Yii::$app->getSession()->setFlash('message', 'Module Updated Successfully');
            return $this->redirect(['modules', 'id' => $module->id]);
        } else{
            return $this->render('modules/updatemodules', ['module' => $module]);
        }
        return $this->render('modules/updatemodules', ['module' => $module]);

    }

    public function actionDeletemodules($id){
        
        $module = Modules::findOne($id)->delete();
        
        if($module){
            Yii::$app->getSession()->setFlash('message', 'Module Deleted Successfully');
            return $this->redirect(['modules']);
        }
        // echo $id;
    }


    /**
     * Displays API page.
     *
     * @return string
     */

    public function actionApis()
    {
        $apis = Apis::find()->all();
        return $this->render('apis/apis', ['apis' => $apis]);
        return $this->render('/site/apis/apis');
    }

    public function actionCreateapis(){
        $api = new Apis();
        $formData = Yii::$app->request->post();
        if($api->load($formData)){
            if($api->save()){
                Yii::$app->getSession()->setFlash('message','Api Created Successfully!');
                return $this->redirect(['apis']);
            } 
            else{
                Yii::$app->getSession()->setFlash('messsage'. 'Failed to create the Api!');
            }
        }
        return $this->render('apis/createApis', ['api' => $api]);
        // echo "api create!";
    }

    public function actionViewapis($id){
        // echo $id;
        $api = Apis::findOne($id);
        return $this->render('apis/viewapis', ['api' => $api]);
    }


    public function actionUpdateapis($id){
        // echo $id;
        $api = Apis::findOne($id);
        if($api->load(Yii::$app->request->post()) && $api->save() ){
            Yii::$app->getSession()->setFlash('message', 'Api Updated Successfully');
            return $this->redirect(['apis', 'id' => $api->id]);
        } else{
            return $this->render('apis/updateapis', ['api' => $api]);
        }
        return $this->render('apis/updateapis', ['api' => $api]);

    }

    public function actionDeleteapis($id){
        
        $api = Apis::findOne($id)->delete();
        
        if($api){
            Yii::$app->getSession()->setFlash('message', 'Api Deleted Successfully');
            return $this->redirect(['apis']);
        }
        // echo $id;
    }



    /**
     * Displays Users page.
     *
     * @return string
     */

    public function actionUsers()
    {
        $users = Users::find()->all();
        return $this->render('users/users', ['users' => $users]);
    }

    public function actionCreateusers(){
        $user = new Users();
        $formData = Yii::$app->request->post();
        if($user->load($formData)){
            if($user->save()){
                Yii::$app->getSession()->setFlash('message','User Created Successfully!');
                return $this->redirect(['users']);
            } 
            else{
                Yii::$app->getSession()->setFlash('messsage'. 'Failed to create the User!');
            }
        }
        return $this->render('users/createUsers', ['user' => $user]);
        // echo "api create!";
    }

    public function actionViewusers($id){
        // echo $id;
        $user = Users::findOne($id);
        return $this->render('users/viewusers', ['user' => $user]);
    }

    public function actionUpdateusers($id){
        // echo $id;
        $user = Users::findOne($id);
        if($user->load(Yii::$app->request->post()) && $user->save() ){
            Yii::$app->getSession()->setFlash('message', 'User Updated Successfully');
            return $this->redirect(['users', 'id' => $user->id]);
        } else{
            return $this->render('users/updateusers', ['user' => $user]);
        }
        return $this->render('users/updateapis', ['user' => $user]);

    }

    public function actionDeleteusers($id){
        
        $user = Users::findOne($id)->delete();
        
        if($user){
            Yii::$app->getSession()->setFlash('message', 'User Deleted Successfully');
            return $this->redirect(['users']);
        }
        // echo $id;
    }


    /**
     * Displays Users Address page.
     *
     * @return string
     */

    public function actionUserAddress()
    {
        echo 'useraddress';
    }


}
