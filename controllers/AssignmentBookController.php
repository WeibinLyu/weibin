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
    public function actionView()
    {
        if(\Yii::$app->user->isGuest == null)
        {
            $chooserid = \Yii::$app->user->identity->id;
            $stuid = \Yii::$app->user->identity->studentId;;
            $model = $this->findAssignmentBook($chooserid);
            
            if($model != null)
            {
                return $this->render('view', ['model' => $model,]);
            }
            else
            {
                $this->redirect("index.php?r=assignment-book/create");
            }
        }
        else 
        {
            $this->redirect("index.php?r=site/login");
        }
    }
    
    public function actionViewpdf()
    {
        if(\Yii::$app->user->isGuest == null)
        {
            $chooserid = \Yii::$app->user->identity->id;
            $stuid = \Yii::$app->user->identity->studentId;;
            $model = $this->findAssignmentBook($chooserid);
            
            if($model != null)
            {
                return $this->render('viewpdf', [
                    'model' => $model,
                ]);
            }
            else
            {
                $this->redirect("index.php?r=assignment-book/create");
            }
        }
        else 
        {
            $this->redirect("index.php?r=site/login");
        }
    }

    /**
     * Creates a new AssignmentBook model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        if(\Yii::$app->user->isGuest == null)
        {
            $model = new AssignmentBook();

            if ($model->load(Yii::$app->request->post())) 
            {
                $model->chooserId = \Yii::$app->user->identity->id;
                if($model->save())
                    return $this->redirect(['view', 'id' => $model->id]);
            } 
            else 
            {
                return $this->render('create', ['model' => $model,]);
            }
        }
        else
        {
            $this->redirect("index.php?r=site/login");
        }
    }
    
    public function actionCreatepdf()
    {
        if(\Yii::$app->user->isGuest == null)
        {
            $chooserid = \Yii::$app->user->identity->id;
            $stuid = \Yii::$app->user->identity->studentId;;
            $model = $this->findAssignmentBook($chooserid);
            if($model == null)
            {
                $this->redirect("index.php?r=assignment-book/create");
                return;
            }
            require_once dirname(dirname(__FILE__)).'/web/php/backEnds.php';
            $model->route = backEndsTest('assignmentBook', $stuid);
            if ($model->route != "false")
            {
                $model->pdfExist = 1;
                $model->save();
                //$eer = $model->errors;
                $this->redirect(array('viewpdf'));
            }
        }
        else
        {
            $this->redirect("index.php?r=site/login");
        }
    }

    /**
     * Updates an existing AssignmentBook model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate()
    {
        if(\Yii::$app->user->isGuest == null)
        {
            $chooserid = \Yii::$app->user->identity->id;
            $stuid = \Yii::$app->user->identity->studentId;;
            $model = $this->findAssignmentBook($chooserid);

            if ($model->load(Yii::$app->request->post())) 
            {
                $model->chooserId = \Yii::$app->user->identity->id;
                if($model->save())
                {
                    return $this->redirect(['view', 'id' => $model->id]);
                }
            } 
            else 
            {
                return $this->render('create', ['model' => $model,]);
            }
        }
        else
        {
            $this->redirect("index.php?r=site/login");
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
    
    protected function findAssignmentBook($chooserid)
    {
        if (($model = AssignmentBook::find()->where(['chooserId' => $chooserid])->one()) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
