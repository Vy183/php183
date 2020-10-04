



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 2</title>
    
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    
</head>
<body>
    
    <div class="container">
        
        <form action="#" method="POST" class="form-horizontal" role="form">
                <div class="form-group">
                    <legend>Định Dạng Màu</legend>
                </div>
                <div class="form-group">
                  <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    <label for="">Nội Dung</label>
                  </div>
                  <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <input type="text" name="noi_dung" id="" class="form-control" placeholder="" value="<?php if(isset($_POST["noi_dung"])) echo $_POST["noi_dung"] ?>">
                  </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                        <label for="">Màu nền</label>
                    </div>
                    <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                        <input type="text" name="mau_nen" id="" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                        <label for="">Màu chữ</label>
                    </div>
                    <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    
                        <input type="text" name="mau_chu" id="" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
                <div style='background: #<?php echo $_POST["mau_nen"];?>; color: #<?php echo $_POST['mau_chu'];?>'>
                    <div style='margin: auto;'>
                        <?php 
                            echo $_POST['noi_dung'];
                        ?>
                    </div>
                </div>
        </form>
        
    </div>
    
    
</body>
</html>