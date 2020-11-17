<?php 
//session_start();

//if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
//}else{
//    header("Location: login.php");
//     exit();
//}
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>
<body>
<?php include ('includes/header.php'); ?>

     <section class="content">
          <div class="container">
               <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
               <p>Wellcome</p>
          </div>
     </section>

<?php include('includes/footer.html');?>
</body>
</html>