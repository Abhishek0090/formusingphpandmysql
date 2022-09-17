<?php include 'insurance.php';
 // Taking all 5 values from the form data(input)
 $inputdata =  $_REQUEST['inputdata'];

 $doctorid = $_REQUEST['doctorid'];
 $colname = $_REQUEST['colname'];



        $sql = "UPDATE  tbl_doctor SET ".$colname."='".$inputdata."'   WHERE id='".$doctorid."'" ;

  if(mysqli_query($conn, $sql)){
            echo "data has been update successfully";
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
?>