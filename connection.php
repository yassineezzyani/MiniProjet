<?php $host="localhost" ;
 $dbusername="root" ;
  $dbpassword="" ;
   $dbname="gestion_noteet" ;
   $a= new mysqli($host,$dbusername, $dbpassword,$dbname);
     if($a->connect_error){
        die("pb connetion".$a -> connect_error);
     }
   ?>