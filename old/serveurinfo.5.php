<?php
$tab=[
  "easy" => "wwwwwii",
"whaa" => "2",
];

$tab2=['easy','den','deh'];

/*$php_array = array('easy','den','deh');*/
$php_array = $tab2;
$js_array = json_encode($php_array);


$products = array(
    // product abbreviation, product name, unit price
    array('choc_cake', 'Chocolate Cake', 15),
    array('carrot_cake', 'Carrot Cake', 12),
    array('cheese_cake', 'Cheese Cake', 20),
    array('banana_bread', 'Banana Bread', 14)
);

$ramData=shell_exec('ls -d */');

$lsData=shell_exec('ls');

$hddData=shell_exec('df -h');

$dateData=shell_exec('date');

$tabData=[$ramData,$lsData,$hddData,$dateData];

//echo json_encode($tabData) ;

if ($_POST['fct']==NULL) {
  echo "bug, c'est vide";
}
else {
  switch ($_POST['fct']) {
    case 'files':
        //$tabData[0]=' ';
      //  $tabData[2]=' ';
        echo json_encode($tabData) ;
      break;
    case 'ram':
        $tabData[1]=' ';
        $tabData[2]=' ';
        echo json_encode($tabData) ;
      break;
    case 'hdd':
        $tabData[0]=' ';
        $tabData[1]=' ';
        echo json_encode($tabData) ;
        break;
    default:
      echo "bug";
      break;
  }
}





//echo json_encode($tabData) ;
?>
