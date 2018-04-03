
<?php
	//include('connect.php');
	if(isset($_POST['submit']))
	{
			$mysqli = new mysqli("localhost", "root", "", "ipl_voting");
			
		if(isset($_POST['srh']))
		{
			$result = $mysqli->query("SELECT * from votes where team_name='srh' ");
			$row = $result->fetch_assoc();
			$num=$row['votes_count']+1;
			//echo "Num=$num";
			//echo htmlentities($row['votes_count']);
			if ($mysqli->query("UPDATE votes SET votes_count=$num WHERE team_name='srh'") === TRUE)
			 {
			    echo "Record updated successfully";
			}
			else
			 {
			    echo "Error updating record: " ;
			}
		}		
		else if(isset($_POST['dd']))
		{
			$result = $mysqli->query("SELECT * from votes where team_name='dd' ");
			$row = $result->fetch_assoc();
			$num=$row['votes_count']+1;
			if ($mysqli->query("UPDATE votes SET votes_count=$num WHERE team_name='dd'") === TRUE)
			 {
			    echo "You have voted for DD";
			}
			else
			 {
			    echo "Error updating record: " ;
			}
			
		}
		else if(isset($_POST['csk']))
		{
			$result = $mysqli->query("SELECT * from votes where team_name='csk' ");
			$row = $result->fetch_assoc();
			$num=$row['votes_count']+1;
			if ($mysqli->query("UPDATE votes SET votes_count=$num WHERE team_name='csk'") === TRUE)
			 {
			    echo "You have voted for CSK";
			}
			else
			 {
			    echo "Error updating record: " ;
			}
			
		}
		else if(isset($_POST['mi']))
		{
			$result = $mysqli->query("SELECT * from votes where team_name='mi' ");
			$row = $result->fetch_assoc();
			$num=$row['votes_count']+1;
			if ($mysqli->query("UPDATE votes SET votes_count=$num WHERE team_name='mi'") === TRUE)
			 {
			    echo "You have voted for MI";
			}
			else
			 {
			    echo "Error updating record: " ;
			}
			
		}
		else if(isset($_POST['kkr']))
		{
			$result = $mysqli->query("SELECT * from votes where team_name='kkr' ");
			$row = $result->fetch_assoc();
			$num=$row['votes_count']+1;
			if ($mysqli->query("UPDATE votes SET votes_count=$num WHERE team_name='kkr'") === TRUE)
			 {
			    echo "You have voted for KKR";
			}
			else
			 {
			    echo "Error updating record: " ;
			}
			
		}
		else if(isset($_POST['kxip']))
		{
			$result = $mysqli->query("SELECT * from votes where team_name='kxip' ");
			$row = $result->fetch_assoc();
			$num=$row['votes_count']+1;
			if ($mysqli->query("UPDATE votes SET votes_count=$num WHERE team_name='kxip'") === TRUE)
			 {
			    echo "You have voted for KXIP";
			}
			else
			 {
			    echo "Error updating record: " ;
			}
			
		}
		else if(isset($_POST['rr']))
		{
			$result = $mysqli->query("SELECT * from votes where team_name='rr' ");
			$row = $result->fetch_assoc();
			$num=$row['votes_count']+1;
			if ($mysqli->query("UPDATE votes SET votes_count=$num WHERE team_name='rr'") === TRUE)
			 {
			    echo "You have voted for RR";
			}
			else
			 {
			    echo "Error updating record: " ;
			}
			
		}
		else if(isset($_POST['rcb']))
		{
			$result = $mysqli->query("SELECT * from votes where team_name='rcb' ");
			$row = $result->fetch_assoc();
			$num=$row['votes_count']+1;
			if ($mysqli->query("UPDATE votes SET votes_count=$num WHERE team_name='rcb'") === TRUE)
			 {
			    echo "You have voted for RCB";
			}
			else
			 {
			    echo "Error updating record: " ;
			}
			
		}
		else
			echo "No value selected";
	}
	
?>


