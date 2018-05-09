<!DOCTYPE html>
<?php
include "conn.php";	
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
     <title></title>
   </head>
<body>


     <?php include("header.php");?>
	 <div>
		<p><h3>Statistical Data</h3></p>
	<p><a href="filterpie.php">View District Wise Male & Female Ratio</a></p>
	
	<p><a href="pie.php">View Top 5 District in Sports and their percentage of contribution</a></p>

   <p> <a href="pie1.php">View Top 5 District in Cultural and their percentage of contribution</a></p>
        
	<p><a href="pie2.php">View Top 5 District in External Academics and their percentage of contribution</a></p>
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