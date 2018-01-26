<?php

  //function fichier(){
    $ramData=shell_exec('ls -d */');

    $lsData=shell_exec('ls /home/*/');

    $hddData=shell_exec('df -h');

    $dateData=shell_exec('date');

    echo "$ramData<br>";
    echo "<br>";
    echo "$lsData<br>";
    echo "<br>";
    echo "$hddData<br>";
    echo "<br>";
    echo "$dateData<br>";
  //}


//
//   if(isset($_POST['action']) && !empty($_POST['action'])) {
//    $action = $_POST['action'];
//    switch($action) {
//        case 'choco': fichier();
//    }
//  }

 ?>
