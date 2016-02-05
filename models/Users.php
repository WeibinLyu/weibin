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
        return array(
            'id' => 'ID',
            'username' => '用户名',
            'password' => '密码',
            'oldPassword' => '旧密码',
            'repeatPassword' => '确认密码',
            'realName' => '真实姓名',
            'role' => '角色',
            'email' => 'Email',
            'studentId' => '学号',
            'studentProfessional' => '专业',
            'studentAcademy' => '学院',
            'teacherWorkAddress' => '教师办公室',
            'teacherProfessionalTitle' => '教师职称',
        );
    }
    
    public function beforeSave($insert) 
    {
        if (parent::beforeSave($insert))
        {
            $this->password = md5($this->password);
            return true;
        }
        else 
        {
            return false;
        }
    }
}
