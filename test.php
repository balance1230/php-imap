<?php

require_once 'vendor/autoload.php';

$class=new \Balance\PhpImap\Mailbox('','test30@ifunmail.com','Ifun_123');

var_dump($class->sortMails());