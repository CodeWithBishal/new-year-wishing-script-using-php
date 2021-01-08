<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha512-iQQV+nXtBlmS3XiDrtmL+9/Z+ibux+YuowJjI4rcpO7NYgTzfTOiFNm09kWtfZzEB9fQ6TwOVc8lFVWooFuD/w==" crossorigin="anonymous" />
    <title>Happy New Year 2020</title>
</head>
<style>
    .wish{
    padding-top: 20%;
    }
    @media (max-width: 900px) {
        .wish{
        padding-top: 40%;
        }
}
</style>
<body>
    <h2>
    <div class="main">
    <div class="py-5 text-center">
    <?php
    $f=$_GET['f'];
    $e='Wishes You Happy New Year';
    if ($f==null)
    echo "Enter your name";
    else{
    }
    ?>
    </div>
    </div>
    </h2>
    <div class="container">
    <div class="py-5 text-center">
        <h2><?php echo $f ?> <?php if (!empty($f)) {echo $e;} ?></h2>
        <br><br>
    </div>
    <form action="index.php" method="GET">
        <div class="wish">
    <label for="f">Your Name Here</label>
    <input type="text" name="f" id="f" class="form-control" placeholder="Your Name Here">
    <input type="submit" name="submit" value="submit" class="btn btn-primary">
</form>
</div>
</div>
</body>
</html>