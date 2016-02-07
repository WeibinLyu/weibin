<?php

namespace app\controllers;

use Yii;
use app\models\AssignmentBook;
use app\models\AssignmentBookSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AssignmentBookController implements the CRUD actions for AssignmentBook model.
 */
class AssignmentBookController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all AssignmentBook models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AssignmentBookSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single AssignmentBook model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }
    
    public function actionViewpdf()
    {
        $id = 1;
        return $this->render('viewpdf', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new AssignmentBook model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new AssignmentBook();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }
    
    public function actionCreatepdf()
    {
        $id = 1;
        $model = $this->findModel($id);
        // var_dump($model->userRelation->studentId);exit;
        require_once dirname(dirname(__FILE__)).'/assets/php/backEnds.php';

        $model->route = dirname(dirname(__FILE__)).backEndsTest('assignmentBook', 1300333331);
        if ($model->route != "false")
        {
//            var_dump($model->route);exit;
            $model->pdfExist = 1;
            $model->save();
            //echo "<script language=javascript>alert('生成pdf成功！');</script>";
            $this->redirect(array('viewpdf'));

        }
    }

    /**
     * Updates an existing AssignmentBook model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing AssignmentBook model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the AssignmentBook model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return AssignmentBook the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = AssignmentBook::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
