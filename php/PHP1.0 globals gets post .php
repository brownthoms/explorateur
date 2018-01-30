<?php
echo "Welcome ";
echo"easy";
$a = array(1, 2, array("a", "b", "c"));

echo "<pre>".print_r($a,true)."</pre>";


$output = shell_exec('ls -lart');
$output2 = shell_exec('pwd');
echo "<pre>$output</pre>";
echo "<pre>$output2</pre>";

 ?>


 <?php
 // Generate a formatted list with all globals
 //----------------------------------------------------
 // Custom global variable $_CUSTOM
 $_CUSTOM = array('USERNAME' => 'john', 'USERID' => '18068416846');

 // List here whichever globals you want to print
 // This could be your own custom globals
 $globals = array(
     '$_SERVER' => $_SERVER, '$_ENV' => $_ENV,
     '$_REQUEST' => $_REQUEST, '$_GET' => $_GET,
     '$_POST' => $_POST, '$_COOKIE' => $_COOKIE,
     '$_FILES' => $_FILES, '$_CUSTOM' => $_CUSTOM
 );
 ?>
 <html>
     <style>
         <?php // Adjust CSS formatting for your output  ?>
         .left {
             font-weight: 700;
         }
         .right {
             font-weight: 700;
             color: #009;
         }
         .key {
             color: #d00;
             font-style: italic;
         }
     </style>
     <body>
         <?php
         // Generate the output
         echo '<h1>Superglobals</h1>';
         foreach ($globals as $globalkey => $global) {
             echo '<h3>' . $globalkey . '</h3>';
             foreach ($global as $key => $value) {
                 echo '<span class="left">' . $globalkey . '[<span class="key">\'' . $key . '\'</span>]</span> = <span class="right">' . $value . '</span><br />';
             }
         }
         ?>
         Tail -f /var/log/apache2
         git add
         ou git commit -am 'test2'
         git push
         chown user:groupe file ...
     </body>
 </html>
