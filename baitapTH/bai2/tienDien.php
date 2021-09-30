<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <style type="text/css">
            .sent{
                background: #27D838;
            }
            .nut{
                width: 80px;
                background: #2DB3F2;
            }
            table{
                color: #D81225;
                width: 500px;
                margin: auto;
                background: #ffca97;
            }
              th{
                  background-color:#27D838;
                  color: brown;
              }  
        </style>
    </head>
    <body>
    <?php 
        if(isset($_POST['chuho']))
        $chuho=trim($_POST['chuho']);
        else $chuho=0;
        if(isset($_POST['csc']))  
        $csc=trim($_POST['csc']); 
        else $csc=0;
        if(isset($_POST['csm'])) 
        $csm=trim($_POST['csm']); 
        else $csm=0;
        if(isset($_POST['dongia'])) 
        $dongia=trim($_POST['dongia']); 
        else $dongia=0;
        if(isset($_POST['tinh']))
        if (is_numeric($csc) && is_numeric($csm) && is_numeric($dongia))  
            $thanhtoan=($csm - $csc)* $dongia;
        else{

                echo "<font color='#F12121'>Vui lòng nhập vào số! </font>";
                $thanhtoan="";
            }
        else $thanhtoan=0;
    ?>
<form  action="" method="post">

<table>
    <thead>
        <th colspan="2" align="center"><h3>THANH TOÁN TIỀN ĐIỆN</h3></th>
    </thead>
    <tr><td>Tên chủ hộ:</td>
        <td><input type="text" name="chuho" value="<?php  echo $chuho;?> "/></td>
    </tr>        
    <tr>
        <td>Chiều dài:</td>
        <td><input type="text" name="csc" value="<?php  echo $csc;?> "/> Kw</td>
    </tr>
    <tr><td>Chiều rộng:</td>
        <td><input type="text" name="csm" value="<?php  echo $csm;?> "/> Kw</td>
    </tr>
    <tr><td>Đơn giá:</td>
        <td><input type="text" name="dongia" value="<?php  echo $dongia;?> "/> VND</td>
    </tr>       
    <tr>
        <td>Số tiền thanh toán:</td>
        <td><input type="text" name="thanhtoan" disabled="disabled" value="<?php  echo $thanhtoan;?> "/> VND</td>
    </tr>
    <tr>
        <td class="sent" colspan="2" align="center"><input class="nut" type="submit" value="Tính" name="tinh" /></td>
    </tr>
</table>
</form>

        <script src="" async defer></script>
    </body>
</html>