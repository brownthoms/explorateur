<?php

  function home() {

    $home=shell_exec('ls ..');
    echo "$home";
  }

  function suite() {

    $home=shell_exec('ls /var/www/projets/explorateur');
    echo "$home";
  }

  if (isset($_POST['action'])) {
    $action = $_POST['action'];
    switch ($action) {
      case '2' :  suite();
      case '1' : home();
      break;
    }
  }

 ?>
