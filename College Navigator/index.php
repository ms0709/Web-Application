<html>
    <head>
        <title>Home</title>
        <style>
           
            .header h1{
                font-size:40px;
                text-align: center;
                
            }
           
            body{
background-image:url('bg3.jpg');
background-repeat:no-repeat;
background-size:1535px 742px;
background-podition:center;
}


.button{
	text-decoration:none;
	text-transform: uppercase;
        font-style:oblique;
        font-size: 20px;
	letter-spacing:2px;
	color:blue;
	outline:2px solid black;
	padding: 10px;
	position:relative;
	overflow: hidden;
	transition: color 1s;
        display: inline-block;
        float: left;
        
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

        <section class="header">
            <h1>College Navigator</h1>
            <br/>
        </section>
        <hr/>
        
       
    <div class="nav">
         <a href="Clist_home.php" class="button"> college list </a>
        <a href="Gclg_home.php" class="button"> Government college </a>
        <a href="GEclg_home.php" class="button"> Government eaided college </a>
         <a href="Pclg_home.php" class="button">private college </a> 
         <a href="login.php" class="button">Admin</a>
     </div> 
      
    </body>
</html>
