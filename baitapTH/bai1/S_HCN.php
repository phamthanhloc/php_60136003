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
        input{
            width: 300px;
        }
        button{
            background: #34a853;
            border: none;
            padding: 10px 20px;
            font-weight: bold;
        }
        button:hover{
            cursor: pointer;
        }
    </style>
</head>
<body>
<?php
    ini_set('display_errors',0);
    $chieuDai = $_POST['chieuDai'];
    $chieuRong= $_POST['chieuRong'];
    $Dientich = $chieuDai*$chieuRong;
?>
    <form action="" method="post">
        <table>
            <tr class="center">
                <td colspan="2">
                    DIỆN TÍCH HÌNH CHỮ NHẬT
                </td>
            </tr>
            <tr>
                <td>
                    Chều dài:
                </td>
                <td>
                    <input type="text" name="chieuDai" value="<?php echo $chieuDai ?>">
                </td>
            </tr>
            <tr>
                <td>
                    Chều rộng:
                </td>
                <td>
                    <input type="text" name="chieuRong" value="<?php echo $chieuRong ?>">
                </td>
            </tr>
            <tr>
                <td>
                    Diện tích
                </td>
                <td>
                    <input type="text" name="Dientich" value="<?php echo $Dientich ?>">
                </td>
            </tr>
            <tr class="center">
                <td colspan="2">
                    <button type="submit">TÍNH</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>