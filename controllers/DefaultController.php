<?php

namespace app\vendor\modules\hello\controllers;

use yii\web\Controller;

/**
 * Default controller for the `Module` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render( '/default/index');
    }
    public function actionHellome(){
        return $this->render('/default/index');
    }
}
