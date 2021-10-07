<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Posts;


class ProjectSearch extends Posts{
    public $ProjectName;
    public function rules()
    {
        return [
            [['ProjectName'], 'safe'],
        ];
    }

    public function scenarios(){
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
        $query = Posts::find();
        
        $this->load($params);
        $query->andFilterWhere(['like', 'ProjectName', $this->ProjectName]);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            // 'pagination' => [
            //     'pageSize' => 2,
            // ],
            'sort' => [
                'attributes' => ['ProjectName'],
            ]
        ]);

        
        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        return $dataProvider;
    }
}




?>