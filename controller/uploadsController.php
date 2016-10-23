<?php
	//check existance of uploads directory,if does not exist, make one
	if(!is_dir('../uploads')){
		mkdir("../uploads");
	}
	require '../model/uploadModel.php'; // file handling database interactions
        $target_dir = "../uploads/"; // directory where our files will be stored
	$target_file = $target_dir .basename($_FILES['uploadedfile']['name']); // specifies path of file to be uploaded
        $fileType = pathinfo($target_file,PATHINFO_EXTENSION);//get extension of selected file
        $uploadStatus = 1; //keeps the status of the uploaded file
        
        //check if file being uploaded exits in directory
       if(file_exists($target_file)){
           echo 'Sorry, file already exits';
           $uploadStatus = 0;
       }
       // check size of the selected file
       if($_FILES['uploadedfile']['size'] > 500000){
           echo 'file is too large';
           $uploadStatus = 0;
       }
        
       //check file extension/ only images and document files are allowed
       if($fileType !="jpg" && $fileType !="png" && $fileType !="jpeg" && $fileType !="docx"){
       
       $_SESSION['uploadStatus'] = $uploadStatus;
       header("location:../views/student/index.php");
       $uploadStatus = 0;
       }
       if($uploadStatus == 0){
           echo 'Sorry, your file was not uploaded';
       } else {
	if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'],$target_file)){
		saveData($target_file);
		header("location:../views/student/index.php");
	}else{
		if(copy($_FILES['uploadedfile']['tmp_name'],$target_file)){
			saveData($target_file);
			header("location:../views/student/index.php");
		}else
		{
			echo 'You totally failed. click <a href="index.php">here</a> to go back and try again';
		}
	}
        }
        ?>