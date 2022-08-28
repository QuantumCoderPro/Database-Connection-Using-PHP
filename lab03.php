<?php

    $con = mysqli_connect('localhost','root','root','demo',8000);
    
    if(!$con) {
        die("Could not connect");
    } else {
        echo "Congrats";
        echo "<br/>";
        $sql = "INSERT INTO EMP_DEPT(EMP_DEPT, DEPT_TYPE, EMP_DEPT_NO ) 
        VALUES(
        '$_POST[empDEPT]',
        '$_POST[deptTYPE]',
        '$_POST[EMP_DEPT_NO]'
        )";
    }

    if(!mysqli_query($con, $sql)) {
        die("Error");
    } else {
        echo "1 record added to EMP_DEPT";
    }
    mysqli_close($con);
?>