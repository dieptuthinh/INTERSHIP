<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include('includes/header.php') ?>
    <section class="content">
          <div class="container">
               <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
               <h2>Thông tin sinh viên</h2>
               <p>Họ và tên: Diệp Tư Thịnh</p>
               <p>MSSV: 59122312</p>
               <p>Lớp: 59CNTT2</p>
          </div>
     </section>
     
<?php include('includes/footer.html');?>
</body>
</html>