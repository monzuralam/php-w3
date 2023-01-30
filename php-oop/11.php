<?php
require_once 'inc/header.php';

/**
 * polymorphism
 */
class UserData{
    public $username;
    public $userid;
    protected $deposit = "10";

    public function __construct( $username, $userid){
        $this->username = $username;
        $this->userid = $userid;
    }

    public function display(){
        $this->dot();
        echo "Assalamualikum, {$this->username}. Your ID : {$this->userid} <br>";
        echo "Total Deposit {$this->deposit} K BDT <br>";
        $this->dot();
    }

    protected function dot(){
        echo "-----------------------------------------------------------------------------------<br>";
    }
}

class AdminData extends UserData{
    public $label;
    protected $deposit = "14";

    public function display(){
        $this->dot();
        echo "Assalamualikum, {$this->username}. Your ID : {$this->userid} & level is {$this->label} <br>";
        echo "Total Deposit {$this->deposit} K BDT <br>";
        $this->dot();
    }
}

$user = new UserData( 'Rufaida Jannat', '2' );
$user->display();
echo "<br>";
$admin = new AdminData( 'Monzur Alam', '1' );
$admin->label = "Administrator";
$admin->display();

if( $admin instanceof $user ){
    echo "Inherited";
}

require_once 'inc/footer.php';