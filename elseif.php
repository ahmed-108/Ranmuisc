<?php 
    if($categoryDB=="Classic"){
        header("location:classic.php?$categoryDB");
    }else if($categoryDB=="Others"){
        header("location:others.php");
    }else if($categoryDB=="Romantic"){     
        header("location:romantic.php?$categoryDB");
    }else if($categoryDB=="Sad"){
        header("location:sad.php?$categoryDB");
    }else if($categoryDB=="Pop"){
        header("location:pop.php?$categoryDB");
    }else if($categoryDB=="Rock"){
        header("location:rock.php?$categoryDB"); 
    }else if($categoryDB=="Alternative"){
        header("location:alternative.php?$categoryDB");
    }else if($categoryDB=="RAP"){
        header("location:rap.php?$categoryDB");
    }else if($categoryDB=="Electronic"){
        header("location:electronic.php?$categoryDB");
    }else if($categoryDB=="Metal"){
        header("location:metal.php?$categoryDB");
    }else if($categoryDB=="Classical"){
        header("location:classical.php?$categoryDB");
    }else if($categoryDB=="R'n'B"){
        header("location:rnb.php?$categoryDB");
    }else if($categoryDB=="General"){
        header("location:home1.php?$categoryDB");
    }
?>