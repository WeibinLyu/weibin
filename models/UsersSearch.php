<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Users;

/**
 * UsersSearch represents the model behind the search form about `app\models\Users`.
 */
class UsersSearch extends Users
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'role'], 'integer'],
            [['username', 'password', 'realName', 'email', 'studentId', 'studentProfessional', 'studentAcademy', 'teacherWorkAddress', 'teacherProfessionalTitle'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Users::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'role' => $this->role,
        ]);

        $query->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'password', $this->password])
            ->andFilterWhere(['like', 'realName', $this->realName])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'studentId', $this->studentId])
            ->andFilterWhere(['like', 'studentProfessional', $this->studentProfessional])
            ->andFilterWhere(['like', 'studentAcademy', $this->studentAcademy])
            ->andFilterWhere(['like', 'teacherWorkAddress', $this->teacherWorkAddress])
            ->andFilterWhere(['like', 'teacherProfessionalTitle', $this->teacherProfessionalTitle]);

        return $dataProvider;
    }
}
