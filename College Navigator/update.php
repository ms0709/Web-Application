<?php
    include 'connect.php';
    $sno=$_GET['updatesno'];
    $sql="SELECT * FROM `clgdetails` WHERE sno=$sno";
//    SELECT * FROM `clgdetails` ORDER BY `sno` ASC
    $res= mysqli_query($conn,$sql);
    $row= mysqli_fetch_assoc($res);
    
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
    
    if(isset($_POST['submit'])){

        $cname=$_POST['cname'];
//        $cins=$_POST['cins'];
        $afft=$_POST['afft'];
        $cat=$_POST['cat'];
        $add=$_POST['add'];
        $phono=$_POST['phono'];
        $email=$_POST['email'];
        $hostel=$_POST['hostel'];
        $toc=$_POST['toc'];
        $site=$_POST['site'];
        $map=$_POST['map'];
        
        
//$sql = "update `clgdetails` set sno=$sno, cname='$cname',cins='$cins',afft='$afft',cat='$cat',add='$add',phone='$phono',email='$email',hostel='$hostel',toc='$toc',site='$site',map='$map' where sno = $sno";
$sql="update `clgdetails` set cname = '$cname',affilate='$afft',category='$cat',address = '$add',phone='$phono',email = '$email',hostal='$hostel',tofclg='$toc',site = '$site',map='$map' where sno=$sno";//$sql="UPDATE `clgdetails` SET cname='$cname',email='$email' WHERE `clgdetails`.`sno` = 7";
$result= mysqli_query($conn, $sql);
    if($result){
        
        header('location:display.php');
    }
    else
    {
    die(mysqli_error($conn));
    }
   }
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
            #head{
                background-color: skyblue;
            }
            .header{
                font-size: 40px;
                color:#fff;
            }
            .form-row{
                margin-left: 25%;
                width: 500px;
            }
            .form-group label{
                font-size: 20px;
                color:#fff;
                font-weight: bold;
            }
            .l1,.l2,.l3{
                font-size: 20px;
                color:#fff;
                font-weight: bold;
            }
           </style>
        
        
    </heade>
    <body>
       
        <div class="container" id="head">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="header text-center my-5">College Details</h3>
                </div>
            </div>
            <div class="row mt-4 form-row">
                <div class="col-md-12">
                    <form method="post">
                        <div class="form-group">
                            <label for="text">College Name :</label>
                            <input type="text" name="cname" class="form-control" placeholder="College Name" id="cname" autocomplete="off" required value=<?php echo $cname;?>  >
                        </div>
<!--                        <div class="form-group">
                             <label for="text">College Institution:</label>
                             <input type="text" name="cins" class="form-control" placeholder="College Institution" id="cin" autocomplete="off" required>
                        </div>-->
                        
                        <div class="form-group">
                             <label for="text">Affiliated to :</label>
                             <input type="text" name="afft" class="form-control" placeholder="Affiliated to" id="aft" autocomplete="off" required value=<?php echo $afft;?>>
                        </div>
                     
                    
                   
                        <label type="text" class="l1">Category: </label>
                     <div class="form-check">
                        <label class="form-check-label" for="radio1">
                            <input type="radio" class="form-check-input" id="radio1" name="cat" value="Co-Education" 
                                <?php
                                    if($cat == "Co-Education")
                                    {
                                        echo 'checked';
                                    }
                                ?>
                                   >Co-Education  
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label" for="radio1">
                        <input type="radio" class="form-check-input" id="radio1" name="cat" value="Womens"
                               <?php
                                    if($cat == "Womens")
                                    {
                                        echo 'checked';
                                    }
                                ?>
                               >Womens 
                        </label>
                    </div>
                    
                    <div class="form-check">
                         <label class="form-check-label" for="radio1">
                         <input type="radio" class="form-check-input" id="radio1" name="cat" value="Mens"
                                <?php
                                    if($cat == "Mens")
                                    {
                                        echo 'checked';
                                    }
                                ?> 
                                > Mens 
                          </label>
                    </div>
                     <br>
                    <div class="form-group">
                     <label for="Address">Address:</label>
                     <textarea class="form-control" name="add" column="5" id="comment"autocomplete="off" required ><?php echo $add;?></textarea>
                    </div>

                    <div class="form-group">
                             <label for="text">Phone.No : </label>
                             <input type="text" name="phono" class="form-control" placeholder="Phone.No" id="pn" autocomplete="off" required value=<?php echo $phono;?>>
                        </div>
                     <div class="form-group">
                             <label for="text">E-mail : </label>
                             <input type="text" name="email" class="form-control" placeholder="E-mail" id="em" autocomplete="off" required value=<?php echo $email;?>>
                        </div>
                         
                   
                     <label type="text" class="l2">Hostel: </label>
                     <div class="form-check">
                        <label class="form-check-label" for="radio1">
                        <input type="radio" class="form-check-input" id="radio1" name="hostel" value="Yes"
                               <?php
                                    if($hostel == "Yes")
                                    {
                                        echo 'checked';
                                    }
                                ?> 
                               >Yes
                        </label>
                     </div>
                  <div class="form-check">
                  <label class="form-check-label" for="radio1">
                  <input type="radio" class="form-check-input" id="radio1" name="hostel" value="No"
                         <?php
                                    if($hostel == "No")
                                    {
                                        echo 'checked';
                                    }
                                ?> 
                         >No
               </label>
                </div>
                        
                    <br>
                      <label type="text" class="l3">Type of College : </label>
                     <div class="form-check">
                        <label class="form-check-label" for="radio1">
                        <input type="radio" class="form-check-input " id="radio1" name="toc" value="Government"
                               <?php
                                    if($toc == "Government")
                                    {
                                        echo 'checked';
                                    }
                                ?>
                               >Government
                        </label>
                     </div>
                  <div class="form-check">
                  <label class="form-check-label" for="radio1">
                      <input type="radio"  class="form-check-input" id="radio1" name="toc" value="Government eaided"
                             <?php
                                    if($toc == "Government-eaided")
                                    {
                                        echo 'checked';
                                    }
                                ?>
                             >Government eaided
               </label>
                  </div>
                   <div class="form-check">
                  <label class="form-check-label" for="radio1">
                  <input type="radio"  class="form-check-input" id="radio1" name="toc" value="Private"
                         <?php
                                    if($toc == "Private")
                                    {
                                        echo 'checked';
                                    }
                                ?>
                         >Private
               </label>
                  </div>
                          <div class="form-group mt-4">
                             <label for="text">Site : </label>
                             <input type="text" name="site" class="form-control" placeholder="Site" id="site" autocomplete="off" required value=<?php echo $site;?>>
                          </div>
                          <div class="form-group">
                             <label for="text">Map : </label>
                             <input type="text" name="map" class="form-control" placeholder="Map" id="map" autocomplete="off" required value=<?php echo $map;?>>
                          </div>
                      
                        
                      
                        <button type="submit" name="submit" class="btn btn-primary my-5">Update</button>
</form>
                </div>
            </div>
        </div>
    </body>
</html>