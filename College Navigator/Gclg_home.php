<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Government Colleges</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  <style>
      .head{
          text-align: center;
          background-color: skyblue;
         margin-top:0;
         padding: 20px 0;
         font-weight: 600;
      }
      .test{
          border: none;
          outline: none;
          background-color: transparent;
      }
      .test:hover{
          background-color: transparent;
      }
      
      
  </style>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="head">Collage Navigator</h1>
                
                
                <table class="table" >
  <thead>
    <tr>
      <th scope="col">Collage Name</th>
    </tr>
  </thead>
  <tbody>
      <?php
      
      $sql= "select cname from `clgdetails`";
      $result= mysqli_query($conn, $sql);
      if($result){

    while ($row= mysqli_fetch_assoc($result)){
        $cname =$row['cname'];
        echo '<tr>
     <td> <button class="test"><a href="view_clg.php?
      viewcname='.$cname.'" class="test1">'.$cname.'</a></button></td>
      </tr>';
    }    
}
?>
  </tbody>
</table>   
            </div>
        </div>
        <div class="col-md-6">
            
              
        </div>
    </div>
</body>
</html>


        
       