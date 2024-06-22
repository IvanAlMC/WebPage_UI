<!DOCTYPE html>  
<html lang="en">
  <head>
    <meta charset="UTF-8">
	  <title>Template</title>
	   
	 <style>

	 	body{
			background:#389FBD;
		}

		nav{
			border-radius: 10px;
			background-color: #48D0DC;
			margin-bottom: 20px;
			width: 100%;
		}

		a{
			font:bold 25px Verdana;
			text-decoration: none;
			color:#f2f2f2;
			border: 4px solid #f2f2f2;
			padding: 10px 20px 10px 20px;
			border-radius: 10px;
			transition: background 1s,color 1s;
			float: left;
			margin-left: 5px;
			margin-right: 20px;
			margin-top: 23px;
		}
		a:hover{
			background: #f2f2f2;
			color:#0489B1; 
		}

	 	header{
	 		position:relative;
	 		margin: auto;
	 		text-align: center;
	 		padding: 5px;
		}
		
	 	section{
	 		position: relative;
	 		padding: 20px;

	 	}

	 </style>

   </head>
  <body>
   
   <header> 
   		<br>
   </header>
<?php
	include "modules/navegacion.php"
?>

<section>
<?php

	$mvc = new MvcController();
	$mvc -> enlacesPaginasControler();
?>	 
</section>

  </body>
</html>
