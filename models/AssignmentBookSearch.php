<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\AssignmentBook;

/**
 * AssignmentBookSearch represents the model behind the search form about `app\models\AssignmentBook`.
 */
class AssignmentBookSearch extends AssignmentBook
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'chooserId', 'subjectId'], 'integer'],
            [['topicType', 'date', 'paperContent', 'paperRequireAndData', 'paperPreliminaryWork', 'referenceDocumentation', 'equipment', 'taskAssignmentDate', 'taskStartData', 'taskEndData', 'enterpriseOrGoup', 'chiefOpnion', 'acadmyGroupOpnion', 'pdfExist', 'route'], 'safe'],
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
        $query = AssignmentBook::find();

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
            'chooserId' => $this->chooserId,
            'subjectId' => $this->subjectId,
            'date' => $this->date,
            'taskAssignmentDate' => $this->taskAssignmentDate,
            'taskStartData' => $this->taskStartData,
            'taskEndData' => $this->taskEndData,
        ]);

        $query->andFilterWhere(['like', 'topicType', $this->topicType])
            ->andFilterWhere(['like', 'paperContent', $this->paperContent])
            ->andFilterWhere(['like', 'paperRequireAndData', $this->paperRequireAndData])
            ->andFilterWhere(['like', 'paperPreliminaryWork', $this->paperPreliminaryWork])
            ->andFilterWhere(['like', 'referenceDocumentation', $this->referenceDocumentation])
            ->andFilterWhere(['like', 'equipment', $this->equipment])
            ->andFilterWhere(['like', 'enterpriseOrGoup', $this->enterpriseOrGoup])
            ->andFilterWhere(['like', 'chiefOpnion', $this->chiefOpnion])
            ->andFilterWhere(['like', 'acadmyGroupOpnion', $this->acadmyGroupOpnion])
            ->andFilterWhere(['like', 'pdfExist', $this->pdfExist])
            ->andFilterWhere(['like', 'route', $this->route]);

        return $dataProvider;
    }
}
