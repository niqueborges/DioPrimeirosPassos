<html>

	<head>
		<title>Meu primeiro site em PHP! Woohoo!</title>
		
		<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
		
		<style type="text/css">
			.linha {
				font-weight: bold;
				color: green;
				paddind-left: 10px;
				line-height: 50px;
				
			}
		</style>
	</head>
	
	<body>
	
		<?php
			for ($i = 0 ; $i < 10 ; $i++ ) {
				print( "<span class=\"Linha\">LInha número " . $i . "</span><br />");
			}
		?>
		
	</body>
	
	<script type=text/javascript">
		$(document).ready(function() {
			alert("Woohoo!");
		});
	</script>
	
</html>