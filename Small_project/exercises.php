<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .exe_content{
            background-color: #fff;
            width: 90%;
            height: 500px;
            /* margin-left: 80px; */
            box-sizing: border-box;
            overflow: hidden;
            display: flex;
            justify-content: space-between;
        }
        .block{
            width: 300px;
            height: 80px;
            margin: 12px;
            background-color: azure;
            overflow: hidden;
            align-items: center;
            color: black;
        }
    </style>
</head>
<body>
<?php include('includes/header.php') ?>
    <section class="content">
            <div class="exe_content">
                <div class="block">
                    <h1>PHP và Form</h1>
                </div>
                <div class="block">
                    <h1>Mảng và chuỗi</h1>
                </div>
                <div class="block">
                    <h1>OOP</h1>
                </div>
                <div class="block">
                    <h1>PHP và MySQL</h1>
                </div>
            </div>
     </section>
     
<?php include('includes/footer.html');?>
</body>
</html>