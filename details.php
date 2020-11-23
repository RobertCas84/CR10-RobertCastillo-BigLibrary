
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css"></link>
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-success mb-4">
  <a class="navbar-brand" href="#">Big Library</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="details.php">Show Media <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="create.php">Add NEW Media <span class="sr-only">(current)</span></a>
      </li>
      
    
    </ul>
    
  </div>
</nav>

    <?php
        include ("actions/db_connect.php");

        $sql = "SELECT * FROM media";
        $result = mysqli_query($conn, $sql);

        if($result->num_rows== 0){
            echo "No result";
        }else {
            $rows = $result->fetch_all(MYSQLI_ASSOC);
            foreach ($rows as $key => $value){
                
                
              echo "
              <div class='container'>
              <div class='row'>
                
              <div class='card' style='width: 18rem;'>
              <img src='".$value['image']."' class='card-img-top' alt='...'>
              <div class='card-body'>
                   <h5 class='card-title'>".$value["title"]."</h5>
                  <p class='card-text'>".$value["short_description"]."</p>
              </div>
                  <ul class='list-group list-group-flush'>
                  <li class='list-group-item'>Type:".$value["type"]."</li>
                  <li class='list-group-item'>Author:".$value["author_first_name"]." ".$value["author_last_name"]."</li>
                  <li class='list-group-item'>ISBN:".$value["ISBN_code"]."</li>
                  <li class='list-group-item'>Publish-Date:".$value["publish_date"]."</li>
                  <li class='list-group-item'>Publisher:".$value["publisher_name"]."</li>
                  <li class='list-group-item'>Publisher-Address:".$value["publisher_address"]."</li>
                  <li class='list-group-item'>Publisher-Size:".$value["publisher_size"]."</li>
                  <li class='list-group-item'>Status:".$value["status"]."</li>
                  </ul>
          <div class='card-body'>
          <a href='update.php?id=".$value['id']."'><button type='button' class='btn btn-primary'>Update</button></a> 
          <a href='delete.php?id=".$value['id']."'><button type='button' class='btn btn-primary'>Delete</button></a>
                </div>
                </div> 
                </div>
</div>";
                 
                
    }  
}   
           
?>
  
  <a href="logout.php?logout"><button type='button' class='btn btn-primary'>Sign Out</button></a>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>  
</body>
</html>


