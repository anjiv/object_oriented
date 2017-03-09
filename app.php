<?php
include_once 'messenger.php';
include_once 'mailer.php';
include_once 'notifier.php';
include_once 'connection.php';
ini_set('display_errors', 'On');
error_reporting(E_ALL);
$mailer=new Mailer();
$notifier=new Notifier($mailer);
$notifier->send();
$messenger=new Messenger();
$notifier=new Notifier($messenger);
$notifier->send();
?>
