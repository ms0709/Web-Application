<?php
    if(isset($_POST['submit']))
        {
        $user = $_POST['username'];
        $pass = $_POST['password'];
        
        if($user === 'ms' && $pass === '123'){
            header('location:display.php');
        }
        else{
            header('location:login.php');
        }
        }
?>

<html>
    <head>
        <meta charset="utf-8">
        
        <title>
            Login Form
        </title>
        <style>
            body{
                padding:0;
                margin:0;
                font-family:Gill Sans MT;
                background: url('lgbg.webp') no-repeat;
                background-size:1540px 758px;
            }
            .box{
                width: 500px;
                padding: 30px;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%,-50%);
                background: rgba(0,0,0,0.4);
                text-align: center;
                
            }
            .box h1{
                text-transform: uppercase;
                color: white;
                font-weight: 700;
            }
            .box input[type="text"],.box input[type="password"]{
                border: 0;
                background: none;
                display: block;
                margin: 20px auto;
                text-align: center;
                border: 3px solid #0367fd;
                padding: 14px 10px;
                width: 280px;
                outline: none;
                color: white;
                border-radius: 24px;
                transition: 0.25px;
            }
            .box input[type="text"]:focus,.box input[type="password"]:focus{
                width: 270px;
                border-color: #ffff;
            }
            .box input[type="submit"]{
                border: 0;
                background: none;
                display: block;
                margin: 20px auto;
                text-align: center;
                border: 3px solid #ffff;
                padding: 14px 35px;
                outline: none;
                color: white;
                border-radius: 24px;
                transition: 0.25px;
                cursor: pointer;
            }
            .box input[type="submit"]:hover{
                background:#0367fd; 
            }
            .button {
                font-size: 20px;
                border: 0;
                background: none;
                display: block;
                margin: 20px auto;
                text-align: center;
                border: 3px solid #0367fd;
                padding: 10px 10px;
                width: 100px;
                outline: none;
                color: white;
                border-radius: 24px;
                transition: 0.25px;
                float: left;
            }
         
        
        </style>
    </head>
    <body>
        <a href="index.php" class="button">Back</a>
        <form class="box" method="post">
            <h1>
                login
            </h1>
            <input type="text" placeholder="Enter username" name="username"/>
            <input type="password" placeholder="Enter password" name="password"/>
            <input type="submit" name="submit" value="Login"/>
        </form>

<!--        <script>
            function validate()
{
    var username=document.getElementById("username").value;
    var password=document.getElementById("password").value;
    
    if(username==="ms123"&& password==="12345")
    {
        href="display.php"
        
        return false;
    }
    else
    {
        alert("Login failed");
    }
}
        </script>-->
    </body>
</html>

