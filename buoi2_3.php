<?php 

     if(isset($_POST['nam_duong'])){
         $dl = $_POST['nam_duong'];
         if(is_numeric($dl)){
            $nam = ($dl - 3) % 10;
            switch($nam){
                case 0: 
                    $can = "Qúy";
                break;
                case 1: 
                    $can = "Giáp";
                break;
                case 2: 
                    $can = "Ất";
                break;
                case 3: 
                    $can = "Bính";
                break;
                case 4: 
                    $can = "Đinh";
                break;
                case 5: 
                    $can = "Mậu";
                break;
                case 6: 
                    $can = "Kỳ";
                break;
                case 7: 
                    $can = "Canh";
                break;
                case 8: 
                    $can = "Tân";
                break;
                case 9: 
                    $can = "Nhâm";
                break;
            }
            $nam = ($dl - 3) % 12;
            switch($nam){
                case 0:
                    $chi = "Hợi";
                break;
                case 1:
                    $chi = "Tý";
                break;
                case 2:
                    $chi = "Sửu";
                break;
                case 3:
                    $chi = "Dần";
                break;
                case 4:
                    $chi = "Mẹo";
                break;
                case 5:
                    $chi = "Thìn";
                break;
                case 6:
                    $chi = "Tỵ";
                break;
                case 7:
                    $chi = "Ngọ";
                break;
                case 8:
                    $chi = "Mùi";
                break;
                case 9:
                    $chi = "Thân";
                break;
                case 10:
                    $chi = "Dậu";
                break;
                case 11:
                    $chi = "Tuất";
                break;
            }
            $al = $can ." ". $chi;
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
        <legend>Tính Năm Âm Lịch</legend>
    
        <div class="form-group">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    <label for="">Năm Dương</label>
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <input type="text" name="nam_duong" id="" class="form-control" placeholder="" value="<?php if(isset($_POST["nam_duong"])) echo $dl ?>">
                </div>
        </div>
        <div class="form-group">
        
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    <label for="">Năm Âm</label>
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <input type="text" name="nam_am" id="" class="form-control" placeholder="" value="<?php if(isset($_POST["nam_am"])) echo $al?>">
                </div>
        </div>
       
    
        
    
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
    
    
</body>
</html>