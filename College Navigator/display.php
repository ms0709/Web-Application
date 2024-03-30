<?php
include 'connect.php';
?>


<!DOCTYPE html>
<html>
    <heade>
        <title>
           College Details
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        <style>
            .add-btn{
                text-decoration: none;
            }
            .li-table{
                
            }
            .table tr:nth-child(even){
                background-color: #fff;
            }
            .table tr:nth-child(odd){
                background-color: lightgray
            }
        </style> 
    </heade>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <button class="btn btn-primary my-5" type="submit" name="submit"><a href="user.php" class="text-light p-5 add-btn">Add</a></button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    
                    <div class="table-responsive">
                        <table class="table" >
  <thead>
    <tr>
      <th scope="col">S.ID</th>
      <th scope="col">Cname</th>
      <th scope="col">Affilate</th>
      <th scope="col">Category</th>
      <th scope="col">Address</th>
      <th scope="col">Phone</th>
      <th scope="col">Email</th>
      <th scope="col">Hostel</th>
      <th scope="col">Type of clg</th>
      <th scope="col">Site</th>
      <th scope="col">Map</th>
      <th scope="col">Update</th>
      <th scope="col">Delete</th> 
      <!--<th scope="col">Operation</th>-->
    </tr>
  </thead>
  <tbody>
      <?php
      
      $sql= "select * from `clgdetails`";
      $result= mysqli_query($conn, $sql);
      if($result){

    while ($row= mysqli_fetch_assoc($result)){
        $sno =$row['sno'];
        $cname=$row['cname'];
        $afft=$row['affilate'];
        $cat=$row['category'];
        $add=$row['address'];
        $phono=$row['phone'];
        $email=$row['email'];
        $hostel=$row['hostal'];
        $toc=$row['tofclg'];
        $site=$row['site'];
        $map=$row['map'];
        echo '<tr>
      <th scope="row">'.$sno.'</th>
      <td>'.$cname.'</td>
      <td>'.$afft.'</td>
      <td>'.$cat.'</td>
      <td style="width:200px">'.$add.'</td>
      <td>'.$phono.'</td>
      <td>'.$email.'</td>
      <td>'.$hostel.'</td>
      <td>'.$toc.'</td>
      <td>'.$site.'</td>
      <td>'.$map.'</td>
      <td> <button class="btn btn-primary"><a href="update.php?
      updatesno='.$sno.'" class="text-light">Update</a></button></td>
      

      <td> <button class="btn btn-danger"><a href="delete.php?
      deletesno='.$sno.'" class="text-light">Delete</a></button></td>
      
      
      

    </tr>';
    }    
}
?>
  </tbody>
</table>
                    </div>
                </div>
            </div>
        </div> 
<!--        <td><button class="btn btn-primary"><a href="update.php" class="text-light">Update</a></button></td>
        <td><button class="btn btn-danger"><a href="delete.php" class="text-light">Delete</a></button></td>-->
        
    </body>    
</html>