<?php
    if(isset($_POST['nsptu']))
    {
        $sopt = $_POST['nsptu'];
        $mang = tao_mang($sopt);
        $mangkq = xuat_mang($mang);
        $tongm = tinh_tong($mang);
        $max = tim_max($mang);
        $min = tim_min($mang);
    }

    function tao_mang($sopt)
    {
        for($i=0;$i<$sopt;$i++)
        $mang[$i] = rand(0,20);
        return $mang;
    }

    function xuat_mang($mang)
    {
        $sopt = count($mang);
        $chuoi = "";
        for($i=0;$i<$sopt;$i++)
        $chuoi = $chuoi . $mang[$i] . ',';
        return $chuoi;
    }

    function tinh_tong($mang)
    {
        $sopt = count($mang);
        $tongm = 0;
        for($i=0;$i<$sopt;$i++)
        $tongm = $tongm + $mang[$i];
        return $tongm;
    }

    function tim_max($mang)
    {
        $sopt = count($mang);
        $max = $mang[0];
        for($i=0;$i<$sopt;$i++)
        {
        if($max < $mang[$i])
        $max = $mang[$i];
        }
        return $max;
    }

    function tim_min($mang)
    {
        $sopt = count($mang);
        $min = $mang[0];
        for($i=0;$i<$sopt;$i++)
        {
        if($min > $mang[$i])
        $min = $mang[$i];
        }
        return $min;
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phát Sinh Mảng</title>
    
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    
</head>
<body>
    
    
    <div class="container">
        <form action="#" method="POST" role="form" class="form-horizontal">
        
        <legend>Phát Sinh Mảng</legend>

        <div class="form-group">
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                <label for="">Nhập số phần tử</label>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                <input type="text" class="form-control" id="" placeholder="" name='nsptu' value='<?php echo $_POST['nsptu']; ?>'>
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                <label for=""></label>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                <label for="">Mảng</label>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                <input type="text" class="form-control" id="" placeholder="" name='nhapmang' value='<?php echo $mangkq; ?>'>
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                <label for="">Max</label>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                <input type="text" class="form-control" id="" placeholder="" name='max' value='<?php echo  $max; ?>'>
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                <label for="">Min</label>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                <input type="text" class="form-control" id="" placeholder="" name='min' value='<?php echo  $min; ?>'>
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                <label for="">Tổng Mảng</label>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                <input type="text" class="form-control" id="" placeholder="" name='tongmang' value='<?php echo  $tongm; ?>'>
            </div>
        </div>

        

        
    </form>
    </div>
    
    
</body>
</html>