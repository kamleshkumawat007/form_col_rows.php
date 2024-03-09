<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<style>
    body{
        background-color: aqua;
    }
    div{
      text-align: center;
    }
</style>
<body>
    <div>   
    
    <form action="form12.php" method="GET">
    <label for="rows">row</label><input type="number" name="rows"/></br></br>
    <label for="cols">col</label><input type="number" name="col"/></br></br>
    <input type="submit" value='print Table'></br></br>
    </form>
    </div>
</body>
</html>