<?php 

  if($_GET['token'] == "koskadaskdsoakdaskdoapokdaps"){
    $email = $_GET['email']; 
    file_put_contents('email.txt', $email);
  }


?>