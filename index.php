<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <?php
        include ("actions/db_connect.php");

        $sql = "SELECT * FROM media";
        $result = mysqli_query($conn, $sql);

        if($result->num_rows== 0){
            echo "No result";
        }elseif($result->num_rows == 1){
            $row = $result->fetch_assoc();
            echo $row ["title"]. " ". $row ["image"]. " ". $row ["author_first_name"]. " ". $row ["author_last_name"]. " ". $row ["ISBN_code"]. " ". $row ["short_description"]. " ". $row ["publisher_date"]. " ". $row ["publisher_name"]. " ". $row ["publisher_address"]. " ". $row ["publisher_size"]. " ". $row ["type"]. " ". $row ["status"]
            . "<br>";

        }else {
            $rows = $result->fetch_all(MYSQLI_ASSOC);
            foreach ($rows as $key => $value){

                echo $value ["title"]. " ". $value ["image"]. " ". $value["author_first_name"]. " ". $value ["author_last_name"]. " ". $value ["ISBN_code"]. " ". $value ["short_description"]. " ". $value ["publish_date"]. " ". $value ["publisher_name"]. " ". $value ["publisher_address"]. " ". $value ["publisher_size"]. " ". $value ["type"]. " ". $value ["status"]
                . "<br>";
            } 
        }


    ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>

