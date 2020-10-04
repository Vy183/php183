

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
                <input type="number" class="form-control" id="" placeholder="Input field" name='so_thu_nhat'  value="<?php if(isset($_POST['so_thu_nhat'])) echo $_POST['so_thu_nhat']?>">
            </div>
            <div class="form-group">
                <label for="">So thu 2</label>
                <input type="number" class="form-control" id="" placeholder="Input field" name='so_thu_hai' value="<?php if(isset($_POST['so_thu_hai'])) echo $_POST['so_thu_hai']?>">
            </div>
        

            
            <div class="radio">
                <div class="col-xs-2"></div>
                <div class="col-xs-2">
                    <label>
                        <input type="radio" name="phep_tinh" id="input" value="tong" <?php if($_POST['phep_tinh'] == 'tong') echo 'checked'; ?>>
                        Tổng
                    </label>
                </div>
                
                <div class="col-xs-2">
                    <label>
                        <input type="radio" name="phep_tinh" id="input" value="hieu"  <?php if($_POST['phep_tinh'] == 'hieu') echo 'checked'; ?>>
                        Hiệu
                    </label>
                </div>
                <div class="col-xs-2">
                    <label>
                        <input type="radio" name="phep_tinh" id="input" value="tich" <?php if($_POST['phep_tinh'] == 'tich') echo 'checked'; ?>>
                        Tích
                    </label>
                </div>
                <div class="col-xs-2">
                    <label>
                        <input type="radio" name="phep_tinh" id="input" value="thuong" <?php if($_POST['phep_tinh'] == 'thuong') echo 'checked'; ?>>
                        Thương
                    </label>
                </div>
                <div class="col-xs-2"><button type="submit" class="btn btn-primary">Submit</button></div>
            </div>
            
        </form>
        <legend>KẾT QUẢ</legend>
        <?php
            include('./bai1_dtuong.php');
            if(isset($_POST['so_thu_nhat']) && isset($_POST['so_thu_hai'])){
                $tinh = New phep_tinh($_POST['so_thu_nhat'], $_POST['so_thu_hai']);

                $string=$tinh->num1().' '.$_POST['phep_tinh'].' '.$tinh->num2()." = ";
                        
                        switch ($_POST['phep_tinh']){
                            case "tong": 
                                echo $string.$tinh->tinh_tong();
                            break;
                            case "hieu":
                                echo $string.$tinh->tinh_hieu();
                            break;
                            case "tich":
                                echo $string.$tinh->tinh_tich();
                            break;
                            case "thuong":
                                if($_POST['so_thu_hai']!=0){
                                    echo $string.$tinh->tinh_chia();
                                }
                                else {
                                    echo "Không tính được thương, số thứ hai PHẢI KHÁC 0";
                                }
                            break;
                                        
                        }
                }
    
   
    
        ?>

    </div>

    
    
    
</body>
</html>