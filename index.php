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
	    		
	    		<div class="pic">
	    			<img src="pic.png" style="width: 25%; height: 25%"/>
	    		</div>
				
				<ul>
					<li>I'm a software engineer who recently moved to Boston from LA.  Currently working in Back Bay in my first job out of college.</li>
					</br> 
					<li>Taking DWA to improve my software skills web development skills.</li>
					</br> 
					<li>I started programming five years ago when I started my Bachelor's degree working primarily with microcontrollers.</li>
					</br> 
					<li>I'm working on a PC</li>
				</ul>
				
			</div>
			
			<div id="projects">
				
				<div class="proj2_html"><a href = "p2.html">P2</a> <a href = "p2Git.html"><i class="fa fa-github" style="font-size: 50px"></i> </a> </div>
					
				<div class="proj3_html"><a href = "p3.html">P3</a> <a href = "p3Git.html"><i class="fa fa-github" style="font-size: 50px"></i> </a> </div>
					
				<div class="proj4_html"><a href = "p4.html">P4</a> <a href = "p4Git.html"><i class="fa fa-github" style="font-size: 50px"></i> </a> </div>
				
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
