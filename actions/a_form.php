<?php
    require_once 'db_connect.php';
    

    if($_POST){
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
        
        $sql = "INSERT INTO `media` (`title`, `image`, `author_first_name`, `author_last_name`, `ISBN_code`, `short_description`,
         `publish_date`, `publisher_name`, `publisher_address`, `publisher_size`, `type`, `status`) 
        VALUES ('$title','$image','$author_first_name','$author_last_name','$ISBN_code','$short_description','$publish_date','$publisher_name','$publisher_address','$publisher_size','$type','$status')";
        
        /*var_dump($sql);*/

        if(mysqli_query($conn,$sql)){
            echo "
            <a href= '../index.php'><button type='button' class='btn btn-primary'>Back to the homepage</button> </a>
            ";
        }else{ 
            echo "error";
         
    }
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <title>Document</title>
</head>
<body>
    
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>  
</html>