<?php 
    if(isset($_POST['fav'])){
        $con = mysqli_connect("127.0.0.1","root","","register");
        $selsongname= "SELECT songname FROM  $Usrenamee WHERE songname= '".$songname."'";
        $factselsong= mysqli_query($con,$selsongname);
        $numrow= mysqli_num_rows($factselsong);
        if($numrow==1){
            echo "is exist";
        }else{
            $sql = "INSERT into $Usrenamee ( artistname, songname, url,lyrics,urlimg)
            VALUES ('$artistname', '$songname', '$url','$lyrics','$urlimg')";
            $resultt1 = mysqli_query($con,$sql);
            
        }
 }
 
?>