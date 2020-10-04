<?php

    $tong_so = 0;

    $mang_so = 0;

    if(isset($_POST['btn_goi'])){

        $mang_so = explode(",", $_POST['nhap_so']);

        $n = count($mang_so);

        for($i = 0; $i <= $n; $i++){

            //$tong_so += $mang_so[$i];
            $tong_so = array_sum($mang_so);

        }

    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhập Số</title>
    
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    
</head>
<body>
    
    <div class="container">
        
        <form action="#" method="POST" role="form" class="form-horizontal">
            <legend>Form title</legend>
        
            <div class="form-group">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    <label for="">Nhập Số</label>
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <input type="text" name="nhap_so" id="" class="form-control" placeholder="" value="<?php if(isset($_POST["nhap_so"])) echo $_POST['nhap_so'] ?>">
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    <label for="">Tổng</label>
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <input type="text" name="tong_so" id="" class="form-control" placeholder="" disabled value='<?php echo $tong_so?>'>
                </div>
            </div>
        
            
        
            <button type="submit" class="btn btn-primary" name='btn_goi'>Submit</button>
        </form>
        
    </div>
    
</body>
</html>