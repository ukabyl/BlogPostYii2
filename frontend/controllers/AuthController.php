<?php 

namespace frontend\controllers;

use yii;
use yii\web\Controller;
use frontend\models\User;
use common\models\LoginForm;
use frontend\models\SignupForm;

class AuthController extends Controller
{


	public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            $model->password = '';

            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionTest()
    {
    	$user = User::findOne(1);
			Yii::$app->user->logout();


    	var_dump(Yii::$app->user->isGuest);die;
    }
    

    public function actionSignup()
    {
        $model = new SignupForm();  
        if ($model->load(Yii::$app->request->post()) && $model->signup()) {
            Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
            return $this->goHome();
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

}