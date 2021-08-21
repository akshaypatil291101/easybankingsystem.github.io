<!DOCTYPE html>
<html>
<head>
	<title>Customers Data</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="stylesheet" type = "text/css" href="css/navbar.php">


        <style>
        	
			@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap');

			h5{
        		font-family: Montserrat, sans-serif;
				font-size: 40px;
        		padding: 22px;
        		color: black;
        		text-align: center;
				margin-top: 10px;
				margin-bottom: -7px;
		
        	}
        	table{
        		border-collapse: collapse;
        		/* background-color: lavender; */
        		margin: auto;
				margin-bottom: 50px;
				margin-top: 30px;
        	}
            
        	th,td{
        		border-bottom: 0.5px solid black;
        		padding: 12px 12px;
        		text-align: center;
        		color: black;
				font-weight: 30px;
				font-family: Montserrat, sans-serif;
        	}
        	th{
        		text-transform: uppercase;
        		font-size: 22px;
				background-color:  #b7f1ff;
				font-family: Montserrat, sans-serif;
        	}
        	td{
        		font-size: 27px;
				font-family: Montserrat, sans-serif;
        	}

			tr:hover{
            background-color: #f5f5f5;
            transform: scale(1.02);
            box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
        	}
            
            .data:hover{
                background-color: #f5f5f5;
                color: black;
            }

        	.fa{
        		font-size: 24px;
        	}
        	body{
				background-color: rgba(246, 254, 255,1);
			}
        </style>
</head>
<body>
<?php include 'navbar.php';?>

<div class="main-div">
	
	<div class="heading">
	<h5>CUSTOMERS</h5>
	</div>
	
	<div class="center-div">
		<div class="table-responsive">
			<table>
				<thead>
					<tr>
						<th>Id</th>
						<th>Name</th>
						<th>EMail</th>
						<th>Balance</th>
						<th>Transfer</th>
					</tr>
				</thead>
				<tbody>

					<?php

                       include 'connection.php';

                       $selectquery = "select * from user";

                       $query = mysqli_query($con, $selectquery);

                       $nums = mysqli_num_rows($query);

                       while($res =  mysqli_fetch_assoc($query)){
                      ?>

                       <tr class="data">
                        <td><?php echo $res['id']; ?> </td>
                        <td><?php echo $res['name']; ?></td>
                        <td><?php echo $res['email']; ?></td>
                        <td><?php echo $res['balance']; ?></td>
                        <td><a href="transaction.php?id=<?php echo $res['id']; ?>"><i class="fa fa-share-square" aria-hidden="true"></i></a></td>
                       </tr>
                     
                     <?php

                       }

                    ?>
			    </tbody>
			</table>
		</div>
	</div>
</div>
 <?php include 'footer.php' ?>

</body>
</html>