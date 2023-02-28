<?php
$dbconnection = new myqsli("localhost", "root", "", "thesis");
if($dbconnection){
    echo "Database has been connected successfuly ";
}
else{
    echo $dbconnection->connect_error;
}

?>