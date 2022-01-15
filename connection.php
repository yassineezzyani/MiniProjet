<?php $host="localhost" ;
 $dbusername="root" ;
  $dbpassword="" ;
   $dbname="gest_client" ;
   $a= mysqli_connect($host,$dbusername, $dbpassword,$dbname);
     if($a->connect_error){
        die("pb connetion".$a -> connect_error);
     }
     
   ?>