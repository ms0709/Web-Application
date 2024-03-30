<!DOCTYPE html>
      <html>
<head>
    <title> Colleges in tirupattur</title>
<style> 
body{
background-image:url('clg.png');
background-repeat:no-repeat;
background-size:1535px 730px;
background-podition:center;
}

.button{
	text-decoration:none;
	text-transform: uppercase;
	letter-spacing:2px;
	color:white;
	outline:2px solid black;
	padding:30px 50px;
	position:relative;
	overflow: hidden;
	transition: color 1s;
}

.button:hover{
	color:#833ab4;
}
.button::before{
	content:''{
	position: absolute;
	top:0;
	left:-30px;
	width:0;
	height:100%;
	background-color:white;
	transform:skewk(35deg);
	z-index:-1;
	transition:width 1s;
}
.button:hover::before{
	width:150%;
}
</style>
</head>
<body>
    <a href="Clist_home.php" class="button"> college list </a>

    <a href="Gclg_home.php" class="button"> Government college </a>

    <a href="GEclg_home.php" class="button"> Government eaided college </a>

    <a href="Pclg_home.php" class="button">private college </a>

    <a href="Cclg_home.php" class="button">cource</a>
</body>
</html>
    </body>
</html>
