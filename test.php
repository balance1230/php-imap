<?php

require_once 'vendor/autoload.php';

$class=new \Balnce1230\PhpImap\Mailbox('','','Ifun_123');

var_dump($class->sortMails());