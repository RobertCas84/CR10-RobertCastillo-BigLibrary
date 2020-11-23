<?php
    require_once 'actions/db_connect.php';
    if ($_GET['id']) {
        $id = $_GET['id'];
        $sql = "DELETE FROM media WHERE id=$id";
        
        if(mysqli_query($conn,$sql)){
            echo "success <br> <a href='index.php'><button type='button' class='btn btn-primary'>Back to homepage </button></a>";
        }else{ 
            echo"error";
 }
        
}
    
?>

