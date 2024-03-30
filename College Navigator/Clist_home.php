<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>College List</title>
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
  </style>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="head">Collage Navigator</h1>
                
                
                <table class="table" >
  <thead>
    <tr>
      <th scope="col">Collage Name</th>
      <th scope="col">Address</th>
    </tr>
  </thead>
  <tbody>
      <?php
      
      $sql= "select * from `clgdetails`";
      $result= mysqli_query($conn, $sql);
      if($result){

    while ($row= mysqli_fetch_assoc($result)){
        $cname =$row['cname'];
        $add =$row['address'];
        echo '<tr>
      <td scope="row">'.$cname.'</td>
          <td scope="row">'.$add.'</td>          
      </tr>';
    }    
}
?>
  </tbody>
</table>
                
                
                
            </div>
        </div>
    </div>

</body>
</html>

