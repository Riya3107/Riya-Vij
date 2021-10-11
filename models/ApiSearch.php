<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Api;


class ApiSearch extends Api
{
    public $api_title;
    public $api_url;
    public $module_title;
    public $project_title;

    public function rules()
    {
        return [
            [['api_title', 'api_url', 'project_title', 'module_title'], 'safe'],
        ];
    }

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
        $query = Api::find();
        $query->joinWith(['project']);
        $query->joinWith(['module']);
        
        $this->load($params);
        $query->orFilterWhere(['like', 'title', $this->api_title])
        ->orFilterWhere(['like', 'url', $this->api_url])
        ->orFilterWhere(['like', 'project.title', $this->project_title])
        ->orFilterWhere(['like', 'module.title', $this->module_title]);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 2,
            ],
            'sort' => [
                'attributes' => ['title'],
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