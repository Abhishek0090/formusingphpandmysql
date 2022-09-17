<?php include 'insurance.php';
 // Taking all 5 values from the for    m data(input)
 $inputdata =  $_REQUEST['inputdata'];
 
 $employeeid = $_REQUEST['employeeid'];
 $colname = $_REQUEST['colname'];



        $sql = "UPDATE  tbl_patient SET ".$colname."='".$inputdata."'   WHERE id='".$employeeid."'" ;

  if(mysqli_query($conn, $sql)){
            echo "data has been update successfully";
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }

        ?>
