<?php
    namespace app\models;
    use yii\db\ActiveRecord;

    class Apis extends ActiveRecord
    {
        private $ApiName;
        private $Url;
        private $Description;
        private $Method;
        private $Request;
        private $Reponse;
        private $ProjectName;
        private $ModuleName;

        public function rules(){
            return [
                [['ApiName', 'Url', 'Description', 'Method', 'Request', 'Response', 'ProjectName', 'ModuleName'], 'required']  
            ];
        }

    }

?>