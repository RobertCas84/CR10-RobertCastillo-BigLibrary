<?php
    require_once 'actions/db_connect.php';
    if ($_GET['id']) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM media WHERE id={$id}";
        $result = $conn->query($sql);
        $data = $result->fetch_assoc();
        $conn->close();
        
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="actions/a_form_delete.php" method="post">
        <input type="text" name="title" placeholder="title"value="<?php echo $data['title']?>"><br>
        <input type="text" name="image" placeholder="image"><br>
        <input type="text" name="author_first_name" placeholder="Author-FirstName"><br>
        <input type="text" name="author_last_name" placeholder="Author-LastName"><br>
        <input type="text" name="ISBN_code" placeholder="ISBN-Code"><br>
        <input type="text" name="short_description" placeholder="Description"><br>
        <input type="date" name="publish_date" placeholder="Publish-Date"><br>
        <input type="text" name="publisher_name" placeholder="Publisher-Name"><br>
        <input type="text" name="publisher_address" placeholder="Publisher-Address"><br>
        <input type="text" name="publisher_size" placeholder="Publisher-Size"><br>
        <input type="text" name="type" placeholder="type"><br>
        <input type="text" name="status" placeholder="status"><br>
        <input type="submit" name="submit" placeholder="title"><br>
        <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
    
    
    
    </form>
    
</body>
</html>
<?php 
 }
?>