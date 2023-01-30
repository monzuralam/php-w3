<?php
/**
 * inheritance
 */
require_once 'inc/header.php';

class UserData{
    public $username;
    public $userid;

    public function __construct( $username, $userid){
        $this->username = $username;
        $this->userid = $userid;
    }

    public function display(){
        echo "Assalamualikum, {$this->username}. Your ID : {$this->userid}";
    }
}

class AdminData extends UserData{
    public $label;

    public function display(){
        echo "Assalamualikum, {$this->username}. Your ID : {$this->userid} & level is {$this->label}";
    }
}

$user = new UserData( 'Rufaida Jannat', '2' );
$user->display();
echo "<br>";
$admin = new AdminData( 'Monzur Alam', '1' );
$admin->label = "Administrator";
$admin->display();

require_once 'inc/footer.php';