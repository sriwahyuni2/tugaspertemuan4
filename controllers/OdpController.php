<?php

namespace app\controllers;

use app\models\Odp;
use yii\data\ActiveDataProvider;

class OdpController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Odp::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);
        return $this->render('index' , [
            'dataProvider' => $dataProvider]);
    }

    public function actionTambah()
    {
        $Odp = new Suplier;
        $Odp->code_Odp = '15';
        $Odp->nama_Odp = 'uni';
        $Odp->titik_x = 'y';
        $Odp->titik_y= 'x';
        $Odp->max_user= '30';
        if ($Odp->save()) {
            return $this->redirect(['index']);
        }
        else {
            var_dump($Odp->getErrors());
            die();
        }

    }

    public function actionUpdate($id)
    {
        $Odp = Odp::findOne($id);
        $Odp->nama_Odp = 'uni';
        if ($Odp->save()) {
            return $this->redirect(['index']);
        }
        else {
            var_dump($Odp->getErrors());
            die();
        }

    }

    public function actionDelete($id)
    {
        $Odp = Odp::findOne($id);
        if ($Odp->delete()) {
            return $this->redirect(['index']);
        }
        else {
            var_dump($Suplier->getErrors());
            die();
        }
    }

}
