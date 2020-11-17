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
            justify-content: center;
        }
		table{
			margin-top: 40px;
			border-collapse: collapse;
			width: 50%;
			color: #588c7e;
			font-family: monospace;
			font-size: 25px;
			text-align: left;
		}
		th{
			background-color: #588c7e;
			color: white;
		}
		tr:nth-child(even)
		{
			background-color: #f2f2f2;
		}
	</style>
</head>
<body>
<?php include ('includes/header.php'); ?>

	<div class="content">
		<div class="exe_content">
			<table>
				<tr>
					<th>ID </th>
					<th>Username </th>
					<th>Password </th>
				</tr>
			<?php
			// Tập lệnh này truy xuất tất cả các bản ghi từ bảng người dùng.
			// This new version allows the results to be sorted in different ways.
			include('db_conn.php');
			$sql = "SELECT id,user_name,password,name from users";
			$result = $conn-> query($sql);

			
			if ($result-> num_rows >0 ) {
				while($row = $result-> fetch_assoc())
				{
					echo"<tr>
							<td>".$row["id"]."</td>
							<td>". $row["user_name"]."</td>
							<td>".$row["password"]."</td>
						</tr>";
				}
				echo"</table>";
			}
			else{
				echo"0 result";
			}
			$conn ->close();
			?>
			</table>
		</div>

	</div>
<?php include ('includes/footer.html');?>
</body>
</html>