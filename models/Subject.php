<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "subject".
 *
 * @property integer $id
 * @property string $subjectName
 * @property integer $createrId
 * @property string $content
 * @property integer $isReviewed
 *
 * @property Proposal[] $proposals
 */
class Subject extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'subject';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['subjectName', 'createrId', 'content', 'isReviewed'], 'required'],
            [['createrId', 'isReviewed'], 'integer'],
            [['content'], 'string'],
            [['subjectName'], 'string', 'max' => 30],
            [['subjectName'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'subjectName' => Yii::t('app', 'Subject Name'),
            'createrId' => Yii::t('app', 'Creater ID'),
            'content' => Yii::t('app', 'Content'),
            'isReviewed' => Yii::t('app', 'Is Reviewed'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProposals()
    {
        return $this->hasMany(Proposal::className(), ['subjectId' => 'id']);
    }
}
