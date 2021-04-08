<?php 
define("SERVERNAME","localhost");
define("USERSERV","root");
define("PASSSERV","");
define("DBNAME","crud");
$conn=mysqli_connect(SERVERNAME,USERSERV,PASSSERV,DBNAME);

if($conn){
    echo "Connect";
}else {
  die("error ".mysqli_connect_error($conn));
}
?>