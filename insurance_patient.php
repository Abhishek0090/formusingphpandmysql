<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>
<style>
    
    </style>
<body>
    <div class="center">
    <?php include 'insurance.php';
 // Taking all 5 values from the form data(input)
 $patient =  $_REQUEST['patient'];
 $gender = $_REQUEST['gender'];
 $age =  $_REQUEST['age'];
 $dob = $_REQUEST['dob'];
 $contact = $_REQUEST['contact'];
 $relativeno = $_REQUEST['relativeno'];
 $insurance = $_REQUEST['insurance'];
 $policyno = $_REQUEST['policyno'];
 $employeeid = $_REQUEST['employeeid'];
 $mediclaim = $_REQUEST['mediclaim'];
 $physician = $_REQUEST['physician'];
 $namephysician = $_REQUEST['namephysician'];
 $contactifany = $_REQUEST['contactifany'];
 $addresspat = $_REQUEST['addresspat'];

 $occupation = $_REQUEST['occupation'];




$sql = "INSERT INTO tbl_patient VALUES ('".$patient."',  '".$gender."',  '".$age."' ,'".$dob."', '".$contact."', '".$relativeno."','".$insurance."','".$policyno."','".$employeeid."','".$mediclaim."','".$physician."','".$namephysician."','".$contactifany."', '".$addresspat."','".$occupation."')";

//   if(mysqli_query($conn, $sql)){
//             echo "data has been saved successfully";
 
//             echo nl2br("\n$name\n $phone\n "
//                 . "$fax\n $hospital\n $address  \n $email");
//         } else{
//             echo "ERROR: Hush! Sorry $sql. "
//                 . mysqli_error($conn);
//         }
         

// if ($conn->multi_query($sql) === TRUE) {
//   echo "<br>New records created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }

?>
</div>
</body>

</html>
