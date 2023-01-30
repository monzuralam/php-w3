<?php
/**
 * Method override & overloading
 */
require_once 'inc/header.php';

final class UserData{
    public $username;
    public $userid;

    public function __construct( $username, $userid){
        $this->username = $username;
        $this->userid = $userid;
    }

    public final function display(){
        echo "Assalamualikum, {$this->username}. Your ID : {$this->userid}";
    }
}

$user = new UserData( 'Rufaida Jannat', '2' );
$user->display();

require_once 'inc/footer.php';