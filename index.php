<!DOCTYPE HTML>
<html>

	<head>
		<link rel='stylesheet' href='style.css'/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<script src='jquery-2.1.1.min.js'></script>
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
		
		<script src='script.js'></script>
		
		<header id="navig">
			<div id="name">
				<a href = "index.php">
			    	<div id="first">
			    		STEVEN
			    	</div>
			    	<div id="last">
			    		RUTHERFORD
			    	</div>
				</a>
		    </div>
	      	
			<nav id="nav_buttons">
    			<a href = "javascript:toggleDiv('about');">Info</a>
    			<a href = "javascript:toggleDiv('projects');">Projects</a>
    			<a href = "javascript:toggleDiv('contact');">Contacts</a>
    		</nav>
	    </header>
	    
	    <div id="section-container">
	    	<div id="about">
				
				I'm a recently employed software professional who recently moved to Boston from LA.
				</br> 
				Hoping that by taking DWA I can improve my software skills and make myself more marketable.
				</br> 
				I started programming five years ago when I started my Bachelor's degree making primarily stand alone scripts and microprocessor programs.
				</br> 
				I'm working on a PC
				
			</div>
			
			<div id="projects">
				
				<div class="proj2_txt"> &nbsp; P2: &nbsp; &nbsp; &nbsp; To be filled </div>
					
				<div class="proj3_txt"> &nbsp; P3: &nbsp; &nbsp; &nbsp; To be filled </div>
					
				<div class="proj4_txt"> &nbsp; P4: &nbsp; &nbsp; &nbsp; To be filled </div>
				
			</div>
			
			<div id="contact">
				<div class="env"> <a href = "mailto:stevenrutherford@socal.rr.com"> <i class="fa fa-envelope-o fa-5x"></i> </a> </div>
				<div class="git"> <a href = "https://github.com/SRutherf"> <i class="fa fa-github-square fa-5x"></i> </a> </div>
				<div class="linked"> <a href = "https://www.linkedin.com/pub/steven-rutherford/56/8a8/98b"> <i class="fa fa-linkedin-square fa-5x"></i> </a> </div>
			</div>
	    </div>
	    
	    <script>
			$("#about").toggle();
			$("#projects").toggle();
			$("#contact").toggle();
		</script>

	</body>

</html>
