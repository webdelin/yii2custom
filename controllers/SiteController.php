<?php

namespace app\controllers;
use yii\web\Controller;

/**
 * Description of SiteController
 *
 * @author wendelin
 */
class SiteController extends Controller{
    
    public function actionIndex() {
        
        return $this->render('index');
        
    }

}
