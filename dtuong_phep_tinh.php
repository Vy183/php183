
<?php
    include('./bai1_dtuong.php');
    $phep_tinh_1 = New phep_tinh(10, 5);
    echo '<pre>',print_r($phep_tinh_1),'</pre>';
    //echo $phep_tinh_1->tinh_tong();
    //echo $phep_tinh_1->tinh_hieu();
    //echo $phep_tinh_1->tinh_tich();
    echo $phep_tinh_1->tinh_chia();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>

    
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    
</head>
<body>
    
    
    <div class="container">
        <form action="#" method="POST" role="form">
            <legend>Form title</legend>
        
            <div class="form-group">
                <label for="">So thu 1</label>
                <input type="number" class="form-control" id="" placeholder="Input field" name='so_thu_nhat'>
            </div>
            <div class="form-group">
                <label for="">So thu 2</label>
                <input type="number" class="form-control" id="" placeholder="Input field" name='so_thu_hai'>
            </div>
        

            
            <div class="radio">
                <div class="col-xs-2"></div>
                <div class="col-xs-2">
                    <label>
                        <input type="radio" name="phep_tinh" id="input" value="" checked="checked">
                        Tổng
                    </label>
                </div>
                
                <div class="col-xs-2">
                    <label>
                        <input type="radio" name="phep_tinh" id="input" value="" >
                        Hiệu
                    </label>
                </div>
                <div class="col-xs-2">
                    <label>
                        <input type="radio" name="phep_tinh" id="input" value="" >
                        Tích
                    </label>
                </div>
                <div class="col-xs-2">
                    <label>
                        <input type="radio" name="phep_tinh" id="input" value="" >
                        Chia
                    </label>
                </div>
                <div class="col-xs-2"><button type="submit" class="btn btn-primary">Submit</button></div>
            </div>
            
        </form>
        

    </div>
    
    
</body>
</html>