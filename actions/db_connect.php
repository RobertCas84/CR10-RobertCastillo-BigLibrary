<?php
        error_reporting( ~E_DEPRECATED & ~E_NOTICE );
        
        $hostName="localhost";
        $userName="root";
        $password="";
        $dbName="big_library";

        $conn = mysqli_connect($hostName,$userName,$password,$dbName);

        


?>