<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Main</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
	<style>
		body {
			background-color: #d6efff;
			font-size: 14px;
			line-height: 16px;
			font-family: Raleway, Arial, sans-serif;
			color: #2e6180;
		}

		img{
			border-radius: 10px;
		}

		h1 {
			font-size: 3em;
			line-height: 3.5em;
			text-align: center;
			color: #2e6180;
		}

		table {
			width: 80%;
			table-layout: fixed;
			margin: 0 auto 50px auto;
			border-spacing: 1px;
			border-collapse: collapse;
			box-sizing: border-box;
			text-indent: 0;
			text-align: center;
			border: 3px solid grey;
		}
		
		th {
			font-weight: 800;
			font-size: 1.5em;
			line-height: 1.75em;
		}

		td {
			padding: 15px;
			font-size: 1.25em;
			line-height: 1.3em;
			border: 1px solid grey;
		}

		.error{
			font-size: 4em;
			line-height: 4em;
			margin: 0 auto;
			animation-duration: 3s;
			animation-name: slide;
		}

		@keyframes slide {
		from {
			margin-left: 100%;
			width: 300%;
		}

		to {
			margin-left: 0%;
			width: 100%;
		}
		}

		div{
			text-align: center;
		}

		input[type="button"], input[type="reset"]{
			color: #3d7395;
			padding: 10px;
			margin: 0 10px;
			font-weight: 600;
			background-color: #bdffbd;
			border: 1px solid #3d7395;
			border-radius: 5px;
		}

		@keyframes rotate {
		0 {
			transform: rotate(0deg);
		}
		100% {
			transform: rotate(360deg);
		}
		}
		
		.picture{
			border-radius: 15px;
			height: 100px;
			width: auto;
			animation-name: rotate;
			animation-duration: 5s;
		}

		
		@keyframes changeSize {
		from {
			font-size: 20em;
		}
		to {
			font-size: 1em;
		}
		}

		.mistake{
			animation-name: changeSize;
			animation-duration: 2s;
		}
		
	</style>
</head>
<body>
	<?php include 'views/'.$content_view; ?>
</body>
</html>