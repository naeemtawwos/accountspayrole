<?php
namespace app\controllers\offline;

use Yii;
use yii\web\Controller;

/**
 * CountryController implements the CRUD actions for Country model.
 */
class NoticeController extends Controller{

	function actionIndex(){
		return $this -> render("notice");
		//return $message;
		
	}
}