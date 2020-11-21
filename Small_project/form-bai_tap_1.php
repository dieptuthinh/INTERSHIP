<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Tính diện tích HCN</title>
        <link href="home1.css" rel="stylesheet" type="text/css" />
        <?php include ('includes/header.php');?>
    </head>

    <body>
        <?php
        //Hàm trim() sẽ loại bỏ khoẳng trắng( hoặc bất kì kí tự nào được cung cấp) dư thừa ở đầu và cuối chuỗi.trim( $str, $char); 
            if(isset($_POST['chieudai']) and isset($_POST['chieurong']))
            {
                $chieudai=trim($_POST['chieudai']);
                $chieurong=trim($_POST['chieurong']);
            }   
            else
            {
                $chieudai=0;
                $chieurong=0;
            } 
            if(isset($_POST['tinh']))
                if (is_numeric($chieudai) and is_numeric($chieurong))
                    $dientich=$chieudai * $chieurong;
                else {
                    echo "<font color='red'>Vui lòng nhập vào số! </font>";
                    $dientich="";
                }
            else $dientich=0;
        ?>
        <form class="content" align='center' action="form-bai_tap_1.php" method="post">
            <table border="0" style="font-size: 30px; border: 1px solid black;">
                <tr bgcolor="yellow">
                    <th colspan="2" align="center"><h3><font color="red">DIỆN TÍCH HÌNH CHỮ NHẬT</font></h3></th>
                </tr>
                <tr>
                    <td>Chiều dài:</td>
                    <td><input type="text" name="chieudai" value="<?php echo $chieudai;?>"/></td>
                </tr>
                <tr>
                    <td>Chiều rộng:</td>
                    <td><input type="text" name="chieurong" value="<?php echo $chieurong;?>"/></td>
                </tr>
                <tr>
                    <td>Diện tích:</td>
                    <td><input type="text" name="dientich" disabled="disabled" value="<?php echo number_format($dientich, 2, ',', ' ');?> "/></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><button style="background-color: red;"><input type="submit" value="Tính" name="tinh" /></button></td>
                </tr>
            </table>
        </form>
    </body>
    <?php include ('includes/footer.html');?>
</html>