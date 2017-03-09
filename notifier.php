<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);
class Notifier{
  protected $mailer;
  protected $messenger;
  public function __construct(Message_Manager_Interface $mailer){
    $this->mailer=$mailer;
  }
  public function send(){
    $this->mailer->execute();
  }
}
?>