<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebSite">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php $current_page = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		 echo '<link rel="canonical" href="'.$current_page.'" itemprop="url"/>'; ?>


		<!-- Edit the Meta Tags Add your Own Meta Contents  -->
		<!-- Seo Meta Tags -->
		<title>People choice as a winner for IPL 2018.</title>
		<meta name="description" content="People choice as a winner for IPL 2018. Supoort your favourite IPL 2018 team. Vote for your favourite team and make your team voting winner"/>
		<meta name="robots" content="index,follow">
		<!--<link href='YOUR FAVICON URL' rel='icon' type='image/x-icon'/>  -->
		<!--
		 Twitter Card data 
		<meta name="twitter:card" content="summary">
		<meta name="twitter:title" content="People choice as a winner for IPL 2018." />
		<meta name="twitter:description" content="People choice as a winner for IPL 2018. Supoort your favourite IPL 2018 team." />
		<meta name="twitter:image" content="THUMBNAIL IMAGE FOR TWITTER SHARE" />
		<meta name="twitter:site" content="@yourtwitterusername" />
		<meta name="twitter:creator" content="@yourtwitterusername" />
			-->
		<!-- Facebook Open Graph data -->
		<meta property="og:title" content="People choice as a winner for IPL 2018." />
		<meta property="og:image:type" content="image/png">
		<meta property="og:url" content="http://subhwishes.com/ipl-2018/people-choice-for-winner.php" />
		<meta property="og:image" content="http://subhwishes.com/ipl-2018/images/ipl.png" />
		<meta property="og:description" content="People choice as a winner for IPL 2018. Supoort your favourite IPL 2018 team. Vote for your favourite team and make your team IPL 2018 voting winner" /> 
		<meta property="og:site_name" content="Subhwishes" />
		<meta property="fb:app_id" content="APP ID" />
		<meta property="og:image:width" content="700">
		<meta property="og:image:height" content="415">
		<meta property="og:image" content="http://subhwishes.com/ipl-2018/images/ipl.png" />
		<!-- Google+ Meta Tags. -->
		<meta itemprop="name" content="People choice as a winner for IPL 2018.">
		<meta itemprop="description" content="People choice as a winner for IPL 2018. Supoort your favourite IPL 2018 team.">
		<meta itemprop="image" content="THUMBNAIL IMAGE FOR GOOGLE+ SHARE">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
		<script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5ac227411fff98001395ab55&product=custom-share-buttons' async='async'></script>
		
		
	</head>
		<body>
			<div class="container-fluid">
				<div class="container">
					<!--google ads-->
					<div class="row">
						<div class="col-sm-12">
								<ins class="adsbygoogle"
								     style="display:inline-block;width:200px;height:90px"
								     data-ad-client="ca-pub-2779845155398734"
								     data-ad-slot="9914344404"></ins>
						</div>
					</div>
					<!--end of google ads-->
					<div class="row">
						<div class="col-sm-8">
							<div class="text-center">
								<h3>Vote for the team whom you want to be winnner of IPL 2018.</h3>
							</div>
							<form action="./people-choice-for-winner.php" method="POST">
							<div class="table-responsive">          
							  <table class="table">
							    <tbody>
							      <tr>
							      	<td><input type="radio" name="dd"></td>
							      	<td><img src="./images/dd.png"></td>
							      	<td>DD</td>
							      								      	
							      </tr>
							      <tr>
							      	<td><input type="radio" name="csk"></td>
							      	<td><img src="./images/csk.png"></td>
							      	<td>CSK</td>
							      	
							      	
							      </tr>
							      <tr>
							      		<td><input type="radio" name="mi"></td>
							      	<td><img src="./images/mi.png"></td>
							      	<td>MI</td>
							      								      	
							      </tr>
							      <tr>
							      	<td><input type="radio" name="kkr"></td>
							      	<td><img src="./images/kkr.png"></td>
							      	<td>KKR</td>
							      							      	
							      </tr>
							      <tr>
							      	<td><input type="radio" name="kxip"></td>
							      	<td><img src="./images/kxip.png"></td>
							      	<td>KXIP</td>
							      							      	
							      </tr>
							      <tr>
							      	<td><input type="radio" name="rr"></td>
							      	<td><img src="./images/rr.png"></td>
							      	<td>RR</td>
							      								      	
							      </tr>
							      <tr>
							      	<td><input type="radio" name="rcb"></td>
							      	<td><img src="./images/rcb.png"></td>
							      	<td>RCB</td>
							      							      	
							      </tr>
							      <tr>
							      	<td><input type="radio" name="srh"></td>
							      	<td><img src="./images/srh-logo.png"></td>
							      	<td>SRH</td>
							      							      	
							      </tr>
							      <tr>
							      	<td></td>
							      	<td>
							      		<button type="submit" name="submit" class="btn btn-success">Submit</button>
							       	</td>
							       	<td></td>
							      </tr>
							      <tr>
							      	<td></td>
							      	<td>
							      		<a href="./result.php" button type="button" class="btn btn-info">View Result</button>
							       	</td>
							       	<td></td>
							      </tr>
							    </tbody>
							  </table>
							</div>
							</form>
						</div>
						

						<div class="col-sm-4">
							<div class="test">
								<div class="google-ad-bar-rightside">
									<!-- Sky Scraper Widget ad -->
										<ins class="adsbygoogle"
										     style="display:inline-block;width:300px;height:600px"
										     data-ad-client="ca-pub-2779845155398734"
										     data-ad-slot="2071836800"></ins>
										
								</div>
							</div>
						</div>
					
				</div>
				<ins class="adsbygoogle"
			     style="display:block"
			     data-ad-client="ca-pub-2779845155398734"
			     data-ad-slot="8856413607"
			     data-ad-format="auto"></ins>
			</div>
			<div class="sharethis-inline-share-buttons"></div>
			<audio controls autoplay>
			  <source src="./IPL_2018_Ringtone.mp3" type="audio/mp3">
			</audio>
				
			<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<!-- 200*90 Link Ads Unit -->
			<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
			</script>
			
		</body>
	
</html>

