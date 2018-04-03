<?php
$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'ipl_voting'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}

$sql = 'SELECT * FROM votes';
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
?>


<!DOCTYPE html>
<html>
	<head>
		
		
		<style>
		table {
				margin: auto;
				font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
				font-size: 22px;
			}
			table td
			 {
				transition: all .5s;
			}
		
		/* Table */
		#data-table {
			margin-top: -140px;
			//border-collapse: collapse;
			font-size: 18px;
			max-width: 100%;
		}

		#data-table th, 
		#data-table td {
			border: 1px solid black;
			padding: 7px 17px;
			text-align: center;
			text-transform: uppercase;
		}
		/* Table Header */
		#data-table thead th {
			background-color: #508abb;
			color: #FFFFFF;
			border-color: black !important;
			text-transform: uppercase;
		}

		/* Table Body */
		#data-table tbody td {
			color: #353535;
		}
		#data-table tbody td:first-child,
		#data-table tbody td:nth-child(4),
		#data-table tbody td:last-child {
			text-align: center;
		}

		#data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		#data-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
		}
		
	</style>
	<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
					<ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-2779845155398734"     data-ad-slot="8856413607" data-ad-format="auto">
						
					</ins>
			</div>
		</div>
		<div class="row">

			<div class="col-sm-8">

				<table class="table-responsive" id="data-table">
					
					<thead>
						<tr>
							<th>ID</th>
							<th>TEAM NAME</th>
							<th>TOTAL VOTES</th>
							
						</tr>
					</thead>
					<tbody>
						<?php
							while ($row = mysqli_fetch_array($query))
							{
								
								echo '<tr>
										<td>'.$row['id'].'</td>
										<td>'.$row['team_name'].'</td>
										<td>'.$row['votes_count'].'</td>
										<br>
									</tr>';
							}?>
					</tbody>
				</table>
			</div>
			<div class="col-sm-4">
				<div class="test">
					<!-- Sky Scraper Widget ad -->
						<ins class="adsbygoogle"
						     style="display:inline-block;width:300px;height:600px"
						     data-ad-client="ca-pub-2779845155398734"
						     data-ad-slot="2071836800"></ins>
						
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				    
					<ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-2779845155398734"     data-ad-slot="8856413607" data-ad-format="auto">
						
					</ins>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
			<a href="./people-choice-for-winner.php" button type="button" class="btn btn-info">Go Back</button>
			</a></div>
		</div>
	</div>	
	</div>
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<!-- Sky Scraper Widget ad -->

	<script>
	(adsbygoogle = window.adsbygoogle || []).push({});
	</script>
</body>
</html>