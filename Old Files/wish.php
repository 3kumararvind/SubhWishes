<!DOCTYPE html>
<head>
    <title>SubhWishes</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php $current_page = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	echo '<link rel="canonical" href="'.$current_page.'" itemprop="url"/>'; ?>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<meta name="description" content="<?php echo $user_wish['str']; ?>/>
  </head>
<body>
	<div class="row">
		<div class ="col-sm-12" id="site-title" >SubhWishes.com</div>
	</div>
	
	<div class="name-input">
		<div class="Ad">
		<ins class="adsbygoogle"
			 style="display:block"
			 data-ad-client="ca-pub-2779845155398734"
			 data-ad-slot="8856413607"
			 data-ad-format="auto">
		</ins>
	</div>
		<div class="row">
			<div class="col-sm-12">
				<h1><?php echo $_GET["title"]; ?><br>
						Wishing You And Your Family <br />
                                                Happy Ram Navami in Advance </h1>
			</div>
		</div>
				
		<div class="row">
			<div class="col-sm-12">
				<h1>Before <p id="demo">.</p></h1>
			</div>
		</div>
		
	<div class="Ad">
		<ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-2779845155398734" data-ad-slot="8856413607"  data-ad-format="auto"></ins>
	</div>
		
	
      
	  <div class="Ad">
		  <ins class="adsbygoogle"
			 style="display:inline-block;width:300px;height:500px"
			 data-ad-client="ca-pub-2779845155398734"
			 data-ad-slot="2071836800">
		 </ins>
	 </div>
	 <div class="row">
		<div class="col-sm-12">
				<div class="whatsappshare">
					<a href="whatsapp://send?text=<?php echo $_GET["title"]; ?> , has sent something for you. Click on the link to see - <?php echo $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'] ?>" tarPOST="_blank">Wish Your Friend</a>
				</div>
		</div>
	</div>
	 <form action="index.php" method="POST">
		<div class="row">
			<div class="col">
				<input type="submit" class="btn" name="submit-btn" value="Enter Your Name">
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
	
	<script>
// Set the date we're counting down to
var countDownDate = new Date("Mar 25, 2018 00:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();

  // Find the distance between now an the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  // If the count down is finished, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Sky Scraper Widget ad -->

<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>

</body>
</html>