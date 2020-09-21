<?php
    if(isset($_POST['chieudai']) && isset($_POST['chieurong'])){
        $dientich = ($_POST['chieudai']) * ($_POST['chieurong']);
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Bài 1</title>
    
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    
</head>
<body>
    
    
    <div class="container">
    <form action="" method="POST" role="form">
        <legend>Form title</legend>
    
        <div class="form-group">
            <label for="">Chiều Dài</label>
            <input type="number" name='chieudai' class="form-control" id="" value="<?php echo $_POST['chieudai']?>">
        </div>
        <div class="form-group">
            <label for="">Chiều Rộng</label>
            <input type="number" name='chieurong' class="form-control" id=""  value="<?php echo $_POST['chieurong']?>">
        </div>
        <div class="form-group">
            <label for="">Diện Tích</label>
            <input type="number" name='dtich' class="form-control" id="" value='<?php echo $dientich ?>'>
        </div>
        
    
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
    
    
</body>
</html>