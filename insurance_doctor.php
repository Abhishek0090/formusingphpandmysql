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
 $namedoc =  $_REQUEST['namedoc'];
 $contactdoc = $_REQUEST['contactdoc'];
 $complaints =  $_REQUEST['complaints'];
 $relevant = $_REQUEST['relevant'];




$sql = "INSERT INTO tbl_patient VALUES ('".$namedoc."',  '".$contactdoc."',  '".$complaints."' ,'".$relevant."')";

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
