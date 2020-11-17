<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>
<!DOCTYPE html>
<html>
<head>
     <title>HOME</title>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- <link rel="stylesheet" type="text/css" href="../INTERSHIP/Small_project/includes/style.css"> -->
</head>
<body>
<?php include ('includes/header.html'); ?>
     <div class="content">
          <div class="container">
               <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
               <a href="logout.php">Logout</a>
          </div>
     </div>
<?php 
}else{
     header("Location: login.php");
     exit();
}
 ?>
 <?php include ('includes/footer.html'); ?>
</body>
</html>
