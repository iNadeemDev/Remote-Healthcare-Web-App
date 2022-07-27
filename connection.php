
<?php
    $con = new mysqli('localhost', 'root', '', 'alfacare');
    if(!$con){
    die('Could not Connect My Sql:' .mysql_error());
    }
    date_default_timezone_set("Asia/Karachi");
?>
