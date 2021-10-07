<?php
    namespace app\models;
    use yii\db\ActiveRecord;

    class Posts extends ActiveRecord
    {
        private $ProjectName;
        private $Description;
        private $Logo;

        public function rules(){
            return [
                [['ProjectName', 'Description', 'Logo'], 'required']  
            ];
        }

    }

?>