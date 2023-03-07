<?php

namespace app\vendor\modules\hello;

use yii\base\BootstrapInterface;

/**
 * Module module definition class
 */
class Module extends \yii\base\Module implements BootstrapInterface
{
    /**
     * {@inheritdoc}
     */
     public $controllerNamespace = 'app\vendor\modules\hello\controllers';

    /**
     * {@inheritdoc}
     */

    public function bootstrap($app)
    {
        $app->getUrlManager()->addRules([
            ['class' => 'yii\web\UrlRule', 'pattern' => $this->id, 'route' => $this->id . '/hello'],
        ], false);
    }

    public function init()
    {
        parent::init();
        // custom initialization code goes here


        $this->controllerMap = [
            'smth' => 'app\vendor\modules\hello\controllers\DefaultController',
        ];
    }
}
