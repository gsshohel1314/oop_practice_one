<?php
    namespace User\Profile;
    class User_Data{
        private $user_id, $user_name;

        public function __construct($id, $name)
        {
            $this->user_id = $id;
            $this->user_name = $name;
        }
    }
    
    # How object create for this class?
    $usr = new User\Profile\User_Data(1, "Shohel");
?>

File1.php
<?php
    namespace User\Profile;
    class User_Data{
        private $user_id, $user_name;

        public function __construct($id, $name){
            $this->user_id = $id;
            $this->user_name = $name;

        }
    }
?>

File2.php
<?php
    use User\Profile\User_Data as uData;
    include 'File1.php';
    $usr = new User\Profile\User_Data(1, 'Shohel');
?>