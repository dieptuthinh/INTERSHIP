<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            width: 100vw;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
    </style>
</head>
<body>
<?php
    if(isset($_POST['txthoten'],$_POST['txtdiachi'],$_POST['txtsdt'],$_POST['comments']))
        {
            $hoten= $_POST['txthoten'];
            $diachi= $_POST['txtdiachi'];
            $comments= $_POST['comments'];
            if(is_numeric($_POST['txtsdt']))
            {
                $sdt= $_POST['txtsdt'];
            }
            else{
                $sdt = 'Nhập sai';
            }
        }
   
?>

<form action="" method="post">
    <table border="1" style=" border: 1px solid black">
        <tr>
            <td colspan="2">
                <h3>Bạn đã đăng nhập thành công, dưới đây là những thông tin bạn nhập:</h3>
            </td>
        </tr>
        <tr>
            <td>
                Họ tên:
            </td>
            <td>
                <?php echo $hoten ?>
            </td>
        </tr>
        <tr>
            <td>
                Giới tính: 
            </td>
            <td>
                <?php if(isset($_POST['gioitinh'])&&$_POST['gioitinh']=='Nam') 
                                 echo 'Nam';
                                else echo'Nữ'; ?> 
            </td>
        </tr>
        <tr>
            <td>
                Địa chỉ: 
            </td>
            <td>
                <?php echo $diachi ?>
            </td>
        </tr>
        <tr>
            <td>
                Điện thoại:
            </td>
            <td>
                <?php echo $sdt ?>
            </td>
        </tr>
        <tr>
            <td>
                Quốc tịch
            </td>
            <td>
                <?php if(isset($_POST['qt']) && $_POST['qt']=='vn') 
                            echo 'Việt Nam';
                        elseif(isset($_POST['qt'])&&$_POST['qt']=='cn') 
                            echo 'Trung Quốc';
                        else {
                            echo 'Hàn Quốc';}?> 
            </td>
        </tr>
        <tr>
            <td>
                Môn học: 
            </td>
            <td>
                <?php if(isset($_POST['monhoc'])) 
                        foreach($_POST['monhoc'] as $monhoc)
                            {
                                echo $monhoc. "\n";
                            }
                    
                        else {
                            echo 'Bạn chưa học môn nào ! ';}?> 
            </td>
        </tr>
        <tr>
            <td>
                Ghi chú:
            </td>
            <td>
                <?php echo $comments ?>
            </td>
        </tr>
    </table>
</form>

</body>
</html>