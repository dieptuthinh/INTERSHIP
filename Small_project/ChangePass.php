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
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            require ('db_conn.php'); // Connect to the db.
        }
        
        ?>
     </section>
     
<?php include('includes/footer.html');?>
</body>
</html>