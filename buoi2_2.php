<?php 

     if(isset($_POST["nhap_ho_ten"])){
        $hoten = $_POST["nhap_ho_ten"];

        $mang_ho_ten = explode(" ", $hoten);

        $so_phan_tu = count($mang_ho_ten);
        $ho = $mang_ho_ten[0];
        $ten = $mang_ho_ten[$so_phan_tu - 1];

        $ho_dem ="";
        for( $i = 1 ; $i < $so_phan_tu -1; $i++){
            $ho_dem = $ho_dem . $mang_ho_ten[$i] . " ";
        }
     }

    
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tách Tên</title>
    
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
                    <label for="">Họ và Tên</label>
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <input type="text" name="nhap_ho_ten" id="" class="form-control" placeholder="" value="<?php if(isset($_POST["nhap_ho_ten"])) echo $_POST['nhap_ho_ten'] ?>">
                </div>
        </div>
        <div class="form-group">
        
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    <label for="">Họ</label>
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <input type="text" name="ho" id="" class="form-control" placeholder="" value="<?php if(isset($_POST["ho"]))  echo $ho?>">
                </div>
        </div>
        <div class="form-group">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    <label for="">Tên Đệm</label>
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <input type="text" name="ten_dem" id="" class="form-control" placeholder="" value="<?php  if(isset($_POST["ten_dem"])) echo $ho_dem?>">
                </div>
        </div>
        <div class="form-group">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    <label for="">Tên</label>
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <input type="text" name="ten" id="" class="form-control" placeholder="" value="<?php if(isset($_POST["ten"])) echo $ten?>">
                </div>
        </div>
    
        
    
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
    
    
</body>
</html>