<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Insurance Form</title>
    
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
  </head>
  
  <body class="hold-transition sidebar-mini">
  <?php include 'insurance.php';?>
<div class="wrapper">


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="insurance_insert.php" method="post" >
                <div class="card-body">

                  <div class="form-group">
                    <label for="input-group-text">Name of TPA/Insurance Company</label>
                    <input type="text" class="form-control" name="name" onChange="update_data('name','Name','1')" id="name" >
                  </div>

                  <div class="form-group">
                    <label for="input-group-text">Phone Number</label>
                    <input type="text" class="form-control" name="phone"  onChange="update_data('number','Phone','1')" id="number" placeholder="Enter your Number">
                  </div>

                  <div class="form-group">
                    <label for="input-group-text">Fax</label>
                    <input type="text" class="form-control" name="fax"  onChange="update_data('fax','Fax','1')" id="fax" placeholder="Enter your Number">
                  </div>

                  <div class="form-group">
                    <label for="input-group-text">Name of the Hospital</label>
                    <input type="text" class="form-control" name="hospital"  onChange="update_data('hospital','Hospital','1')"  id="hospital" >

                    <oi>
                      <ui>i. Address</ui>
                      <input type="text" class="form-control" name="address"  onChange="update_data('address','Address','1')"  id="address" >
                    </oi>
                     <oi>

                      <ui>ii. Email</ui>
                      <input type="exampleInputEmail1" class="form-control" name="email"  onChange="update_data('email','Email','1')"  id="email" placeholder="Enter your Email">
                    </oi>
                    
                    <br/>





                    <h2>To be filled by insured patient</h2>

                    <div class="form-group">
                    <label for="input-group-text">Name of Patient</label>
                    <input type="text" class="form-control" name="patient" onChange="update_patient('patient','Patient','1')" id="patient" placeholder="Enter your patient name">
                  </div>

                  <div class="form-group">
                    <label for="input-group-text">Gender</label>
                    <input type="text" class="form-control" name="gender" onChange="update_patient('gender','Gender','1')" id="gender" placeholder="Enter your gender">
                  </div>

                  <div class="form-group">
                    <label for="input-group-text">Age</label>
                    <input type="text" class="form-control" name="age" onChange="update_patient('age','Age','1')" id="age" placeholder="Enter your age">
                  </div>

                  <div class="form-group">
                    <label for="input-group-text">Date of Birth</label>
                    <input type="text" class="form-control" name="dob" onChange="update_patient('dob','DOB','1')" id="dob" placeholder="Enter your date of birth">
                  </div>

                  <div class="form-group">
                    <label for="input-group-text">Contact</label>
                    <input type="text" class="form-control" name="contact" onChange="update_patient('contact','Contact','1')" id="contact" placeholder="Enter your Contact">
                  </div>
                  
                  <div class="form-group">
                    <label for="input-group-text">Contact of relative</label>
                    <input type="text" class="form-control" name="relativeno" onChange="update_patient('relativeno','Relativeno','1')" id="relativeno" >
                  </div>

                  <div class="form-group">
                    <label for="input-group-text">Insured card ID number </label>
                    <input type="text" class="form-control" name="insurance" onChange="update_patient('insurance','InsuranceId','1')" id="insurance" >
                  </div>

                  <div class="form-group">
                    <label for="input-group-text">Policy Number / Name of corporate </label>
                    <input type="text" class="form-control" name="policyno" onChange="update_patient('policyno','Policyno','1')" id="policyno" >
                  </div>
                  <div class="form-group">
                    <label for="input-group-text">Employee ID</label>
                    <input type="text" class="form-control" name="employeeid" onChange="update_patient('employeeid','Id','1')" id="employeeid" >
                  </div>

                  <div class="form-group">
                    <label for="input-group-text">Currently do you have any other mediclaim health issurance</label>
                    <input type="text" class="form-control" name="mediclaim" onChange="update_patient('mediclaim','Mediclaim','1')" id="mediclaim" >
                  </div>

                  <div class="form-group">
                    <label for="input-group-text">Do you have a family physician</label>
                    <input type="text" class="form-control" name="physician" onChange="update_patient('physician','Physician','1')" id="physician" >
                  </div>

                  <div class="form-group">
                    <label for="input-group-text">Name of the family physician</label>
                    <input type="text" class="form-control" name="namephysician" onChange="update_patient('namephysician','NamePhysician','1')" id="namephysician" >
                  </div>

                  <div class="form-group">
                    <label for="input-group-text">Contact Number if any</label>
                    <input type="text" class="form-control" name="contactifany" onChange="update_patient('contactifany','Contactifany','1')" id="contactifany" >
                  </div>

                  <div class="form-group">
                    <label for="input-group-text">Current Address of insured patient</label>
                    <input type="text" class="form-control" name="addresspat" onChange="update_patient('addresspat','AddressPat','1')" id="addresspat" >
                  </div>

                  <div class="form-group">
                    <label for="input-group-text">Occupation of insured patient</label>
                    <input type="text" class="form-control" name="occupation" onChange="update_patient('occupation','Occupation','1')" id="occupation" >
                  </div>
                  

                  <h2>To be filled by the doctor</h2>
                  <div class="form-group">
                    <label for="input-group-text">Doctor Id</label>
                    <input type="text" class="form-control" name="id" onChange="update_doctor('id','Id','1')" id="id" >
                  </div>

                  <div class="form-group">
                    <label for="input-group-text">Name of the doctor</label>
                    <input type="text" class="form-control" name="namedoc" onChange="update_doctor('namedoc','NameDoc','1')" id="namedoc" >
                  </div>

                  <div class="form-group">
                    <label for="input-group-text">Contact of doctor</label>
                    <input type="text" class="form-control" name="contactdoc" onChange="update_doctor('contactdoc','ContactDoc','1')" id="contactdoc" >
                  </div>


                  <div class="form-group">
                    <label for="input-group-text">Nature of illness / Disease with presenting complaints</label>
                    <input type="text" class="form-control" name="complaints" onChange="update_doctor('complaints','Complaints','1')" id="complaints" >
                  </div>

                  <div class="form-group">
                    <label for="input-group-text">Relevant Critical Findings</label>
                    <input type="text" class="form-control" name="relevant" onChange="update_doctor('relevant','Relevant','1')" id="relevant" >
                  </div>
                  </div>
            <!-- /.card -->

</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
function update_data(inputid,colname,patientid ){
    $.ajax({
			url: "insurance_update.php",
			type: "POST",
			cache: false,
			data:{
				inputdata: $('#'+inputid).val(),
              
				patientid: patientid,
                colname: colname
          

			},
			success: function(dataResult){
				console.log(dataResult);
			}
});
}
function update_patient(inputid,colname,employeeid ){
    $.ajax({
			url: "patient_update.php",
			type: "POST",
			cache: false,
			data:{
				inputdata: $('#'+inputid).val(),
              
				employeeid: employeeid,
                colname: colname
          

			},
			success: function(dataResult){
				console.log(dataResult);
			}
});
}
function update_doctor(inputid,colname,doctorid ){
    $.ajax({
			url: "doctor_update.php",
			type: "POST",
			cache: false,
			data:{
				inputdata: $('#'+inputid).val(),
              
				doctorid: doctorid,
                colname: colname
          

			},
			success: function(dataResult){
				console.log(dataResult);
			}
});
}
$(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>
