<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>
<style>
    .
    </style>
<body>
    <div class="center">
    <?php include 'insurance.php';
 // Taking all 5 values from the form data(input)
 $name =  $_REQUEST['name'];
 $phone = $_REQUEST['phone'];
 $fax =  $_REQUEST['fax'];
 $hospital = $_REQUEST['hospital'];
 $address = $_REQUEST['address'];
 
 $email = $_REQUEST['email'];



$sql = "INSERT INTO tbl_insurance VALUES ('".$name."',  '".$phone."',  '".$fax."' ,'".$hospital."', '".$address."', '".$id."', '".$email."')";

  if(mysqli_query($conn, $sql)){
            echo "data has been saved successfully";
 
            echo nl2br("\n$name\n $phone\n "
                . "$fax\n $hospital\n $address  \n $email");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         

if ($conn->multi_query($sql) === TRUE) {
  echo "<br>New records created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

?>
</div>
</body>

</html>
