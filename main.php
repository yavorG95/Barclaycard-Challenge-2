<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $title; ?></title>
		<link rel="stylesheet" type="text/css" href="stylesSheet.css" />
		<link rel="stylesheet" href="jquery/jRating.jquery.css" type="text/css" />
		<script src="js.cookie.js"></script>	
		<script src="jquery-3.1.1.js"></script>
		<script src="ascript.js" ></script>
		<script src="jquery/jRating.jquery.js"></script>
		
	</head>

	<body>
		<header class="navbar">
					
			<div class="nav"> 
				<ul>
						
							<li class="dropdown"><a href ="resources"> Resources</a>
							<div class="dropdown-content">
								<a href="resources">Search</a>
								<a href="upLoadResource">Upload Resource</a>
								<a href="linkresource_upload">Submit Link Resource</a>
							</div>
						</li>
									
				</ul>
			</div>
		
		</header>
		
		<main id="main">
			<?php echo $content; ?>
		</main>
		
		
	</body>	
</html>