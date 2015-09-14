<!DOCTYPE HTML>
<html>

	<head>
		<title>DWA - P1</title>
	</head>

	<?php 
		//determine if random color's grayscale is 50% or greater for readability
		function hexgray($hex){
			$r = hexdec($hex[0] . $hex[1]);
			$g = hexdec($hex[2] . $hex[3]);
			$b = hexdec($hex[4] . $hex[5]);
			
			//weighted grayscale function
			$gray = 0.3*$r + 0.5*$g + 0.1*$b;
			
			if ($gray >= 60 && $gray <= 130){
				return TRUE;
			}
			else{
				return FALSE;
			}
		}
		
		//generate random color
		function randColor(){
			$readable = FALSE;
			while ($readable == FALSE){
				//color values from 777777 to FFFFFF
				$decimal = rand(7829367, 16777215);
				$hex = dechex($decimal);
				//esnure hex has 6 values
				while (strlen($hex) < 6){
					$hex = '0' . $hex;	
				}
				if (hexgray($hex)){
					$readable = TRUE;
				}
			}
			return '#' . $hex;
		}
	?>

	<body style="background: <?php echo randColor();?> ">
		
		<header id="navig">
			<div id="name">
				<a href = "index.html">
			    	<div id="first">
			    		STEVEN
			    	</div>
			    	<div id="last">
			    		RUTHERFORD
			    	</div>
				</a>
		    </div>
	      	
	    	<nav id="nav_buttons">
	    		<!--<a href = "about.html">Info</a>-->
	    		<a href = "info.html">Info</a>
	    		<a href = "projects.html">Projects</a>
	    		<a href = "contacts.html">Contacts</a>
	    	</nav>
	    </header>

	</body>

</html>
