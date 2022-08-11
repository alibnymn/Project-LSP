<?php 

   class User{

    //Propertis&Methods
      
      public $username;
      protected $email;
      public $role = 'member';
      
      //constructors
      public function __construct($username, $email){
          $this->username = $username;
          $this->email = $email;
      }

      public function __destruct(){
        echo "the user $this->username was removed <br>";
    }
      
      public function __clone(){
       $this->username = $this->username. '(cloned)<br>';   
      }

      public function addfriend() {
          return "$this->email added a new friend";
      }

      public function message(){
          return "$this->email sent a new message";
      }

      //getters
      public function getEmail(){
          return $this->email;
      }

      //setters
      public function setEmail($email){
        if(strpos($email, '@')> -1){
            $this->email = $email;
        }
      }

   }

   class AdminUser extends User {
       
     public $level;
     public $role = 'admin';
     

     public function __construct($username, $email, $level){
         $this->level = $level;
         parent::__construct($username, $email);
         $this->email = $email;
     }

     public function message(){
        return "$this->email, an admin, sent a new message";
     }


   }  
    
   $userOne = new User('mario', 'mario@gmail.com');
   $userTwo = new User('juki', 'juki@gmail.com');
   $userThree = new AdminUser('yosi', 'yosi@gmail.com', 5);

   //unset($userOne);
   $userFour = clone $userOne;
   echo $userFour->username;
/*
   echo $userThree->username . '<br>';
   echo $userThree->getEmail() . '<br>';
   echo $userThree->level . '<br>';

   echo $userOne->role . '<br>';
   echo $userThree->role . '<br>';

   echo $userTwo->message() . '<br>';
   echo $userThree->message() . '<br>';
  


    $userOne->email = 3;

   echo $userOne->email . '<br>';
   echo $userTwo->email . '<br>';

   

   $userOne->setEmail('yosagmail.com');

   echo $userOne->getEmail() .'<br>';
   echo $userTwo->getEmail();
*/

?>

<html lang="en">
    <head>
        <title>PHP Dengan OOP </title>
    </head>
    <body>

    </body>
</html>