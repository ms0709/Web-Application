 <?php
    include 'connect.php';
    
    $cname=$_GET['viewcname'];
    $sql="SELECT * FROM `clgdetails` WHERE 'cname'=$cname";
    $res= mysqli_query($conn,$sql);
    $rows= mysqli_fetch_assoc($res);
    if($res){
        echo 'succc';
    }
    else{
        die(mysqli_error($conn));
    }
    $cname=$rows['cname'];
    $afft=$rows['affilate'];
    $cat=$rows['category'];
    $add=$rows['address'];
    $phono=$row['phone'];
    $email=$rows['email'];
    $hostel=$rows['hostal'];
    $toc=$rows['tofclg'];
    $site=$rows['site'];
    $map=$rows['map'];
    
    

           echo '<table>
                <thead>
                <tr>
                    <th colspan="2">College Detials </th>
                </tr>
                </thead>
                <tbody>
                    <tr><td>College Name</td></tr>
                    <td>'.$cname.'</td>
                        <td>'.$cat.'</td>
                            <td>'.$add.'</td>
                                <td>'.$phono.'</td>
                                    <td>'.$email.'</td>
                                        <td>'.$hosel.'</td>
                                            <td>'.$toc.'</td>
                                                <td>'.$site.'</td>
                                                    <td>'.$map.'</td>
                                                
                                                
                                    
                </tbody>
            </table>';
    
?>  
