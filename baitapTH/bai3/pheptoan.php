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
            padding: 5px;
        }
        .center{
            text-align: center;
            font-weight: bold;
            background: #F2B84E;
            color: #ffffff;
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

        <form method="post" action="kqpheptinh.php">
            <table>
                <tr class="center">
                    <td colspan="2">
                        PHÉP TÍNH TRÊN 2 SỐ
                    </td>
                </tr>
                <tr>
                    <td>Chọn phép tính:</td>
                    <td>
                        <input type="radio" name="pheptinh" id="cong" value="Cong" />
                            <label for="cong">Cộng</label>
                        <input type="radio" name="pheptinh" id="tru" value="Tru" />
                            <label for="tru">Trừ</label>
                        <input type="radio" name="pheptinh" id="nhan" value="Nhan" />
                            <label for="cong">Nhân</label>
                        <input type="radio" name="pheptinh" id="chia" value="Chia" />
                            <label for="tru">Chia</label>
                    </td>
                </tr>
                <tr>
                    <td>Số 1: </td>
                    <td><input type="text" name="so1" value=""/></td>
                </tr>
                <tr>
                    <td>Số 2: </td>
                    <td><input type="text" name="so2" value=""/></td>
                </tr>
               <tr class="center">
                    <td colspan="2">
                        <button type="submit">TÍNH</button>
                    </td>
                </tr>
            </table>
        
        </form>
        <script src="" async defer></script>
    </body>
</html>