<?php
    require_once 'db_connect.php';

    if($_POST["id"]){
        $id=$_POST["id"];
        $title= $_POST["title"];
        $image= $_POST["image"];
        $author_first_name= $_POST["author_first_name"];
        $author_last_name= $_POST["author_last_name"];
        $ISBN_code= $_POST["ISBN_code"];
        $short_description= $_POST["short_description"];
        $publish_date= $_POST["publish_date"];
        $publisher_name= $_POST["publisher_name"];
        $publisher_address= $_POST["publisher_address"];
        $publisher_size= $_POST["publisher_size"];
        $type= $_POST["type"];
        $status= $_POST["status"];
        
        $sql = "DELETE FROM media WHERE id={$id}";

        var_dump($sql);

        if($conn->query($sql)){
           
        }
    }


