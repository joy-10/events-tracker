<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
  <div class="container col-lg-6 offset-lg-3 mt-4 ml-2">

    <form action="submit.php" method="POST" clas='col-lg-6 offset-lg-3'>

        <div class="mb-3">
          <label for="event" class="form-label">Enter event</label>
          <input type="text" class="form-control" id="event" name="event">
        </div>

        <input style="margin-bottom: 3%;"
        class="btn btn-primary" type="submit" name="submit" value="Submit">

        <input style="margin-bottom: 3%;"
        class="btn btn-primary" type="submit" name="home" value="Home">

      
    </form>
  </div>
</body>
</html>

