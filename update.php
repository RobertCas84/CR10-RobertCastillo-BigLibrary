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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
  <a class="navbar-brand" href="#">Big Library</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="details.php">Show Media <span class="sr-only">(current)</span></a>
      </li>
      
     
    </ul>
    
  </div>
</nav>


<form action="actions/a_form_update.php" method="post">
    
  <div class="form-group">
    <label for="">Title</label>
    <input type="text" value="<?php echo $data['title']?>" class="form-control" id="" aria-describedby="" placeholder="Title">
    <small id="" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="">Image</label>
    <input type="text" value="<?php echo $data['image']?>" class="form-control" id="" placeholder="Image">
  </div>
  
  <div class="form-group">
    <label for="">Author Firstname</label>
    <input type="text" value="<?php echo $data['author_first_name']?>" class="form-control" id="" placeholder="Author Firstname">
  </div>
  <div class="form-group">
    <label for="">Author Lastname</label>
    <input type="text" value="<?php echo $data['author_last_name']?>" class="form-control" id="" placeholder="Author Lastname">
  </div>
  <div class="form-group">
    <label for="">ISBN</label>
    <input type="text" value="<?php echo $data['ISBN_code']?>" class="form-control" id="" placeholder="ISBN-Code">
  </div>
  <div class="form-group">
    <label for="">Description</label>
    <input type="text" value="<?php echo $data['short_description']?>" class="form-control" id="" placeholder="Description">
  </div>
  <div class="form-group">
    <label for="">Publish Date</label>
    <input type="text" value="<?php echo $data['publish_date']?>" class="form-control" id="" placeholder="Publish Date">
  </div>
  <div class="form-group">
    <label for="">Publisher Name</label>
    <input type="text" value="<?php echo $data['publisher_name']?>" class="form-control" id="" placeholder="Publisher Name">
  </div>
  <div class="form-group">
    <label for="">Publisher Address</label>
    <input type="text"  value="<?php echo $data['publisher_address']?>" class="form-control" id="" placeholder="Publisher Address">
  </div>
  <div class="form-group">
    <label for="">Publisher Size</label>
    <input type="text" value="<?php echo $data['publisher_size']?>" class="form-control" id="" placeholder="Publisher Size">
  </div>
  <div class="form-group">
    <label for="">Type</label>
    <input type="text" value="<?php echo $data['type']?>" class="form-control" id="" placeholder="Type">
  </div>
  <div class="form-group">
    <label for="">Status</label>
    <input type="text" value="<?php echo $data['status']?>" class="form-control" id="" placeholder="Status">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
</form>

    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>      
</body>
</html>
<?php 
 }
?>