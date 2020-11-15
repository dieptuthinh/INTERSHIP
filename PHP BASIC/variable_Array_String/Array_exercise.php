<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Bai tap 1</title>
        <style>
            body {
                    width: 100vw;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    flex-direction: column;
                    font-size: 20px;
                }

                input {
                    height: 40px;
                    font-size: 2rem;
                }

                input[type="number"] {
                    width: 100%;
                }

                input:disabled {
                    background-color: aquamarine;
                }

                table {
                    background-color: var(--color-table);
                }

                input[type="radio"],
                input[type="checkbox"] {
                    width: 26px;
                }
        </style>
    </head>

    <body>
        <?php
            if(isset($_POST['nnum']))
                $nnum = trim($_POST['nnum']);
            else $nnum = 1;

            if (isset($nnum)) {
                $mang;
                $sl_so_chan = 0;
                $sl_nho_100 = 0;
                $sl_so_am = 0;
                $tong_am = 0;
                $vitri_0 = [];
                for ($i = 0; $i < $nnum; $i ++) {
                    $num = rand(-10, 10);
                    $mang[] = $num;
                    if (!($num % 2)) $sl_so_chan++;
                    if ($num < 100) $sl_nho_100++;
                    if ($num < 0) {
                        $sl_so_am++;
                        $tong_am += $num;
                    }
                    if (!$num) $vitri_0[] = $i;
                }
            }
        ?>
        <form id="mang_va_chuoi-bai_tap_1" align='center' action="" method="POST">
            <table border="1" style="font-size: 40px; border: 1px solid black">
                <tr>
                    <h2><font color="red">BÀI TẬP 1</font></h2>
                </tr>
                <tr>
                    <td>Nhập vào 1 số tự nhiên n: </td>
                    <td>
                        <input
                            type="number"
                            name="nnum"
                            size="20"
                            value="<?php
                                if(isset($_POST['nnum']))
                                    echo $_POST['nnum'];
                            ?>"
                        />
                        <input type="submit" value="Tính"/>
                    </td>
                </tr>
                <tr>
                    <td>a) Hiển thị mảng: </td>
                    <td>
                        <?php
                            print_r($mang);
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>b) Số lượng phần tử giá trị chẵn: </td>
                    <td>
                        <?php
                            print_r($sl_so_chan);
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>c) Số lượng phần tử giá trị nhỏ hơn 100: </td>
                    <td>
                        <?php
                            print_r($sl_nho_100);
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>d) Tổng các giá trị âm: </td>
                    <td>
                        <?php
                            print_r($tong_am);
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>d) Vị trí các phần tử bằng 0: </td>
                    <td>
                        <?php
                            print_r(join(", ", $vitri_0));
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>d) Sắp xếp theo thứ tự tăng dần: </td>
                    <td>
                        <?php
                            sort($mang);
                            print_r($mang);
                        ?>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>