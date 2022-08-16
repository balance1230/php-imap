<?php

require_once 'vendor/autoload.php';

$class=new \Balnce1230\PhpImap\Mailbox('{ifunmail.com:993/imap/ssl}','test30@ifunmail.com','Ifun_123');

var_dump($class->sortMails());