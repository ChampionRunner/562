<!DOCTYPE html>
<?php
include "conn.php";
Session_Start();	
?>

<html lang="en">
<head>
	<script src="https://cdn.zingchart.com/zingchart.min.js"></script>
     <!--Import Google Icon Font-->
     <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <!--Import materialize.css-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">

	 
     <!--Let browser know website is optimized for mobile-->
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
     <title>View Students</title>
	 


   </head>
<body>

     <?php include("header.php");?>
        <div class="container" style="border:none;"> 
                
                <div class="row">
                    <div class="" style="margin-left:-18%;">
                        <div id="main" class="card">
                            <div class="card-content">
                                <span class="card-title"> 
                                    <h5><b>External Criteria</b></h5>
                                        <div>
            
		 		 <form method="GET" action="filterpie1.php">


<div class="input-field col s3">
    <select name="District" id="District" > 
      <option value="" disabled selected>Select District</option>
      <option value="Ahmedabad">AHMEDABAD</option>
      <option value="Surat">SURAT</option>
      <option value="Vadodara">VADODRA</option>
      <option value="Kheda">KHEDA</option>
     
    </select>
    
  </div> 
  <input class="waves-effect waves-light btn blue" type="submit" name="submit" value="Apply Filter" />
			
			</form>
			<?php
			if(isset($_GET['submit'])){
			$_SESSION['District'] = $_GET['District'];
			}
?>

</div>
</div>    
</span>
</div>


</div>
</div>
</div> 
             

            

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
    <script src="app.js"></script>
    <script>
	 $(document).ready(function(){
    // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
  });

	$(document).ready(function() {
    $('select').material_select();
  });
       $(".button-collapse").sideNav();

        // Init Sidenav
        $('.button-collapse').sideNav();
    </script>
    <script>
         $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15, // Creates a dropdown of 15 years to control year,
    today: 'Today',
    clear: 'Clear',
    close: 'Ok',
    closeOnSelect: false // Close upon selecting a date,
  });
    </script>
</body>
</html>
