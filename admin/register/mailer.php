<?php
require_once "Mail.php";
function mailer($recipient,$msg){
$from = '<your_user_name@gmail.com>';
$to = '<'.$recipient.'>';
$subject = 'Registration Details for Leave Management System';
$body = $msg;
$status = false; // initially set to false
$headers = array(
    'From' => $from,
    'To' => $to,
    'Subject' => $subject
);

$smtp = Mail::factory('smtp', array(
        'host' => 'ssl://smtp.gmail.com',
        'port' => '465',
        'auth' => true,
        'username' => 'your_user_name@gmail.com',
        'password' => 'your_password'
    ));

//$mail = $smtp->send($to, $headers, $body);

/*if (PEAR::isError($mail)) {
    $status = true;
} else {
    $status = true; // return true on succesful sending
}
return $status;*/
}
?>
