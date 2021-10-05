<?php
    namespace app\models;
    use yii\db\ActiveRecord;

    class Users extends ActiveRecord
    {
        private $FirstName;
        private $LastName;
        private $Gender;
        private $Email;
        private $ProfilePic;

        public function rules(){
            return [
                [['FirstName', 'LastName', 'Gender', 'Email', 'ProfilePic'], 'required']  
            ];
        }

    }

?>