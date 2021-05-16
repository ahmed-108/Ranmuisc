
<?php 
    if(!isset($_SESSION['old_value'])||$_SESSION['old_value']>=mysqli_num_rows( mysqli_query ($con,"SELECT * FROM $namecateg"))){
        $random1 =$_SESSION['old_value'] = rand(1,mysqli_num_rows(mysqli_query ( $con,"SELECT * FROM $namecateg"))-1);                                     /////done
    }else if($_SESSION['old_value']<=1){
        $random1 =$_SESSION['old_value']=rand(1,mysqli_num_rows(mysqli_query ($con,"SELECT * FROM $namecateg"))-1);
    }
    if(isset($_POST['pre'])){
    $random1 = $_SESSION['old_value'] - 1;
    $_SESSION['old_value'] = $random1;
    }elseif(isset($_POST['next'])){
    $random1=$_SESSION['old_value'] +1 ;                        //////////done 
    $_SESSION['old_value']=$random1;
    }else{
        $random1=$_SESSION['old_value'] ;
        $_SESSION['old_value']=$random1;
    }
    $queree="SELECT * FROM $namecateg WHERE id='$random1'";
    $result1=mysqli_query($con,$queree);
    $data=mysqli_fetch_array ($result1);
    $id=$data[0];
    $artistname.=$data[1];
    $songname.=$data[2];
    $url=$data[3];
    $lyrics=$data[4];
    $urlimg=$data[5];
?>