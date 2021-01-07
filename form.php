<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="forminsert.php" method="post">
  <div class="form-group">
  
    <input type="name" class="form-control" name="name">
  </div>
  <div class="form-group">

    <input type="mobile" class="form-control" name="mobile">
  </div>
  <div class="checkbox">
    <input type="radio" name="a" value="A"> A
    <input type="radio" name="a" value="P"> p
  </div>
  <button type="submit" class="btn btn-default" value="submit" name="submit">Submit</button>
</form>
</body>
</html>