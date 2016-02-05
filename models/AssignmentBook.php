<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "assignmentBook".
 *
 * @property integer $id
 * @property integer $chooserId
 * @property integer $subjectId
 * @property string $topicType
 * @property string $date
 * @property string $paperContent
 * @property string $paperRequireAndData
 * @property string $paperPreliminaryWork
 * @property string $referenceDocumentation
 * @property string $equipment
 * @property string $taskAssignmentDate
 * @property string $taskStartData
 * @property string $taskEndData
 * @property string $enterpriseOrGoup
 * @property string $chiefOpnion
 * @property string $acadmyGroupOpnion
 * @property string $pdfExist
 * @property string $route
 */
class AssignmentBook extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'assignmentBook';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['chooserId', 'subjectId', 'topicType', 'date', 'paperContent', 'paperRequireAndData', 'paperPreliminaryWork', 'referenceDocumentation', 'equipment', 'taskAssignmentDate', 'taskStartData', 'enterpriseOrGoup'], 'required'],
            [['chooserId', 'subjectId'], 'integer'],
            [['date', 'taskAssignmentDate', 'taskStartData', 'taskEndData'], 'safe'],
            [['paperContent', 'paperRequireAndData', 'paperPreliminaryWork', 'referenceDocumentation', 'equipment', 'chiefOpnion', 'acadmyGroupOpnion', 'pdfExist'], 'string'],
            [['topicType', 'enterpriseOrGoup'], 'string', 'max' => 50],
            [['route'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'subjectId' => 'Subject',
            'chooserId' => 'chooserId',
            'topicType' => '题目类型',
            'date' => '日期',
            'paperContent' => '论文内容',
            'paperRequireAndData' => '要求与数据',
            'paperPreliminaryWork' => '应完成的工作',
            'referenceDocumentation' => '应收集的资料及主要参考文献',
            'equipment' => '所需的主要仪器和设备',
            'taskAssignmentDate' => '任务下达时间',
            'taskStartData' => '任务开始时间',
            'taskEndData' => '任务结束时间',
            'enterpriseOrGoup' => '组织实施单位',
            'chiefOpnion' => '教研室主任意见',
            'acadmyGroupOpnion' => '学院领导小组意见',
            'pdfExist' => 'pdfExist',
            'route'=>'$model->route'
        );
    }
}
