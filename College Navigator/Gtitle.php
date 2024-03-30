<html>
<head>
<style> 
           body{
background-image:url('bg3.jpg');
background-repeat:no-repeat;
background-size:1535px 742px;
background-podition:center;
           }

        .header{
                font-size:40px;
                text-align: center;
                
            }
            .per{
                font-size:20px;
                 text-align: center;
            }
            
.button{
	text-decoration:none;
	text-transform: uppercase;
         font-style:oblique;
        font-size: 16px;
	letter-spacing:2px;
	color:brown;
	outline:2px solid black;
	padding: 5px;
	position:relative;
	overflow: hidden;
	transition: color 1s;
        display: inline-block;
        float:left;
        
}

.button:hover{
	color:#ffffff;
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
 <div>
<h2 class="header"> Navigate tpt Colleges</h2>
<p class="per"> Searching Tirupattur Art's & Science Colleges only</p>
<a href="Gclg_home.php" class="button"> Government college </a>
<a href="GEclg_home.php" class="button"> Government eaided college </a>
<a href="Pclg_home.php" class="button">private college </a>
<a href="Cclg_home.php" class="button">course</a>     
<a href="index.php" class="button">Home</a>     
</div>
</body>
</html>