<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
        input {
            display: block;
            border: 2px solid #ccc;
            width: 95%;
            /* padding: 10px;
            margin: 10px auto; */
            border-radius: 5px;
        }

        label {
            color: #888;
            font-size: 18px;
            padding: 5px;
            float: left;
        }

        button {
            float: right;
            background: #555;
            /* padding: 2px 5px; */
            color: #fff;
            border-radius: 5px;
            margin-right: 5px;
            border: none;
        }

        button:hover {
            opacity: .7;
        }
        form {
            width: 500px;
            border: 2px solid #ccc;
            padding: 20px;
            background: #fff;
            border-radius: 15px;
            margin-bottom: 500px;
        }

        .error {
            background: #F2DEDE;
            color: #A94442;
            padding: 10px;
            width: 95%;
            border-radius: 5px;
            margin: 10px auto;
        }

        .success {
            background: #D4EDDA;
            color: #40754C;
            padding: 10px;
            width: 95%;
            border-radius: 5px;
            margin: 10px auto;
        }
    </style>
</head>
<body>
<?php
    include ('db_conn.php'); // Connect to the db.
?>
<?php include('includes/header.php') ?>
    <section class="content">
        <div class="exe_content">
        <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>
            <form action="changePass_check.php" method="post">
            <h2>Change password</h2>
                <label>User name: </label>
                    <input type="text" name="user_name" placeholder="user name">

                <label>Current Password</label>
                    <input type="password" 
                    name="oldPass" 
                    placeholder="Current Password"><br>

                <label>New Password</label>
                    <input type="password" 
                    name="newPass" 
                    placeholder="New Password"><br>

                <label>Confirm Password</label>
                    <input type="password" 
                    name="checkPass" 
                    placeholder="Confirm Password"><br>

            <button type="submit" name="submit" class="btn btn-default">Submit</button>
                            
            </form>
        </div>
     </section>
     
<?php include('includes/footer.html');?>
</body>
</html>