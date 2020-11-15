<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #form
        {
            width: 100vw;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            font-size: 20px;
            overflow-x: hidden;
        }
    </style>
</head>
<body>
<?php
    if(isset($_POST['x']) and isset($_POST['y'])){
        $x = trim($_POST['x']);
        $y = trim($_POST['y']);
    }
    else{
        $x = 0;
        $y = 0;
    }
    if(isset($_POST['Tinh'])){
        if (is_numeric($x) and is_numeric($y))
        {
            $dientich = $x*$y;
        }
        else {
            echo "<font color='red'>Vui lòng nhập vào số! </font>";
            $dientich="";
        }
    }
    else $dientich=0;

?>

<form align='center' id="form" action="" method="POST">
            <table border="1" style="font-size: 25px; border: 1px solid black">
                <tr>
                    <h2><font color="red">variable exercises - Tính chiều dài hình chữ nhật</font></h2>
                </tr>
                <tr>
                    <td>Nhập chiều dài: </td>
                    <td>
                        <input
                            type="text"
                            name="x"
                            value="<?php echo $x; ?>"
                        />
                    </td>
                </tr>
                <tr>
                    <td>Nhập chiều rộng: </td>
                    <td>
                        <input
                            type="text"
                            name="y"
                            value="<?php echo $y; ?>"
                        />
                    </td>
                </tr>
                <tr>
                    <td>Diện tích:</td>
                    <td><input type="text" disabled name="dientich" value="<?php echo number_format($dientich, 2, ',', ' ');?> "/></td>
                </tr>
                <tr>
                    <td colspan="2">
                    <input type="submit" value="Tính" name="Tinh" />
                    </td>
                </tr>
               
            </table>
        </form>
</body>
</html>