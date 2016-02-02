<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $realName
 * @property integer $role
 * @property string $email
 * @property string $studentId
 * @property string $studentProfessional
 * @property string $studentAcademy
 * @property string $teacherWorkAddress
 * @property string $teacherProfessionalTitle
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'password', 'realName', 'role', 'email'], 'required'],
            [['role'], 'integer'],
            [['username', 'email', 'studentId', 'studentProfessional'], 'string', 'max' => 30],
            [['password'], 'string', 'max' => 255],
            [['realName'], 'string', 'max' => 20],
            [['studentAcademy', 'teacherWorkAddress', 'teacherProfessionalTitle'], 'string', 'max' => 60],
            [['username'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app/config/section', 'ID'),
            'username' => Yii::t('app/config/section', 'Username'),
            'password' => Yii::t('app/config/section', 'Password'),
            'realName' => Yii::t('app/config/section', 'Real Name'),
            'role' => Yii::t('app/config/section', 'Role'),
            'email' => Yii::t('app/config/section', 'Email'),
            'studentId' => Yii::t('app/config/section', 'Student ID'),
            'studentProfessional' => Yii::t('app/config/section', 'Student Professional'),
            'studentAcademy' => Yii::t('app/config/section', 'Student Academy'),
            'teacherWorkAddress' => Yii::t('app/config/section', 'Teacher Work Address'),
            'teacherProfessionalTitle' => Yii::t('app/config/section', 'Teacher Professional Title'),
        ];
    }
}
