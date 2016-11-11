<?php
namespace pistol88\organization\controllers;

use yii;
use pistol88\organization\models\organization\OrganizationSearch;
use pistol88\organization\models\Organization;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

class OrganizationController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => $this->module->adminRoles,
                    ]
                ]
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                    'set-global' => ['post'],
                ],
            ],
        ];
    }

    public function actionIndex()
    {
        $searchModel = new organizationSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'module' => $this->module,
        ]);
    }

    public function actionCreate()
    {
        $model = new organization;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $module = $this->module;

            return $this->redirect(['update', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'module' => $this->module,
            ]);
        }
    }

    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $module = $this->module;

            return $this->redirect(['update', 'id' => $model->id]);
        } else {
            return $this->render('update', ['model' => $model, 'module' => $this->module]);
        }
    }

    public function actionDelete($id)
    {
        if($model = $this->findModel($id)) {
            $this->findModel($id)->delete();
            $module = $this->module;
        }
		
        return $this->redirect(['index']);
    }
    
    public function actionSetGlobal()
    {
        $organization = yii::$app->request->post('organization');

        if($result = yii::$app->organization->set($organization)) {
            return(json_encode(['result' => 'success']));
        } else {
            return(json_encode(['result' => 'fail', 'error' => 'Can\'t set organization.']));
        }
    }

    protected function findModel($id)
    {
        $model = new organization;
        
        if (($model = $model::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested organization does not exist.');
        }
    }
}
