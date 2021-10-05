<?php
    namespace app\models;
    use yii\db\ActiveRecord;

    class Modules extends ActiveRecord
    {
        private $ProjectName;
        private $ModuleName;
        private $Description;

        public function rules(){
            return [
                [['ProjectName', 'ModuleName', 'Description'], 'required']  
            ];
        }

    }

?>