<!DOCTYPE html>
<html lang="en">
<head>
  <title>Chess Board - PHP</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <style>
	.row {
		display: flex;
		justify-content: center; /* Center the columns horizontally */
		width: 40rem;
	}

	.column {
		flex: 1;
		width: 1.5rem;
		height: 4rem;
		border: 0.1px solid black;
		box-sizing: border-box;
	}

	.dark {
		background-color: #7B501E;
	}

	.light {
		background-color: #FCD77E;
	}
  </style>
</head>
<body>
	<div class="container">
		<div class="card">
			<div class="card-body text-center">
			<?php for($i=1; $i<=8; $i++) { 
			
				if($i % 2 !== 0)
				{
					echo  '<div class="row">
								<div class="column light"></div>
								<div class="column dark"></div>
								<div class="column light"></div>
								<div class="column dark"></div>
								<div class="column light"></div>
								<div class="column dark"></div>
								<div class="column light"></div>
								<div class="column dark"></div>
							</div>';
				}
				else
				{
					echo  '<div class="row">
								<div class="column dark"></div>
								<div class="column light"></div>
								<div class="column dark"></div>
								<div class="column light"></div>
								<div class="column dark"></div>
								<div class="column light"></div>
								<div class="column dark"></div>
								<div class="column light"></div>
							</div>';
				}
					
			} ?>
	        </div>
        </div>
	</div>
</body>
</html>
