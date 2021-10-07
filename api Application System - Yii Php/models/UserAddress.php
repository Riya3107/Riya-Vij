<?php
    namespace app\models;
    use yii\db\ActiveRecord;

    class UserAddress extends ActiveRecord
    {
        private $Address1;
        private $Address2;
        private $City;
        private $State;
        private $Zip;
        private $Country;

        public function rules(){
            return [
                [['Address1', 'Address2', 'City', 'State', 'Zip', 'Country'], 'required']  
            ];
        }

    }

?>