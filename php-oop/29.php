<?php
require_once 'inc/header.php';
require_once 'info.php';

/**
 * Strategic design pattern
 */
interface SendMsg{
    public function notification();
}

class TextSMS implements SendMsg{
    public function notification(){
        echo "SMS send successfully.";
    }
}

class TextMail implements SendMsg{
    public function notification(){
        echo "Mail send successfully.";
    }
}

class TextFax implements SendMsg{
    public function notification(){
        echo "Fax send successfully.";
    }
}

class User{
    public function getMsg(){
        return 'fax';
    }
}

$user = new User();
$msg = $user->getMsg();
switch( $msg ){
    case 'sms':
        $obj = new TextSMS();
        break;
    
    case 'mail':
        $obj = new TextMail();
        break;

    case 'fax':
        $obj = new TextFax();
        break;
    
    default:
        $obj = new TextSMS();
        break;
}

echo $obj->notification();



require_once 'inc/footer.php';