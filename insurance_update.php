<?php include 'insurance.php';
 // Taking all 5 values from the form data(input)
 $inputdata =  $_REQUEST['inputdata'];
 
 $patientid = $_REQUEST['patientid'];

 $colname = $_REQUEST['colname'];



        $sql = "UPDATE  tbl_insurance SET ".$colname."='".$inputdata."'   WHERE id='".$patientid."'" ;

  if(mysqli_query($conn, $sql)){
            echo "data has been update successfully";
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }

        ?>
  