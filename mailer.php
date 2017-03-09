<?php
include_once 'message_manager_interface.php';
ini_set('display_errors', 'On');
error_reporting(E_ALL);
class Mailer implements Message_Manager_Interface{
  public function execute(){
    print_r("hello_world");
  }
}
?>
