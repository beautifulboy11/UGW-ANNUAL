<?php
	require '../config/config.php'; 
	

	// Check connection status
	if ($DB_CONNECTION->connect_error) {
	    die("Connection failed: " . $DB_CONNECTION->connect_error);
	} 
	
	$sql = "SELECT `academic_year`, `open_date`, `close_date` FROM `ugw_dates` ORDER BY academic_year DESC";
        
        if(!$results = $DB_CONNECTION->query($sql)){
            echo " " . $sql . "<br />" ."<span style='color:red;'>". $DB_CONNECTION->error;"</span>";
            exit(); 
        }
        //show articles without
        
        
        $data = array();
         while($row=$results->fetch_assoc()){
            //$data []=$row;
             $data [] = array(
                 'year'=>$row['academic_year'],
                 'openning_date'=>$row['open_date'],
                 'closing_date'=>$row['close_date'],                 
             );
         }
         
        header('Content-type: application/json');
	echo json_encode($data);

