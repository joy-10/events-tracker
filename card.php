<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
<?php 
  session_start();
  ?>
  <div class="row">
    <?php 
    foreach($_SESSION['cdata'] as $i)
    {
    ?>
    <div class="mb-3 col-md-4 col-lg-3 col-sm-12">
      <div style="width: 100%;" class='card h-100'>  
      <div class='card-body d-flex flex-column' bg='light'>
        <h5 class='card-title mt-auto'>EVENT</h5>
        <p class='card-text mt-auto'>
          <?php echo $i[0] ; ?>
        </p>
        <a href="./del.php?id=<?php echo $i[1] ;?>" class="btn btn-danger">Delete</a>
      </div>
    </div>
    </div>
    <?php } ?>
  </div>
</body>
</html>
  