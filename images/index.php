<?php
	include('connect.php');
	if(isset($_GET['submit-btn']))
	{
		//prevent sql injection
		$title=mysqli_real_escape_string($con,$_GET["title"]);
		//prevent xss
		$title = htmlspecialchars($title,ENT_COMPAT);
		//friendly URL conversion
		function to_prety_url($str){
			if($str !== mb_convert_encoding( mb_convert_encoding($str, 'UTF-32', 'UTF-8'), 'UTF-8', 'UTF-32') )
				$str = mb_convert_encoding($str, 'UTF-8', mb_detect_encoding($str));
			$str = htmlentities($str, ENT_NOQUOTES, 'UTF-8');
			$str = preg_replace('`&([a-z]{1,2})(acute|uml|circ|grave|ring|cedil|slash|tilde|caron|lig);`i', '\1', $str);
			$str = html_entity_decode($str, ENT_NOQUOTES, 'UTF-8');
			$str = preg_replace(array('`[^a-z0-9]`i','`[-]+`'), '-', $str);
			$str = strtolower( trim($str, '-') );
			return $str;
	}
	$str=to_prety_url($title);
	// sql query for inserting data into database
	$sql_query = "INSERT INTO wisher (title,str) VALUES ('$title','$str')";
	$result_set=mysqli_query($con,$sql_query);
	
	// Redirect to Greeting Page
	
	header("Location: http://localhost/SubhWishes/wish.php");
	exit();
	}
?>
<!DOCTYPE html>
<html>
  <head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php $current_page = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		echo '<link rel="canonical" href="'.$current_page.'" itemprop="url"/>'; ?>

    <title>Welcome to SubhWishes</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	 <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-114768802-1"></script>
  </head>
  <body>
	<div class="row">
		<div class="col-sm-12" id="site-title">SubhWishes.com</div>
	</div>
	<div class="Ad">
		<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-2779845155398734"
     data-ad-slot="8856413607"
     data-ad-format="auto"></ins>
	</div>
	<div class="name-input">
      <form method="GET">
        <div class="row">
			<div class="col-sm-12" id="enter-name"><h1>Enter your name below</h1></div>
		</div>
		
			<div class="row">
				<div class="col-sm-12">
					<input type="text" class="text-field" name="title" placeholder="Your name..." required><br>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<input type="submit" class="btn" name="submit-btn" value="GO"
				</div>
			</div>
		
      </form>
    </div>
	<script>
	$(document).ready(function(){
		$('form').parsley();
	});
</script>
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<script>
	(adsbygoogle = window.adsbygoogle || []).push({});
	</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.5.1/parsley.min.js"></script>
	<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-114768802-1');
</script>
	
	</body>
</html>
