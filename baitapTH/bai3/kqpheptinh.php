<!DOCTYPE html>
<html>
    <head>
        <style>
        table{
            width: 500px;
            margin: auto;
            background: #ffca97;
        }
        td{
            padding: 10px;
        }
        .center{
            text-align: center;
            font-weight: bold;
            background: #F2B84E;
            color: #ffffff;
        }
    </style>
    </head>
    <body>
    <?php
            if(isset($_POST['so1']))
                if(is_numeric($_POST['so1']))
                    $so1=(int)$_POST["so1"];
            if(isset($_POST['so2']))
                if(is_numeric($_POST['so2']))
                    $so2=(int)$_POST["so2"];
            
            if(isset($_POST['pheptinh']))
            {
                $pheptinh=trim($_POST['pheptinh']);
                switch($_POST['pheptinh'])
                {
                    case 'Cong': $kq=$so1+$so2; break;
                    case 'Tru': $kq=$so1-$so2; break;
                    case 'Nhan': $kq=$so1*$so2; break;
                    case 'Chia': $kq=$so1/$so2; break;
                }
            }
        ?>
        <form method="get" action="">
            <table>
                <tr class="center">
                    <td colspan="2">
                        PHÉP TÍNH TRÊN 2 SỐ
                    </td>
                </tr>
                <tr>
                    <td>Chọn phép tính: </td>
                    <td><?php echo $pheptinh; ?></td>
                </tr>
                <tr>
                    <td>Số 1: </td>
                    <td><input type="text" name="so1" value="<?php echo $so1; ?>"/></td>
                </tr>
                <tr>
                    <td>Số 2: </td>
                    <td><input type="text" name="so2" value="<?php echo $so2; ?>"/></td>
                </tr>

                <tr>
                    <td>Kết quả: </td>
                    <td><input type="text" name="kq" disabled="disabled" value="<?php echo $kq; ?>"/></td>
                </tr>
            </table>
            <a  href="javascript:window.history.back(-1);">Tro ve trang truoc</a>
        </form>
        <script src="" async defer></script>
    </body>
</html>